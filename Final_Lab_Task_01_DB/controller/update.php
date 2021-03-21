<?php 
    $connection = mysqli_connect('localhost','root', '', 'userDB');
    session_start();
    if(isset($_POST['submit'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $id=$_SESSION['id'];

        $sql="update users set name='$name', password='$pass', email='$email' where ID='$id'";
        mysqli_query($connection, $sql);
        header('location: ../view/home.php');

    }

?>