<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/create.php">Create New User</a> |
	<a href="../views/all_users.php">User List</a> |
	<a href="../php/logout.php">Logout</a> <br>
	<a href="../views/addCompany.php?">Add New Company</a> |
	<a href="../views/all_companies.php">Company List</a>
</body>
</html>