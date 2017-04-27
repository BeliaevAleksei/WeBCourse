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
			<h3>Новости</h3>
			
			<?php
			$link = mysqli_connect("localhost", "dislexsu", "","Lineage") or die("Невозможно подключение к MySQL" . mysqli_error($link));
			mysqli_set_charset($link, 'utf8');
			$query ="SELECT * FROM News WHERE site= \"news3.php\"";
			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
			
			if($result)
			{
   					 $rows = mysqli_num_rows($result); // количество полученных строк
   					 for ($i = 0 ; $i < $rows ; ++$i)
   					 {
   					 	echo "<div class=\"main-text-content\">";
   					 	$row = mysqli_fetch_row($result);
   					 	echo "<a href=\"#\"><h2> $row[1] </h2></a>";
   					 	echo "<p>$row[3]</p> </br>";
   					 	echo "<div class=\"clearbox\"> </div> </div>";
   					 }
   					mysqli_free_result($result);
   					}
   					mysqli_close($link);
   					?>
   				</div>
   			</div>
   		</body>
   		</html>