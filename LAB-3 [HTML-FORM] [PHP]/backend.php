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
	}
	
?>