<?php
	session_start();

	if(isset($_POST['submit']))
	{
		$userName = $_POST['name'];
		$password = $_POST['password'];

		$con = mysqli_connect('localhost','root','','online_blog');
		$sql= "select * from users where username='".$userName."' and password='".$password."'";
		$data= mysqli_query($con,$sql);
		$admin = mysqli_fetch_assoc($data);
		
		if(count($admin)>0)
		{
				$user = [
				'username'=>$ad['username'],
				'password'=>$_ad['password'],
			];

			$_SESSION['user']=$user;
				
			$_SESSION['status']  = "Ok";
			if(isset($_POST['rememberme']))
			{
				setcookie('id', $userName, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');
				setcookie('status', "OK", time()+3600, '/');
			}
			header('location: dashboard.php');
		}
		else
		{
			header("location: login.php");
		}
	}
	else
	{
		header("location: login.php");
	}
?>
