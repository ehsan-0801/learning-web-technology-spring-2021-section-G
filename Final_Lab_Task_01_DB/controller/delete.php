<?php 
    $connection = mysqli_connect('localhost','root', '', 'userDB');
    $id=$_GET['id'];

    $sql="delete from user where ID='$id'";
	mysqli_query($connection, $sql);

    header('location: ../view/user_list.php');
?>