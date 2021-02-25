<?php
session_start();
if(isset($_POST['submit']))
{
    $username =$_POST['username'];
    $password =$_POST['password'];
    if(empty($username)|| empty($password))
    {
        echo "Null Input";
    }
    else
    {
        if($_SESSION['UserName']==$username && $_SESSION['Password']==$password)
        {
            $_SESSION['flag']=true;
            header('location: WelcomePage.php');
        }
        else{
            echo 'Invalid username or password';
        }
    }
    
}
?>