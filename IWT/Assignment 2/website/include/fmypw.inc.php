<?php

if(isset($_POST["submit"])){

	$username = $_POST["username"];//get username from the login form
	$previuospwd = $_POST["password"];//get fulllname from the login form
	$newpwd = $_POST["newpwd"];
	$psrepeat = $_POST["pwdrepeat"];


	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	
	matchpsuser($conn,$username,$previuospwd,$newpwd,$psrepeat);

}
else{

	header('Location:../fmypw.php'); //when user type the URL, go back to the signup page
	exit();

}	


