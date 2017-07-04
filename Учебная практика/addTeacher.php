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
					echo "</br>";
					echo "</br>";
					echo "<table border = 1>
				    <tr>
					<th>Фамилия</th>
					<th>Имя</th>
					<th>Факультет</th>
					<th>Кафедра</th>
				    </tr>";
				    $dao = new DAO();
				    $sqlTeacher = $dao->sql_query("SELECT Teachers.ID, Teachers.FirstName, Teachers.LastName, FacultyAndPulpit.Faculty, Teachers.Pulpit FROM FacultyAndPulpit, Teachers 
					    where FacultyAndPulpit.Pulpit = Teachers.Pulpit");
				    while ($sql = mysqli_fetch_array($sqlTeacher, MYSQLI_ASSOC)){
				    	echo "<tr><td>" . $sql['FirstName'] . "</td>";
					    echo "<td>" . $sql['LastName'] . "</td>";
				    	echo "<td>" . $sql['Faculty'] . "</td>";
				    	echo "<td>" . $sql['Pulpit'] . "</td>";
				    	echo "<td> <form action=\"deleteT.php\" method=\"post\">";
							$temp = $sql['ID'];
							echo "<input name =\"ID\" hidden  type=\"text\" value = $temp >";
							echo "<input type=\"submit\" name= '$temp' value=\"удалить\" >
						</form> </td>";
						echo "</tr>";
			    	};
				    echo "</table>";
					
				
				echo "</br><form action=\"AddTinTable.php\" method=\"post\">";
				echo "<div><label> Фамилия</label> <input required type=\"text\" name=\"firstname\"></div>";
				echo "<div><label> Имя </label> <input required type=\"text\" name=\"lastname\"></div>";
				echo "<p> <label> Факультет </label> 
					<select  name=\"faculty\">
						<option disabled>Выберите факультет</option>";
						$dao = new DAO();
						$sqlF = $dao->sql_query("SELECT DISTINCT Faculty FROM FacultyAndPulpit ");
						while ($sql = mysqli_fetch_array($sqlF, MYSQLI_ASSOC)) {
							$res = $sql['Faculty'];
							echo "<option value=\"$res\">$res</option>";
						}
						echo "</select></p>";
				echo "<p> <label> Кафедра </label> 
					<select  name=\"pulpit\">
						<option disabled>Выберите факультет</option>";
						$dao = new DAO();
						$sqlP = $dao->sql_query("SELECT DISTINCT Pulpit FROM FacultyAndPulpit ");
						while ($sql = mysqli_fetch_array($sqlP, MYSQLI_ASSOC)) {
							$res = $sql['Pulpit'];
							echo "<option value=\"$res\">$res</option>";
						}
						echo "</select></p>
				<br><br>";
				echo "<input type=\"submit\" value=\"Отправить\">
				<br><br> </form>";
				?>
			</div>
</div>
</div>
</body>