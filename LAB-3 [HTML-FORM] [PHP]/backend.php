<?php

	if(isset($_POST['submit'])){
		
		//name 
		$n = $_POST['name'];
		if($n == ""){ echo "Invalid request"; }
		else if(str_word_count($n)<2){ echo "Invalid name";}
		else{ echo $n; }
		echo "<br>";
	}
?>