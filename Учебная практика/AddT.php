<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
    session_start();
    session_unset();
    if ((!empty($_POST['List'])) && (!empty($_POST['password'])))
    {
        include ('dao.php');
        $login = $_POST['List'];
        $password = $_POST['password'];
        $dao = new DAO();
        $dao->addTeacher($login, $password);
        $_SESSION['nameAdd'] = $login;
        header("Location: authorization.php");
    }
        else
    {
        $_SESSION['check'] = '1';
        header("Location: authorization.php");
    }
?>
</html>
