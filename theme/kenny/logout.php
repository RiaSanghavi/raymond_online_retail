<?php
		session_start();
		session_regenerate_id(true);
		unset($_SESSION['id']);
		unset($_SESSION['username']);
		session_destroy();
		header("location:login.php");

?>