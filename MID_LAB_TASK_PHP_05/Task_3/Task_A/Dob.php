<?php
	if(isset($_POST['submit'])){

		$DOB	=  $_POST['Dob'];

		if($DOB == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>