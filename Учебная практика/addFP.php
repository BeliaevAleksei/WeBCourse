<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="./img/znachok.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/main.css">
	<title>Managment</title>

</head>
<body>
	<div class="page">
		<div class="header">
			<ul id="navbar">
				<li><a href="index.php">Таблица</a></li>
				<li><a href="authorization.php">Авторизация</a></li>
				<li><a href="back.php">Обр.связь</a></li>
			</ul>
		</div>
		<div class="main-text">
			<h3>Добавление факультета и кафедры</h3>
			<div class="main-text-content">
			    <?php
					include ('dao.php');
					session_start();
					echo "</br>";
					echo "</br>";
					echo "<table border = 1>
					<tr>
						<th>Факультет</th>
						<th>Кафедра</th>
					</tr>";
					$dao = new DAO();
					$sqlFP = $dao->getPulpit();
					while ($sql = mysqli_fetch_array($sqlFP, MYSQLI_ASSOC)) {
						echo "<tr><td>" . $sql['Faculty'] . "</td>";
						echo "<td>" . $sql['Pulpit'] . "</td>"; 
						if($_SESSION['Name']){
							echo "<td> <form action=\"deleteFP.php\" method=\"post\">";
							$temp = $sql['ID'];
							echo "<input name =\"ID\" hidden  type=\"text\" value = $temp >";
							echo "<input type=\"submit\" name= '$temp' value=\"удалить\" >
						</form> </td>";
					}
					echo "</tr>";
				}
				echo "</table>";
				echo "<form action=\"AddFPinTable.php\" method=\"post\">";
				echo "<div><label> Факультет</label> <input required type=\"text\" name=\"faculty\"></div>";
				echo "<div><label> Кафедра </label> <input required type=\"text\" name=\"pulpit\"></div>
				<br><br>";
				echo "<input type=\"submit\" value=\"Отправить\">
				<br><br> </form>";
				?>
			</div>
</div>
</div>
</body>