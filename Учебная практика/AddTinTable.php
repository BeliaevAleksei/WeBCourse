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
			<h3>Добавление преподавателя</h3>
			<div class="main-text-content">
				<?php
				include ('dao.php');
				session_start();
				$firstName = $_POST['firstname'];
				$lastName =$_POST['lastname'];
				$faculty = $_POST['faculty'];
				$pulpit = $_POST['pulpit'];
				$flag = 'false';
				if ((!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (!empty($_POST['faculty'])) 
					&& (!empty($_POST['pulpit']))){
					$dao = new DAO();
					$sqlPulpit = $dao->getPulpit();
					while ($sql = mysqli_fetch_array($sqlPulpit, MYSQLI_ASSOC)) {
						if(strcmp($sql['Faculty'],$faculty) == 0  &&strcmp($sql['Pulpit'],$pulpit)){
							$flag = 'true';
						}
					}
					if(strcmp($flag,'false') == 0){
						echo "<p>На указанном факультете нет такой кафедры</p>";
					}
					else{
					    $dao2 = new DAO();
						$dao2->addTeacherIntable($firstName, $lastName, $pulpit);
						echo "<p>Преподаватель $firstName успешно добавлен</p>";
					}
				}
				else {
					echo "<p>Не корректный ввод</p>";
				}
				
				
				?>
			</div>
		</div>
	</div>
</body>
</html>