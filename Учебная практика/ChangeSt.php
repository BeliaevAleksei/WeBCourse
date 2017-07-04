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
				include ('dao.php');
				session_start();
				$id =  $_POST['ID'];
				$firstName = $_POST['firstName'];
				$lastName =$_POST['lastName'];
				$course = $_POST['Course'];
				$status = $_POST['Status'];
				$teacher =$_POST['Teacher'];
				$pulpit =$_POST['Pulpit'];
				if ((!empty($_POST['firstName'])) && (!empty($_POST['lastName'])) && (!empty($_POST['Course'])) 
					&& (!empty($_POST['Status']))&& (!empty($_POST['Pulpit'])) && (!empty($_POST['Teacher']))) 
				{
					$dao = new DAO();
					$sqlTeacher = $dao->sql_query("SELECT * FROM Teachers where FirstName = '$teacher' AND Pulpit = '$pulpit'");
					$sql = mysqli_fetch_array($sqlTeacher, MYSQLI_ASSOC);
					if(!$sql){
						echo "<p>На данной кафедре нет такого преподавателя</p>";
					}
					else{
					    $dao = new DAO();
						if(strcmp($course,1) == 0 || strcmp($course,2) == 0){
							$dao->updateST($id, $firstName, $lastName, $course, "Haven't teacher", '', '');
						}
						if(strcmp($course,3) == 0 || strcmp($course,4) == 0){
							if(strcmp($status,"Haven't teacher") == 0 || strcmp($status,"Transfer") == 0)
							{
								$dao->updateST($id, $firstName, $lastName, $course, $status, '', '');
							}
							else{
								$dao->updateST($id, $firstName, $lastName, $course, $status, $teacher, $pulpit);
							}
						}
						echo "</br><p> Студент $firstName успешно изменен </p></br>";
					}
				}
				else {
					echo "<p>Не корректный ввод</p>";
				}
				echo "<a href=\"main.php\">Назад</a>";
				
				?>
			</div>
		</div>
	</div>
</body>
</html>