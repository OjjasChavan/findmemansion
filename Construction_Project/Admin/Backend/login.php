<?php 
session_start();
include "conn.php";

if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql = "SELECT * from `alogin` WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1){
		
			$user_data = mysqli_fetch_array($result);
			$userid = ($user_data['id']);

			$_SESSION["login_id"] = $userid ;
			
			header("Location: ../dashboard.php");
		}

		else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Invalid Username or Password')
		    window.location.href='javascript:history.go(-1)';
		    </SCRIPT>");
		}

	}



 ?>