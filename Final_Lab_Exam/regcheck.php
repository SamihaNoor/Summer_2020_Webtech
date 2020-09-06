<?php
		
	session_start();
		
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$contact = $_POST['contact_number'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = 2;
		$con = mysqli_connect('localhost','root','','online_blog');
			$sql = "INSERT INTO users (name, contact_number, username, password, type) VALUES ('".$name."',".$contact.",'".$username."','".$password."',".$type.")";
			$res = mysqli_query($con, $sql);
			if($res)
			{
				mysqli_close($con);
				header("location: dashboard.php");
			}
			else
			{
				echo "error";
			}
	}
	else
	{
		header("location: login.php");
	}
?>