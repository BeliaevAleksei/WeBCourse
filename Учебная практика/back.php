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
				<h3>Обратная Связь</h3>
			<div class="main-text-content">
			    <br><br>
				<form action="mail.php" method="post">
					<label> Логин </label>
					<input type="text" required name="login" >
					<br><br>
					<label>
						Э. почта
						<input type="email" required name = "email"></input>
					</label>
					<br><br>
					<textarea required name="message" id="about" rows="5" placeholder="Текст сообщения"></textarea>
					<br><br>
					<input type="submit" value="Отправить">
					<br><br>
					</form>
				</div>
			</div>
			</div>
			?>
	</div>
</div>
</div>
</body>