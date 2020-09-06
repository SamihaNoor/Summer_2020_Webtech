<?php
	$name = $_POST['name'];
	$con = mysqli_connect('localhost', 'root', '', 'online_blog');
	$sql= "select * from users where username like '%{$name}%'";
	$result = mysqli_query($con, $sql);


	while ($data = mysqli_fetch_assoc($result))
	{
		
	}
?>