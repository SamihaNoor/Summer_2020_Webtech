<?php
	$host="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="projectmid";
	
	function dbConnection()
	{
		global $host,$dbuser,$dbpass,$dbname;
		return $con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
	}
?>