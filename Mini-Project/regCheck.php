<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$id = $_POST['id'];
		$type = $_POST['type'];

		if(empty($name) || empty($password) || empty($email) || empty($id) || empty($confirmpassword) || empty($type)){
			echo "null submission";
		}else {
			/*$_SESSION['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;*/


			$file = fopen("user.txt", "w");
			fwrite($file, $id.'|'.$name.'|'.$password.'|'.$email.'|'.$type."/n");
			fclose($file);

			header('location: login.html');
		}
	}else{
		header("location: login.html");
	}
?>