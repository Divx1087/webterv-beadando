<?php

	session_start();
	
	if((!isset($_SESSION["user"])) || empty($_SESSION["user"])){
		header("Location: login.php");
	}
	
	$_SESSION = [];
	
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(), session_id(), time()-60, '/');
	}
	
	session_destroy();
	
	header("Location: index.php");

?>