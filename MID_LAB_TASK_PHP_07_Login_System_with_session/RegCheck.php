<?php
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['Name'];
    $Email=$_POST['email'];
    $UserName=$_POST['UserName'];
    $Password=$_POST['password'];
    $ConfirmPassword=$_POST['ConfirmPassword'];
    $BirthDate=$_POST['Day'];
    $BirthMonth=$_POST['Month'];
    $BirthYear=$_POST['Year'];
    $gender=$_POST['gender'];
    
    if(empty($name)||empty($Email) || empty($UserName) || empty($Password) || empty($ConfirmPassword) ||empty($BirthDate) || empty($BirthMonth) || empty($BirthYear)||empty($gender))
    {
        echo "Null Value found \n";
    }
    
    elseif(!empty($ConfirmPassword) |!empty($Password)) 
    {
        if($Password==$ConfirmPassword)
        {
            $_SESSION['name']=$name;
            $_SESSION['email']=$Email;
            $_SESSION['UserName']=$UserName;
            $_SESSION['Password']=$Password;
            $_SESSION['Birthdate']=$BirthDate;
            $_SESSION['BirthMonth']=$BirthMonth;
            $_SESSION['BirthYear']=$BirthYear;
            $_SESSION['gender']=$gender;
            
            header('location: login.php');
        }
        else{
            echo"Password mismatch";
        }
    }
    
    
}
?>