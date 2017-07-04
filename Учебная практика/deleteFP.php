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
			<h3>Удаление факультета и кафедры</h3>
			<div class="main-text-content">
				<?php
				include ('dao.php');
				session_start();
				$id = $_POST['ID'];
				$dao = new DAO();
				$sqlFP = $dao->deleteFP($id);
				header("Location: addFP.php");
				?>
			</div>
		</div>
	</div>
</body>
</html>