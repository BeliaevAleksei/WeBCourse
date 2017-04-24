<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="./img/znachok.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/main.css">
	<title>LineageII</title>

</head>
<body>
	<div class="page">
		<div class="header">
			<ul id="navbar">
				<li><a href="main.php">Новости</a></li>
				<li><a href="foto.html">Фото</a></li>
				<li><a href="info.html">Контакты</a></li>
				<li><a href="back.php">Обр.связь</a></li>
			</ul>
		</div>

		<div class="main-text">
			<h3>Обратная Связь</h3>
			<div class="main-text-content">
				
				<?php
				$link = mysql_connect("localhost", "dislexsu", "") or die("Невозможно подключение к MySQL" . mysql_error($link));
				mysql_select_db("Lineage");
				mysql_query("set names 'utf8';");
				$login = $_POST['login'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$check = $_POST['check'];
				echo "</br>";
				if($check != "on"){
					echo "Вы не согласились на обработку персональных данных";
					echo "</br>";
				}
				if(empty($login) or empty($password) or empty($message) or empty($email)){
					echo "Данные не могут быть пустыми";
					echo "</br>";
				}
				else {
					$sql = "INSERT INTO Message (login, password, email, message) VALUES ('".$login."', '".$password."', '".$email."', '".$message."')";
				}
				if(mysql_query($sql)){
					echo "Письмо отправлено, вы верентесь назад через 5секунд";
				//sleep(5);
					$back = $_SERVER['HTTP_REFERER'];
					echo "
					<html>
					<head>
						<meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
					</head>
					</html>";
				}
				else {
					echo "Письмо не отправлено";
					echo "</br>";
				}
				mysql_close ( $link );
				echo '</br>';
				?>
				
			</div>
		</div>
	</div>
</body>
</html>