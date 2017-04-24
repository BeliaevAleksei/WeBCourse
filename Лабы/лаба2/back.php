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
				<form action="add.php" method="post">
					<label for="logins"> Логин </label>
					<input type="text" name="login" placeholder="Царь">
					<br><br>
					<label>
						Э. почта
						<input type="email" name = "email" placeholder="Царь@mail.ru"></input>
					</label>
					<br><br>
					<label>
						Пароль
						<input type="password" name= "password" placeholder="1234"></input>
					</label>
					<br><br>
					<textarea name="message" id="about" rows="5" placeholder="Описание поподробнее"></textarea>
					<br><br>
					<input type="checkbox" name="check" id="check">
					<label for="check">Обработку персональных данных</label>
					<br><br>
					<input type="submit" value="Отправить">
					</form>
				</div>
			</div>
			</div>
</body>
</html>