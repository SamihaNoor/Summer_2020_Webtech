<html>
<head>
	<title>Create</title>
</head>
	<body>
		<p style="text-align:right">
			<a href="logout.php"> Logout</a>
		</p>
		<table>
			<tr><td>
					<a href="Home.php"> Home </a></li> |
					<a href="createstory.php"> Create Story </a>
				</td>
			</tr>
		</table>
		<form action="story.php" onsubmit="return story()" method="post">
			<table>
				<tr>
					<td>Date & Time</td>
					<td><input type="date" name="datetime"></td>
				<tr>
				<tr>
					<td>Story</td>
					<td><input type="text" name="story"></td>
				<tr>
			</table>
		</form>
	</body>
</html>