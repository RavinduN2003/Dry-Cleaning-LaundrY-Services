<?php

	if(isset($_POST["submit"])){

		$username = $_POST["username"];
		$password = $_POST["password"];


		require_once 'dbh.inc.php';
		require_once 'functions.inc.php';


		deleteaccount($conn,$username,$password);
	}
	else{

		header('Location:../deleteaccount.php'); //when user type the URL, go back to the signup page
		exit();

	}	

	