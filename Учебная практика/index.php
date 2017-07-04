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
			<h3>Руководство студ. работой</h3>
			<div class="main-text-content">
				<?php
					include ('dao.php');
					session_start();
					$id = $_SESSION['Id'];
					echo "</br>";
					echo "</br>";
					if($_SESSION['Name']){
						echo "<p><u>Вы вошли на сайт как: ".$_SESSION['Name']."</u></p>";
					}
					else{
						echo "Вы вошли на сайт, как: Гость.";
					}
					echo "</br>";
					echo "</br>";
					echo "<table border = 1>
					<tr>
						<th>Фамилия</th>
						<th>Имя</th>
						<th>Курс</th>
						<th>Статус</th>
						<th>Преподаватель</th>
						<th>Кафедра</th>
					</tr>";
					$dao = new DAO();
					$sqlStudents = $dao->getStudents();
					while ($sql = mysqli_fetch_array($sqlStudents, MYSQLI_ASSOC)) {
						echo "<tr><td>" . $sql['FirstName'] . "</td>";
						echo "<td>" . $sql['LastName'] . "</td>";
						echo "<td>" . $sql['Course'] . "</td>";
						echo "<td>" . $sql['Status'] . "</td>";
						echo "<td>" . $sql['Teacher'] . "</td>";
						echo "<td>" . $sql['Pulpit'] . "</td>";
						if($_SESSION['Name']){
							echo "<td> <form action=\"change.php\" method=\"post\">";
							$temp = $sql['ID'];
							echo "<input name =\"ID\" hidden  type=\"text\" value = $temp >";
							echo "<input type=\"submit\" name= '$temp' value=\"изменить\" >
						</form> </td>";
					}
					echo "</tr>";
				}
				echo "</table>";
				// mysqli_close($link);
				if($_SESSION['Name']){
				echo"<p>
					<a href=\"addSt.php\">Добавить студента </a>
					| 
					<a href=\"addFP.php\"> Добавить кафедру и факультет </a>
					| 
					<a href=\"addTeacher.php\"> Добавить преподавателя </a></p>";
				}
				echo "</br></br>"
			?>
	</div>
</div>
</div>
</body>