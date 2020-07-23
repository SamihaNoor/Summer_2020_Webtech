<?php

	if(isset($_POST['submit'])){
		
		//name 
		$n = $_POST['name'];
		if($n == ""){ echo "Invalid request"; }
		else if(str_word_count($n)<2){ echo "Invalid name";}
		else{ echo $n; }
		echo "<br>";
		
		//email
		$e = $_POST['email'];
		if($e == ""){ echo "Invalid";}
		else { echo $e; }
		echo "<br>";
		
		//gender
		$g = $_POST['gender'];
		if($g == ""){ echo "Invalid";}
		else{echo $g;}
		echo "<br>";
		
		//date
		$d=$_POST['dd'];
		$m=$_POST['mm'];
		$y=$_POST['yyyy'];
		if($d == "" || $m == "" || $y == ""){ echo "Invalid";}
		else{echo "$d/$m/$y";}
		echo "<br>";
		
		//degree
		$deg = $_POST['degree'];
		if(empty($deg)){echo "select degree";}
		else{ print_r($deg);}
		echo "<br>";
		
		//blood group
		$bg = $_POST['bg'];
		if($bg == ""){echo "select blood";}
		else{ echo $bg;}
		echo "<br>";
	}
	
?>