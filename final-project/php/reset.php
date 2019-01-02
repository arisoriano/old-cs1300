<?php
	session_start();
	unset($_SESSION['age']);
	header("Location: index.php");
?>