<?php

if(isset($_POST["submit"]))
{
	$username = $_POST["username"];//get username from the login form
	$password = $_POST["password"];//get password from the login form


	require_once 'dbh.inc.php';//connect the database
	require_once 'functions.inc.php';//connect functions file

	//check whether user inputs blank data

	if(emptyinputsLogin($username,$password) !== FALSE){//when password and username is not equal false
		exit();
	}

	loginUser($conn,$username,$password);

}
else{

	header('Location:../login.php'); //when user type the URL, go back to the login page
	exit();
}


