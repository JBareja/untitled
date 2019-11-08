<?php

	session_start();
	
	if ((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		$_SESSION['blad']="Cos jest nie tak";
		exit();
	}


	
	
	
	
?>