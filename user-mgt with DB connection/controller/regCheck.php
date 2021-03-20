<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $repass =="" || $email == ""){
			echo "null value found...";
		}else{
			if($password == $repass)
			{
				$connection = mysqli_connect('localhost','root', '', 'userDB');
				$sql = "insert into users values('$username', '$password','$email')";
				$result=mysqli_query($connection,$sql);
				header('location: ../view/login.html');
			}
			else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>