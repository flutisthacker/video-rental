<?php
session_start();

	$first = $_POST['first_name'];
	$last = $_POST['last_name'];
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	$num = $_POST['num'];

require_once("check_register_function.php");//included to check login

	//processing code
	$user_ok = regist($first,$last,$mail,$pass, $num); //called from check_login_function.php

	if($user_ok){
		header("Location: ../login/login.php"); /* Redirect browser */

	}
	else {
		header("Location: register.php");

	}


?>