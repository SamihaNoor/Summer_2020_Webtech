<!DOCTYPE html>
<html>
<head>
	<title>Author List</title>
	<script type="text/javascript" src="viewauthors.js"></script>
</head>
<body>
	<table>
		<tr><td>
				<a href="dashboard.php"> Dashboard </a></li> |
				<a href="registration.php"> Create Authors </a> |
				<a href="viewauthors.php"> View Authors </a> 
			</td>
		</tr>
	</table>
	
	Search <input type="text" id="search" name="search" onkeyup="searchAuthor()">
	<p>Authors</p>
	
	<table>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Contact</td>
			<td>UserName</td>
			<td>Type</td>
			<td>Operation</td>
		</tr>

		<?php 
			$type=2;
			$con = mysqli_connect('localhost','root','','online_blog');
			$sql = "select * from users where type=".$type."";
			$res = mysqli_query($con, $sql);
			while($data = mysqli_fetch_assoc($res)){
		?>
			<tr>
			<td><?=$data['id']?></td>
			<td><?=$data['name']?></td>
			<td><?=$data['contact_number']?></td>
			<td><?=$data['username']?></td>
			<td><?=$data['type']?></td>
			
			</tr>

		<?php } ?>
		
	</table>
</body>
</html>