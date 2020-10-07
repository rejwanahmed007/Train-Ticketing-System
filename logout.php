<?php

	
	setcookie("user", $email, time()-3, "/");
	header('location: index.php');
?>