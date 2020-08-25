<?php
	$filedir = 'upload/'.$_FILES['photo']['name'];
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $filedir))
	{
		echo "Success";
	}else{
		echo "error";
	}
?>