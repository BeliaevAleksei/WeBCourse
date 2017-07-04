<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
    session_start();
    session_unset();
    if ((!empty($_POST['login'])) && (!empty($_POST['password'])))
    {
        include ('dao.php');
        $login = $_POST['login'];
        $password = $_POST['password'];
        $dao = new DAO();
        $queryResult = $dao->sql_query("select * from Autorization where Teacher='".$login."'");
        $sqllogin = mysqli_fetch_array($queryResult, MYSQLI_ASSOC);
        var_dump($sqllogin);
        
        if (($login==$sqllogin['Teacher']) && ($password==$sqllogin['Password'])){
            var_dump($sqllogin);
            $_SESSION['Id'] = $sqllogin['Id'];
            $_SESSION['Name']=$sqllogin['Teacher'];
            // $_SESSION['isAdmin']=$sqllogin['IsAdmin'];
			
            header("Location: main.php");
            echo "<script>alert(\"Вы вошли на сайт как ".$_SESSION['Name']."\");</script>";
        }
    }
    else
    {
        $_SESSION['check'] = '1';
        header("Location: authorization.php");
    }
    
?>
</html>
