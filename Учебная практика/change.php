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
			<h3>Добавление студента</h3>
			<div class="main-text-content">
				<?php
				session_start();
				include ('dao.php');
				$id = $_POST['ID'];
				echo "</br>";
				echo "<form action=\"ChangeSt.php\" method=\"post\">";
				$dao = new DAO();
				$sqlST = $dao->sql_query("SELECT * FROM Students WHERE ID = '$id'");
				$sql = mysqli_fetch_array($sqlST, MYSQLI_ASSOC);
				echo "<input name =\"ID\" hidden  type=\"text\" value = $id >";
				$temp = $sql['FirstName'];
				echo "<label> Фамилия</label> <input required type=\"text\" name=\"firstName\" value = \"$temp\">
				<br><br>";
				$temp = $sql['LastName'];
				echo "<label> Имя </label> <input required type=\"text\" name=\"lastName\" value = \"$temp\">
				<br><br>";
				echo " <p> <label> Курс </label>";
				echo "<select  name=\"Course\">";
				$temp = $sql['Course'];
				echo "<option value=\"$temp\">$temp</option>
				<option value= \"1\"> 1 </option>
				<option value= \"2\"> 2 </option>
				<option value= \"3\"> 3 </option>
				<option value= \"4\"> 4 </option>";
				echo "</select></p>
				<br><br>";

				echo "<p> <label> Статус </label>";
				echo "<select  name=\"Status\">";
				$temp = $sql['Status'];
				echo "<option value=\"$temp\">$temp</option>
				<option value= \"Haven't teacher\"> Haven't teacher </option>
				<option value= \"Transfer\"> Transfer </option>
				<option value= \"Appointment of teacher\"> Appointment of teacher </option>
				<option value= \"Change of teacher\"> Change of teacher </option>";
				echo "</select></p>
				<br><br>";
				
				echo "<p> <label> Кафедра </label> 
				<select  name=\"Pulpit\">";
				$temp = $sql['Pulpit'];
				echo "<option value=\"$temp\">$temp</option>";
				$dao2 = new DAO();
				$sqlPulpit = $dao2->sql_query("SELECT DISTINCT Pulpit FROM FacultyAndPulpit ");
				while ($sql2 = mysqli_fetch_array($sqlPulpit, MYSQLI_ASSOC)) {
					$res = $sql2['Pulpit'];
					echo "<option value=\"$res\">$res</option>";
				}
				echo "</select></p>
				<br><br>";
				
				echo "<p> <label> Преподаватель </label>"; 
				echo "<select name=\"Teacher\">";
				$temp = $sql['Teacher'];
				echo "<option value=\"$temp\">$temp</option>";
				$dao = new DAO();
				$sqlTeacher = $dao->getTeachers();
				while ($sql2 = mysqli_fetch_array($sqlTeacher, MYSQLI_ASSOC)) {
					$res = $sql2['FirstName'];
					echo "<option value=\"$res\">$res</option>";
				}
				echo "</select></p>
				<br><br>";
				echo "<input type=\"submit\" value=\"Отправить\">
				<br><br> </form>";
				?>
			</div>
		</div>
	</div>

</body>
</html>
