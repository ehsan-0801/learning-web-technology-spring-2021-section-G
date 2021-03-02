<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				//$_SESSION['current_user'] = $user;
		
				//header('location: ../model/write.php');

				if(filesize('../model/user.json')==0){
					$jsonObject=json_encode($user);
					$FileWrite=fopen('../model/user.json', 'w');
					fwrite($FileWrite, '['.$json.']');
				}
				else{
					$DataInput = file_get_contents('../model/user.json');
					$ArrayTempData = json_decode($DataInput);
					array_push($ArrayTempData, $user);
					$jsonData = json_encode($ArrayTempData);
					file_put_contents('../model/user.json', $jsonData);
				}
				header('location: ../view/login.html');
			}
			else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>