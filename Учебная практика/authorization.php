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
				<!--<li><a href="info.php">Профиль</a></li>-->
				<li><a href="back.php">Обр.связь</a></li>
			</ul>
		</div>
		<div class="main-text">
			<h3>Авторизация</h3>
			<div class="main-text-content">
				<?php
				include ('dao.php');
				session_start();
				$check = $_SESSION['check'];
				if($check){
					echo "Некорректный ввод";
					unset($_SESSION['check']);
				}
				$nameAdd = $_SESSION['nameAdd'];
				if($nameAdd){
					echo "Пользователь $nameAdd успешно добавлен";
					unset($_SESSION['nameAdd']);
				}
				$name = $_SESSION['Name'];
				
				if(!$_SESSION['Name']){
					echo "</br>";
					echo "<form action=\"login.php\" method=\"post\">
					<label for=\"logins\"> Логин </label>
					<input type=\"text\" name=\"login\" placeholder=\"Фамилия\">
					<br><br>
					<label>
						Пароль
						<input type=\"password\" name= \"password\" placeholder=\"1234\"></input>
					</label>
					<br><br>
					<input type=\"submit\" value=\"Отправить\">
					<br><br>
					
				</form>";
			}
			else if(strcmp($name, 'Admin') == 0){
				$dao = new DAO();
				echo $name;
				echo "</br>";
				echo "Добавить преподавателя";
				echo "</br>";
				echo "<form action=\"AddT.php\" method=\"post\">
				<p> <label> Логин </label> 
					<select  name=\"List\">
						<option disabled>Выберите преподавателя</option>";
						$dao = new DAO();
						$sqlTeacher = $dao->getTeachers();
						while ($sql = mysqli_fetch_array($sqlTeacher, MYSQLI_ASSOC)) {
							$res = $sql['FirstName'];
							echo "<option value=\"$res\">$res</option>";
						}
						echo "</select></p>
						<br>
						<label>
							Пароль
							<input required type=\"password\" name= \"password\" placeholder=\"1234\"></input>
						</label>
						<p><input type=\"submit\" value=\"Отправить\"></p></form>
					</br><form class=\"exit-button\" action=\"abortSession.php\" method=\"post\">
					<input class=\"exit-button\" type=\"submit\" id=\"button\" value=\"exit\"/>
				</form></br></br>";
			}
			else if(strcmp($name,'Admin') !== 0){
				echo "<table border = 1>
				<tr>
					<th>Фамилия</th>
					<th>Имя</th>
					<th>Факультет</th>
					<th>Кафедра</th>
				</tr>";
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
				echo "</table>";
				
				
				echo "</br><form class=\"exit-button\" action=\"abortSession.php\" method=\"post\">
				<input class=\"exit-button\" type=\"submit\" id=\"button\" value=\"exit\"/>
			</form></br></br>";
		}
		
		?>
	</div>
</div>
</div>
</body>