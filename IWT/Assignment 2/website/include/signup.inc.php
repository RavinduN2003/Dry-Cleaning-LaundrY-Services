<?php

if(isset($_POST["submit"]))
{
	$username = $_POST["username"];//get username from the login form
	$fullname = $_POST["fullname"];//get fulllname from the login form
	$email = $_POST["email"];
	$password = $_POST["password"];
	$psrepeat = $_POST["pwdrepeat"];

	require_once 'dbh.inc.php';//connect the database
	require_once 'functions.inc.php';//connect functions file

	$emptyinput = emptyInputSignup($username,$fullname,$email,$password,$psrepeat);//cheks for blanks
	$invaliduid = invalidUid($username);//username error
	$invalidemail = invalidEmail($email);//email error
	$pwdmatch = pwdMatch($password,$psrepeat);//password match
	$uidExists = uidExists($conn,$username,$email);//existing email


	//check whether user inputs blank data
	if( $emptyinput !== FALSE ){
		header("location:../signup.php?error=emptyinput");
		echo '<script> alert("Fill All Blanks!"); </script>';
		exit();
	}

	//check whether username is valid
	if( $invaliduid !== FALSE ){
		header("location:../signup.php?error=invaliduid");
		echo '<script> alert("Inavlid Username!"); </script>';
		exit();
	}

	//check whether email is valid
	if( $invalidemail !== FALSE ){
		header("location:../signup.php?error=invalidEmail");
		echo '<script> alert("InvalidEmail"); </script>';
		exit();
	}

	//check whether match password
	if( $pwdmatch !== FALSE ){
		header("location:../signup.php?error=Paaworddontmatch");
		echo '<script> alert("Password Do not Match!"); </script>';
		exit();
	}


	//check whether username is exists
	if( $uidExists !== FALSE ){
		header("location:../signup.php?error=Usernametaken");
		echo '<script> alert("Username Already Exists!"); </script>';
		exit();
	}

	//create user
	createUser($conn,$username,$fullname,$email,$password);

}
else{

	header('location:../signup.php'); //when user type the URL, go back to the signup page
	exit();

}


