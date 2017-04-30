<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="./img/znachok.jpg">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/main.css">
	<title>Быки и коровы</title>

</head>
<body>
	<div class="page">
		<div class="main-text">
			<h3>Быки и коровы</h3>
			<div class="main-text-content">
				<h2>Правила</h2>
				<ul>
					<li><p>Компьютер случайным образом загадывает 4-х значное число, в котором нет двух одинаковых цифр</p></li>
					<li><p>Ваша цель – угадать его за минимальное количество попыток.</p></li>
					<li><p>Верно угаданные цифры, оказавшиеся на своем месте – это «быки», а «коровы» – цифры, 
						которые есть в загаданном числе, но в комбинации игрока стоят не на своем месте.</p></li>
						<li><p>После каждой попытки вы будете получать сообщение о том, сколько у вас «быков» и «коров».</p></li>
					</ul>
					<div class="clearbox"></div>
				</div>
			</div>
			<form action="game.php" method="post">
				<input type="text" name="Number" placeholder="Ваше число">
				<br><br>
				<input type="submit" value="Начать" >
			</form>
		</div>

	</body>
	</html>