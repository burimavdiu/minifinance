<?php
include "db.php";
session_start();

if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$username=mysqli_real_escape_string($dbconn,$username);
	$password=mysqli_real_escape_string($dbconn,$password);
	
	$query_login="SELECT * FROM users WHERE username='$username'";
	
	$resul_login=mysqli_query($dbconn,$query_login);
	
	if(mysqli_num_rows($resul_login)==1){
		$user=mysqli_fetch_assoc($resul_login);
		$db_userid=$user['userid'];
		$db_username=$user['username'];
		$db_password=$user['password'];
		$db_firstname=$user['firstname'];
		$db_lastname=$user['lastname'];
		$db_role=$user['role'];
	}
	if($username!==$db_username && $password!==$db_password){
		header("Location: ../index.php");
	}
	else if($username===$db_username && $password===$db_password){
		
		$_SESSION['userid']=$db_userid;
		$_SESSION['username']=$db_username;
		$_SESSION['firstname']=$db_firstname;
		$_SESSION['lastname']=$db_lastname;
		$_SESSION['role']=$db_role;
		
		header("Location: ../admin");
	}
	else{
		header("Location: ../index.php");
	}
	
}

?>

