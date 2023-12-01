<?php
//function implementation
//signup page
	function emptyInputSignup($username,$fullname,$email,$password,$psrepeat){
		$result;

		if(empty($username) || empty($fullname) || empty($email) || empty($password) || empty($psrepeat)){
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}

	function invalidUid($username){
	
		$result;

		if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	
	}

	function invalidEmail($email){
		
		$result;
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	
	}
	function pwdMatch($password,$psrepeat){
		
		$result;
		if($password !== $psrepeat){
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;

	}
	//Read
	function uidExists($conn,$username,$email){
		
		
		$stmt = mysqli_stmt_init($conn);//initialize object

		$sql = "SELECT * FROM customer WHERE C_Id = ? OR C_Email = ?;";//access username and password

		if(!mysqli_stmt_prepare($stmt,$sql)){//prepare mysqli query

			header("Location:../signup.php?error=stmtfailed");
			exit();
		}

		mysqli_stmt_bind_param($stmt,"ss",$username,$email);//"ss" for string
		mysqli_stmt_execute($stmt);//execute database

		$resultdata = mysqli_stmt_get_result($stmt);

		if ($row = mysqli_fetch_assoc($resultdata)) {
			return $row;//returns a row
		}   
		else{
			return false;
		}

		mysqli_stmt_close($stmt);
	}
	//create
	function createUser($conn,$username,$fullname,$email,$password){

		$stmt = mysqli_stmt_init($conn);

		$sql = "INSERT INTO customer( C_Username,C_Name,C_Email,C_ps) VALUES (?,?,?,?);";//theese are bound parameters for securirty perpose

		
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location:../signup.php?error=stmtfailed");
			exit();
		}

		$hashedpwd = password_hash($password, PASSWORD_DEFAULT);//equals password to #password
		mysqli_stmt_bind_param($stmt,"ssss",$username,$fullname,$email,$hashedpwd);//bound variable
		mysqli_stmt_execute($stmt);//execute database
		mysqli_stmt_close($stmt);//close stmt
		header("Location:../login.php?error=none");
		exit();
	}


//loginpage
	
	//check for empty form
	function emptyinputsLogin($username,$password){
		$result;

		if(empty($username) || empty($password)){
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}

//login user
	function loginUser($conn,$username,$password){

		$uidExists = uidExists($conn,$username,$email);

		if ($uidExists === false ){

			header("location:../signup.php?error=wronglogin2");
			exit();
		}

		$pwdHashed = $uidExists["C_ps"];//take the hashed password
		$checkpwd = password_verify($password,$pwdHashed);

		if( $checkpwd === false ){ 
			header("location:../signup.php?error=wronglogin1");
			exit();
		}
		else if($checkpwd === true){
			session_start();
			$_SESSION["userid"] = $uidExists["C_Id"];
			$_SESSION["useruid"] = $uidExists["C_Username"];
			header("location:../index.php");
			exit();
		}
	}

//password update page

	function matchpsuser($conn,$username,$previuospwd,$newpwd,$psrepeat){

		$stmt = mysqli_stmt_init($conn);

		if($newpwd === $psrepeat){
			

			$sql = "UPDATE customer SET C_ps = ? WHERE C_Username = ?;";

			if(!mysqli_stmt_prepare($stmt,$sql)){
			
				header("location:../fmypw.php?error=stmtfailed");
				exit();
			}

			$hashedpwd = password_hash($newpwd, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt,"ss",$hashedpwd,$username);

			$result = mysqli_stmt_execute($stmt);

			if($result == TRUE){

				header("location:../signup.php?error=none1");
				exit();
			}
			else{

				header("location:../fmypw.php?error=updatefailed");
				exit();
			}

		}
		else{
			
				header("location:../fmypw.php?error=passworddoesntmatch");
				exit();
			
		}
		
		mysqli_stmt_close($stmt);	
	}	

//delete account page 

function deleteaccount($conn,$username,$password){

	$stmt = mysqli_stmt_init($conn);

	$sql = "DELETE FROM customer WHERE C_Username = ?;";

	if(!mysqli_stmt_prepare($stmt,$sql)){
			
		header("location:../deleteaccount.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$username);

	$result = mysqli_stmt_execute($stmt);

			if($result == TRUE){

				header("location:../signup.php?error=none1");
				exit();
			}
			else{

				header("location:../deleteaccount.php?error=deletefailed");
				exit();
			}

	mysqli_stmt_close($stmt);	

}