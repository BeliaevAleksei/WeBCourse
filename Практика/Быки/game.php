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
				<div class="main-text-content">
					<?php
					session_start();
					$numberOfValues = 4;
					$Number = $_POST['Number'];
					
					//генирация числа, если оно не было сгенерировано
					if(!isset($_SESSION['botnumber'])){
						$values = array(1,2,3,4,5,6,7,8,9);
						$botnumber = array($a1, $a2, $a3, $a4);
						$a1 = $values[array_rand($values, 1)];
						$botnumber[0]=$a1;
						$values[$a1 - 1] = 0;
						for($i = 1; $i < $numberOfValues; $i++){
							$botnumber[$i] = $values[array_rand($values, 1)];
							if($botnumber[$i] == 0){
								unset($values[$a1 - 1]);
							}
							else{
								unset($values[$botnumber[$i] - 1]);
							}
						}
						$_SESSION['botnumber'] = $botnumber;
					}
					$bull = 0;
					$cow = 0;
					$check = 0;
					if (!preg_match("#^[0-9]+$#",$Number)){
						echo "есть посторонние символы";
						$check = 1;
					}
					
					$numbAr = str_split($Number);
					$result = array_unique($numbAr);
					$botnumber = $_SESSION['botnumber'];
					
					if(count($result)!=4){
						echo "введено не 4 цифры или введены одинаковые";
						$check = 1;
					}
					if($check != 1){
					    //создание массива из чисел введенных игроком.
						if(!isset($_SESSION['PlayerNumbers'])){
							$PN = array($Number);
							$_SESSION['PlayerNumbers'] = $PN;
						}
						else{
							$PN = $_SESSION['PlayerNumbers'];
							array_push($PN, $Number);
							$_SESSION['PlayerNumbers'] = $PN;
						}
						
					}
					
					

					
					echo"<table border=\"1\">";
					echo"<tr><th>Числа</th><th>Быки</th>
					<th>Коровы</th></tr>";
					
					    //сравнивание чисел
					    for($z=0; $z<count($PN); $z++){ /*все числа введенные 
					    	игроком */
					    	$Number = $PN[$z];
					    	$numbAr = str_split($Number);
					    	for($i=0; $i<$numberOfValues; $i++){
					    		for($j=0; $j<$numberOfValues; $j++){
					    			if($numbAr[$i] == $botnumber[$j]){
					    				if($i ==$j){
					    					$bull++;
					    				}
					    				else{
					    					$cow++;
					    				}
					    			}
					    		}
					    	}
					    	echo "<tr><td> $PN[$z] </td>
					    	<td> $bull </td><td> $cow </td></tr>";
					    	if($bull == 4){
					    		echo "</table>"; 
					    		echo "ПОБЕДА";
					    		unset($_SESSION['botnumber']);
					    		unset($_SESSION['PlayerNumbers']);
					    		session_destroy();
					    	}
					    	$bull = 0;
					    	$cow = 0;
					    }
					    echo "</table>";
					    ?>
					</div>
				</div>
				<form action="game.php" method="post">
					<input type="text" name="Number" placeholder="Ваше число">
					<br><br>
					<input type="submit" value="Отгадать" >
				</form>
			</div>

		</body>
		</html>