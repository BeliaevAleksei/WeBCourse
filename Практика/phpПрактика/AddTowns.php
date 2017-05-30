<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <?php
          mysql_connect("localhost", "dislexsu", "");
          mysql_select_db("world");
          mysql_query("set names 'utf8';");
          $countrycode = $_POST['countrycode'];
          $city = $_POST['city'];
          $population = $_POST['population'];
        if(empty($countrycode) or empty($city) or empty($population)){
            echo "данные не могут быть равны '0' или пустые";
        }
          elseif($countrycode && $city && $population) {
            $sql = "insert into city (countrycode, name, population)
                    values ('".$countrycode."', '".$city."', '".$population."')";
            if(($population < 1)){
              echo "слишком маленькая популяция";
            }
            elseif(mysql_query($sql)){
              echo "Добавлен город ".mysql_insert_id().", ".$countrycode.", ".$city.", ".$population;
            }
              else {
              echo "Не существует такого кода страны";
            }
          }

        ?>
    </body>
</html>
