{"filter":false,"title":"AddFPinTable.php","tooltip":"/AddFPinTable.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":19},"end":{"row":12,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":15,"state":"start","mode":"ace/mode/php"}},"hash":"81baee751e9fc6b8148751bc99d1a0524228cd3f","undoManager":{"mark":91,"position":91,"stack":[[{"start":{"row":0,"column":0},"end":{"row":66,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html>","<head>","\t<link rel=\"icon\" type=\"image/x-icon\" href=\"./img/znachok.jpg\">","\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />","\t<link rel=\"stylesheet\" href=\"css/main.css\">","\t<title>Managment</title>","","</head>","<body>","\t<div class=\"page\">","\t\t<div class=\"header\">","\t\t\t<ul id=\"navbar\">","\t\t\t\t<li><a href=\"main.php\">Таблица</a></li>","\t\t\t\t<li><a href=\"authorization.php\">Авторизация</a></li>","\t\t\t\t<li><a href=\"back.php\">Обр.связь</a></li>","\t\t\t</ul>","\t\t</div>","\t\t<div class=\"main-text\">","\t\t\t<h3>Добавление студента</h3>","\t\t\t<div class=\"main-text-content\">","\t\t\t\t<?php","\t\t\t\tinclude ('dao.php');","\t\t\t\tsession_start();","\t\t\t\t$firstName = $_POST['firstName'];","\t\t\t\t$lastName =$_POST['lastName'];","\t\t\t\t$course = $_POST['Course'];","\t\t\t\t$status = $_POST['Status'];","\t\t\t\t$teacher =$_POST['Teacher'];","\t\t\t\t$pulpit =$_POST['Pulpit'];","\t\t\t\tif ((!empty($_POST['firstName'])) && (!empty($_POST['lastName'])) && (!empty($_POST['Course'])) ","\t\t\t\t\t&& (!empty($_POST['Status']))&& (!empty($_POST['Pulpit'])) && (!empty($_POST['Teacher']))) ","\t\t\t\t{","\t\t\t\t\t$dao = new DAO();","\t\t\t\t\t$sqlTeacher = $dao->sql_query(\"SELECT * FROM Teachers where FirstName = '$teacher' AND Pulpit = '$pulpit'\");","\t\t\t\t\t$sql = mysqli_fetch_array($sqlTeacher, MYSQLI_ASSOC);","\t\t\t\t\tif(!$sql){","\t\t\t\t\t\techo \"<p>На данной кафедре нет такого преподавателя</p>\";","\t\t\t\t\t}","\t\t\t\t\telse{","\t\t\t\t\t    $dao2 = new DAO();","\t\t\t\t\t\tif(strcmp($course,1) == 0 || strcmp($course,2) == 0){","\t\t\t\t\t\t\t$dao2->addStudent($firstName, $lastName, $course, \"Haven't teacher\", '', '');","\t\t\t\t\t\t}","\t\t\t\t\t\tif(strcmp($course,3) == 0 || strcmp($course,4) == 0){","\t\t\t\t\t\t\tif(strcmp($status,\"Haven't teacher\") == 0 || strcmp($status,\"Transfer\") == 0)","\t\t\t\t\t\t\t{","\t\t\t\t\t\t\t\t$dao2->addStudent($firstName, $lastName, $course, $status, '', '');","\t\t\t\t\t\t\t}","\t\t\t\t\t\t\telse{","\t\t\t\t\t\t\t\t$dao2->addStudent($firstName, $lastName, $course, $status, $teacher, $pulpit);","\t\t\t\t\t\t\t}","\t\t\t\t\t\t}","\t\t\t\t\t\techo \"</br><p> Студент $firstName успешно добавлен </p></br>\";","\t\t\t\t\t}","\t\t\t\t}","\t\t\t\telse {","\t\t\t\t\techo \"<p>Не корректный ввод</p>\";","\t\t\t\t}","\t\t\t\t","\t\t\t\t","\t\t\t\t?>","\t\t\t</div>","\t\t</div>","\t</div>","</body>","</html>"],"id":1}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":26},"action":"remove","lines":["студента"],"id":2},{"start":{"row":19,"column":18},"end":{"row":19,"column":49},"action":"insert","lines":["Добавление факультета и кафедры"]}],[{"start":{"row":19,"column":7},"end":{"row":19,"column":18},"action":"remove","lines":["Добавление "],"id":3}],[{"start":{"row":24,"column":25},"end":{"row":24,"column":34},"action":"remove","lines":["firstName"],"id":4},{"start":{"row":24,"column":25},"end":{"row":24,"column":32},"action":"insert","lines":["faculty"]}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":31},"action":"remove","lines":["lastName"],"id":5},{"start":{"row":25,"column":23},"end":{"row":25,"column":29},"action":"insert","lines":["pulpit"]}],[{"start":{"row":26,"column":0},"end":{"row":29,"column":30},"action":"remove","lines":["\t\t\t\t$course = $_POST['Course'];","\t\t\t\t$status = $_POST['Status'];","\t\t\t\t$teacher =$_POST['Teacher'];","\t\t\t\t$pulpit =$_POST['Pulpit'];"],"id":6}],[{"start":{"row":25,"column":32},"end":{"row":26,"column":0},"action":"remove","lines":["",""],"id":7}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":13},"action":"remove","lines":["$lastName"],"id":8},{"start":{"row":25,"column":4},"end":{"row":25,"column":10},"action":"insert","lines":["pulpit"]}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["&"],"id":9}],[{"start":{"row":25,"column":5},"end":{"row":25,"column":6},"action":"insert","lines":["$"],"id":10}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"remove","lines":["&"],"id":11}],[{"start":{"row":24,"column":5},"end":{"row":24,"column":14},"action":"remove","lines":["firstName"],"id":12},{"start":{"row":24,"column":5},"end":{"row":24,"column":12},"action":"insert","lines":["faculty"]}],[{"start":{"row":26,"column":24},"end":{"row":26,"column":33},"action":"remove","lines":["firstName"],"id":13},{"start":{"row":26,"column":24},"end":{"row":26,"column":31},"action":"insert","lines":["faculty"]}],[{"start":{"row":26,"column":55},"end":{"row":26,"column":63},"action":"remove","lines":["lastName"],"id":14},{"start":{"row":26,"column":55},"end":{"row":26,"column":61},"action":"insert","lines":["pulpit"]}],[{"start":{"row":26,"column":65},"end":{"row":27,"column":94},"action":"remove","lines":[" && (!empty($_POST['Course'])) ","\t\t\t\t\t&& (!empty($_POST['Status']))&& (!empty($_POST['Pulpit'])) && (!empty($_POST['Teacher']))"],"id":15},{"start":{"row":26,"column":65},"end":{"row":26,"column":66},"action":"insert","lines":["="]}],[{"start":{"row":26,"column":68},"end":{"row":26,"column":69},"action":"insert","lines":["="],"id":16}],[{"start":{"row":26,"column":69},"end":{"row":26,"column":70},"action":"insert","lines":["="],"id":17}],[{"start":{"row":26,"column":69},"end":{"row":26,"column":70},"action":"remove","lines":["="],"id":18}],[{"start":{"row":26,"column":68},"end":{"row":26,"column":69},"action":"remove","lines":["="],"id":19}],[{"start":{"row":26,"column":67},"end":{"row":26,"column":68},"action":"remove","lines":[" "],"id":20}],[{"start":{"row":26,"column":66},"end":{"row":26,"column":67},"action":"remove","lines":[")"],"id":21}],[{"start":{"row":26,"column":65},"end":{"row":26,"column":66},"action":"remove","lines":["="],"id":22}],[{"start":{"row":26,"column":64},"end":{"row":26,"column":65},"action":"remove","lines":[")"],"id":23}],[{"start":{"row":26,"column":64},"end":{"row":26,"column":65},"action":"insert","lines":[")"],"id":24}],[{"start":{"row":26,"column":65},"end":{"row":26,"column":66},"action":"insert","lines":[")"],"id":25}],[{"start":{"row":29,"column":9},"end":{"row":29,"column":16},"action":"remove","lines":["Teacher"],"id":26},{"start":{"row":29,"column":9},"end":{"row":29,"column":10},"action":"insert","lines":["F"]}],[{"start":{"row":29,"column":10},"end":{"row":29,"column":11},"action":"insert","lines":["K"],"id":27}],[{"start":{"row":29,"column":10},"end":{"row":29,"column":11},"action":"remove","lines":["K"],"id":28}],[{"start":{"row":29,"column":10},"end":{"row":29,"column":11},"action":"insert","lines":["P"],"id":29}],[{"start":{"row":29,"column":20},"end":{"row":29,"column":29},"action":"remove","lines":["sql_query"],"id":30},{"start":{"row":29,"column":20},"end":{"row":29,"column":25},"action":"insert","lines":["addFP"]}],[{"start":{"row":29,"column":26},"end":{"row":29,"column":102},"action":"remove","lines":["\"SELECT * FROM Teachers where FirstName = '$teacher' AND Pulpit = '$pulpit'\""],"id":31},{"start":{"row":29,"column":26},"end":{"row":29,"column":34},"action":"insert","lines":["$faculty"]}],[{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"insert","lines":[","],"id":32}],[{"start":{"row":29,"column":35},"end":{"row":29,"column":36},"action":"insert","lines":[" "],"id":33}],[{"start":{"row":29,"column":36},"end":{"row":29,"column":43},"action":"insert","lines":["$pulpit"],"id":34}],[{"start":{"row":30,"column":5},"end":{"row":47,"column":7},"action":"remove","lines":["$sql = mysqli_fetch_array($sqlTeacher, MYSQLI_ASSOC);","\t\t\t\t\tif(!$sql){","\t\t\t\t\t\techo \"<p>На данной кафедре нет такого преподавателя</p>\";","\t\t\t\t\t}","\t\t\t\t\telse{","\t\t\t\t\t    $dao2 = new DAO();","\t\t\t\t\t\tif(strcmp($course,1) == 0 || strcmp($course,2) == 0){","\t\t\t\t\t\t\t$dao2->addStudent($firstName, $lastName, $course, \"Haven't teacher\", '', '');","\t\t\t\t\t\t}","\t\t\t\t\t\tif(strcmp($course,3) == 0 || strcmp($course,4) == 0){","\t\t\t\t\t\t\tif(strcmp($status,\"Haven't teacher\") == 0 || strcmp($status,\"Transfer\") == 0)","\t\t\t\t\t\t\t{","\t\t\t\t\t\t\t\t$dao2->addStudent($firstName, $lastName, $course, $status, '', '');","\t\t\t\t\t\t\t}","\t\t\t\t\t\t\telse{","\t\t\t\t\t\t\t\t$dao2->addStudent($firstName, $lastName, $course, $status, $teacher, $pulpit);","\t\t\t\t\t\t\t}","\t\t\t\t\t\t}"],"id":35}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":5},"action":"remove","lines":["\t"],"id":36}],[{"start":{"row":30,"column":3},"end":{"row":30,"column":4},"action":"remove","lines":["\t"],"id":37}],[{"start":{"row":30,"column":2},"end":{"row":30,"column":3},"action":"remove","lines":["\t"],"id":38}],[{"start":{"row":30,"column":1},"end":{"row":30,"column":2},"action":"remove","lines":["\t"],"id":39}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["\t"],"id":40}],[{"start":{"row":29,"column":45},"end":{"row":30,"column":0},"action":"remove","lines":["",""],"id":41}],[{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"remove","lines":["}"],"id":42}],[{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"remove","lines":["\t"],"id":43}],[{"start":{"row":31,"column":3},"end":{"row":31,"column":4},"action":"remove","lines":["\t"],"id":44}],[{"start":{"row":31,"column":2},"end":{"row":31,"column":3},"action":"remove","lines":["\t"],"id":45}],[{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"remove","lines":["\t"],"id":46}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"remove","lines":["\t"],"id":47}],[{"start":{"row":30,"column":68},"end":{"row":31,"column":0},"action":"remove","lines":["",""],"id":48}],[{"start":{"row":30,"column":5},"end":{"row":30,"column":6},"action":"remove","lines":["\t"],"id":49}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":27},"action":"remove","lines":["Студент"],"id":50},{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":["A"]}],[{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":["f"],"id":51}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"insert","lines":["r"],"id":52}],[{"start":{"row":30,"column":23},"end":{"row":30,"column":24},"action":"insert","lines":["e"],"id":53}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"insert","lines":["k"],"id":54}],[{"start":{"row":30,"column":25},"end":{"row":30,"column":26},"action":"insert","lines":["m"],"id":55}],[{"start":{"row":30,"column":26},"end":{"row":30,"column":27},"action":"insert","lines":["n"],"id":56}],[{"start":{"row":30,"column":27},"end":{"row":30,"column":28},"action":"insert","lines":["t"],"id":57}],[{"start":{"row":30,"column":28},"end":{"row":30,"column":29},"action":"insert","lines":["n"],"id":58}],[{"start":{"row":30,"column":28},"end":{"row":30,"column":29},"action":"remove","lines":["n"],"id":59}],[{"start":{"row":30,"column":27},"end":{"row":30,"column":28},"action":"remove","lines":["t"],"id":60}],[{"start":{"row":30,"column":26},"end":{"row":30,"column":27},"action":"remove","lines":["n"],"id":61}],[{"start":{"row":30,"column":25},"end":{"row":30,"column":26},"action":"remove","lines":["m"],"id":62}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"remove","lines":["k"],"id":63}],[{"start":{"row":30,"column":23},"end":{"row":30,"column":24},"action":"remove","lines":["e"],"id":64}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"remove","lines":["r"],"id":65}],[{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"remove","lines":["f"],"id":66}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"remove","lines":["A"],"id":67}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":["Ф"],"id":68}],[{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":["а"],"id":69}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"insert","lines":["к"],"id":70}],[{"start":{"row":30,"column":23},"end":{"row":30,"column":24},"action":"insert","lines":["у"],"id":71}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"insert","lines":["л"],"id":72}],[{"start":{"row":30,"column":25},"end":{"row":30,"column":26},"action":"insert","lines":["ь"],"id":73}],[{"start":{"row":30,"column":26},"end":{"row":30,"column":27},"action":"insert","lines":["т"],"id":74}],[{"start":{"row":30,"column":27},"end":{"row":30,"column":28},"action":"insert","lines":["е"],"id":75}],[{"start":{"row":30,"column":28},"end":{"row":30,"column":29},"action":"insert","lines":["т"],"id":76}],[{"start":{"row":30,"column":31},"end":{"row":30,"column":40},"action":"remove","lines":["firstName"],"id":77},{"start":{"row":30,"column":31},"end":{"row":30,"column":38},"action":"insert","lines":["faculty"]}],[{"start":{"row":30,"column":39},"end":{"row":30,"column":40},"action":"insert","lines":["и"],"id":78}],[{"start":{"row":30,"column":40},"end":{"row":30,"column":41},"action":"insert","lines":[" "],"id":79}],[{"start":{"row":30,"column":41},"end":{"row":30,"column":42},"action":"insert","lines":["к"],"id":80}],[{"start":{"row":30,"column":42},"end":{"row":30,"column":43},"action":"insert","lines":["а"],"id":81}],[{"start":{"row":30,"column":43},"end":{"row":30,"column":44},"action":"insert","lines":["ф"],"id":82}],[{"start":{"row":30,"column":44},"end":{"row":30,"column":45},"action":"insert","lines":["е"],"id":83}],[{"start":{"row":30,"column":45},"end":{"row":30,"column":46},"action":"insert","lines":["д"],"id":84}],[{"start":{"row":30,"column":46},"end":{"row":30,"column":47},"action":"insert","lines":["р"],"id":85}],[{"start":{"row":30,"column":47},"end":{"row":30,"column":48},"action":"insert","lines":["а"],"id":86}],[{"start":{"row":30,"column":48},"end":{"row":30,"column":49},"action":"insert","lines":[" "],"id":87}],[{"start":{"row":30,"column":48},"end":{"row":30,"column":49},"action":"insert","lines":[" "],"id":88}],[{"start":{"row":30,"column":49},"end":{"row":30,"column":56},"action":"insert","lines":["$pulpit"],"id":89}],[{"start":{"row":30,"column":73},"end":{"row":30,"column":74},"action":"insert","lines":["ы"],"id":90}],[{"start":{"row":35,"column":0},"end":{"row":36,"column":4},"action":"remove","lines":["\t\t\t\t","\t\t\t\t"],"id":91}],[{"start":{"row":34,"column":5},"end":{"row":35,"column":0},"action":"remove","lines":["",""],"id":92}]]},"timestamp":1498057836901}