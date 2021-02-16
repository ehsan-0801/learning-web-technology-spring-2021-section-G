<?php
	if(isset($_POST['submit'])){

		$Degree	=  $_POST['Degree'];

		if($Degree == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>