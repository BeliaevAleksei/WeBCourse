<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/main.css">
	<title>Managment</title>

</head>
<body>
	<div class="page">
	    <div class="header">
			<ul id="navbar">
				<li><a href="index.php">Список студентов</a></li>
				<li><a href="authorization.php">Авторизация</a></li>
				<li><a href="info.php">Профиль</a></li>
				<li><a href="back.php">Обр.связь</a></li>
			</ul>
		</div>
		<div class="main-text">
			<h3>Профиль</h3>
			<div class="main-text-content">
			    <table border = 1>
					<tr>
						<th>Фамилия</th>
						<th>Имя</th>
						<th>Факультет</th>
						<th>Кафедра</th>
					</tr>
			    <?php
					include ('dao.php');
					session_start();
					$name = $_SESSION['Name'];
					$dao = new DAO();
					$sqlTeacher = $dao->sql_query("SELECT Teachers.FirstName, Teachers.LastName, FacultyAndPulpit.Faculty, Teachers.Pulpit FROM FacultyAndPulpit, Teachers 
					where Teachers.FirstName = '$name' AND FacultyAndPulpit.Pulpit = Teachers.Pulpit");
					while ($sql = mysqli_fetch_array($sqlTeacher, MYSQLI_ASSOC)){
					echo "<tr><td>" . $sql['FirstName'] . "</td>";
					echo "<td>" . $sql['LastName'] . "</td>";
					echo "<td>" . $sql['Faculty'] . "</td>";
					echo "<td>" . $sql['Pulpit'] . "</td></tr>";
					}
					// echo "/tr";
					echo "</table>"
				?>
				<form class="exit-button" action="abortSession.php" method="post">
					<input class="exit-button" type="submit" id="button" value="exit"/>
				</form>
			</div>
</div>
</div>
</body>