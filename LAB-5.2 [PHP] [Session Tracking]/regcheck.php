<?php
	session_start();

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$uname = $_POST['username'];
		$password = $_POST['password'];
		$conPass = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		if(empty($name) || empty($password) || empty($email) || empty($uname) || empty($conPass) || empty($gender) || empty($day) || empty($month) || empty($year))
		{
			echo "null submission";
		}
		else
		{
			$user = [
						'name'=>$name,
						'email'=>$email,
						'username'=>$uname,
						'password'=>$password,
						'confirmPassword'=>$conPass,
						'gender'=>$gender,
						'day'=>$day,
						'month'=>$month,
						'year'=>$year,
					];

				$_SESSION['name']=$name;
				$_SESSION['email']=$email;
				$_SESSION['username']=$uname;
				$_SESSION['password']=$password;
				$_SESSION['confirmPassword']=$conPass;
				$_SESSION['gender']=$gender;
				$_SESSION['day']=$day;
				$_SESSION['month']=$month;
				$_SESSION['year']=$year;
				$_SESSION['user']=$user;
				
				$_COOKIE['username'] = $uname;
				$_COOKIE['password']=$password;
				
				setcookie('username', $uname, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');
				
			header('location: login.html');
		}
	}
	else
	{
		header("location: registration.html");
	}
?>