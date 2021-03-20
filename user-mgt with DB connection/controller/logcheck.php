<?php
	session_start();
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($_POST['username'] == "" || $_POST['password'] == ""){
			echo "null submission...";
		}
		else{
			$connection = mysqli_connect('localhost','root', '', 'userDB');

			$sql="select password from users where username='$username'";
			$resultreturn=mysqli_query($connection, $sql);
			$row=mysqli_fetch_assoc($resultreturn);
			print_r($row);
			
			if($password == $row['password'])
			{
				$_SESSION['flag'] = true;
				$_SESSION['username']=$username;
				header('location: ../view/home.php');
			}
			else{
				echo"invaild user";
			}
		}
	}

	
?>