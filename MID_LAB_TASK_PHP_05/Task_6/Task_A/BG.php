<?php
	if(isset($_POST['submit'])){

		$BloodGroup	=  $_POST['BloodGroup'];

		if($BloodGroup == ""){
			echo "Null submission...";
		}
        else if($BloodGroup == "A+"){
			echo "Success";
		}
        else if($BloodGroup == "A-"){
			echo "Success";
		}
        else if($BloodGroup == "B+"){
			echo "Success";
		}
        else if($BloodGroup == "B-"){
			echo "Success";
		}

        else if($BloodGroup == "AB+"){
			echo "Success";
		}
        else if($BloodGroup == "AB-"){
			echo "Success";
		}
        else if($BloodGroup == "O+"){
			echo "Success";
		}
        else if($BloodGroup == "O-"){
			echo "Success";
		}

	}
    else{
		echo 'invalid request...';
	}


?>