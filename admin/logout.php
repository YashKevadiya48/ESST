<?php
	
	session_start();

	session_unset();

	session_destroy();

	setcookie('usernamecookie','',time()-86400);
	setcookie('emailcookie','',time()-86400);
	setcookie('passwordcookie','',time()-86400);

    session_start();
    $_SESSION['msg'] = "You are Log Out.";

	header("Location: http://localhost/ESST/admin/login.php");
?>
