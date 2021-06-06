<?php
	
	session_start();

	session_unset();

	session_destroy();

	setcookie('usernamecookie','',time()-86400);
	setcookie('emailcookie','',time()-86400);
	setcookie('passwordcookie','',time()-86400);


	header("Location: http://localhost/ESST/login.php");
?>
