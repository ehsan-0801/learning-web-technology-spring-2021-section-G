<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$DataInput = file_get_contents('../model/user.json');
		$DataArray = json_decode($DataInput, true);

		if($_POST['username'] == "" || $_POST['password'] == ""){
			echo "null submission...";
		}
		else{
			$flow=0;
			foreach ($DataArray as $key1 => $value1) {
				if ($DataArray[$key1]["username"]==$_POST['username'] and $DataArray[$key1]["password"]==$_POST['password']) {
					$flow=1;
				}
			
			}
			if($flow==1){
				$_SESSION['flag'] = true;
				$name=$_POST['username'];
				$_SESSION['username']=$name;
				header('location: ../view/home.php');
			}
			else{
				echo"invaild user";
			}
		}
	}

	
?>