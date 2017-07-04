
<html>
<body>
<?php
    session_start();
    unset($_SESSION['Id']);
	unset($_SESSION['Name']);
	session_unset();
// 	session_destroy();
    header("Location: main.php");
?>
</body>
</html>
