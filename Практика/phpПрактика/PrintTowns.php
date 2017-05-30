<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css.css" />
    <head>
    </head>
    <body>
        <table>
          <tr>
            <th>Страна</th>
            <th>Город</th>
            <th>Население</th>
          </tr>
          <?php
            mysql_connect("localhost", "dislexsu", "");
            mysql_select_db("world");
            mysql_query("set names 'utf8';");
            $sql = "SELECT city.name as city, country.name as country, city.population
FROM city, country
WHERE (
city.countrycode = country.code
)
AND (
city.population >1000000
)ORDER BY city.population DESC, city.name, country.name;";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
          ?>
              <tr>
                <td><?php echo $row["country"]; ?></td>
                <td><?=$row["city"] ?></td>
                <td><?= $row["population"]; ?></td>
              </tr>
            <?php }?>
        </table>
        <form action="AddTowns.php" method="post">
          <input type="text" name="countrycode"/>
          <input type="text" name="city"/>
          <input type="text" name="population"/>
          <input type="submit">
        </form>
    </body>
</html>