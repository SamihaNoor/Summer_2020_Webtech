<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Company list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Description</td>
			<td>Industry</td>
			<td>Website</td>
			<td>Logo</td>
			<td>Added By</td>
			<td>Action</td>
		</tr>

		<?php  
			$companies = getAllCompanies();
			for ($i=0; $i != count($companies); $i++) 
			{  ?>
			<tr>
				<td><?=$companies[$i]['id']?></td>
				<td><?=$companies[$i]['company_name']?></td>
				<td><?=$companies[$i]['profile_description']?></td>
				<td><?=$companies[$i]['industry']?></td>
				<td><?=$companies[$i]['company_website']?></td>
				<td><img src="<?=$companies[$i]['company_logo']?>" width="100" height="100"></td>
				<td><?=$companies[$i]['user_account_id']?></td>
				<td>
					<a href="editCompany.php?id=<?=$companies[$i]['id']?>">Edit</a> |
					<a href="deleteCompany.php?id=<?=$companies[$i]['id']?>">Delete</a> 
				</td>
			</tr>

		<?php } ?>
		
	</table>
</body>
</html>