<?php
if(isset($_POST['submit']))
{
    $name=$_POST['Name'];
    $email=$_POST['email'];
    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];
    $C_Password=$_POST['ConfirmPassword'];
    $BirthDate=$_POST['Day'];
    $BirthMonth=$_POST['Month'];
    $BirthYear=$_POST['Year'];
    
    foreach (range('a', 'z') as $letterC) 
    {
        $CapitalLetter=$letterC;
    }
    foreach (range('Z', 'Z') as $letterS) 
    {
        $SmallLetter=$letterS;
    }
    foreach (range('0', '9') as $Number) 
    {
        $NumberRange=$Number;
    }
    
    if(empty($name)){
        echo"name field cannot be empty\n";
    }
    if(empty($email))
    {
        echo"email field cannot be empty\n";
    }
    if(empty($UserName))
    {
        echo"user name field cannot be empty\n";
    } 
    if(empty($Password))
    {
        echo"password field cannot be empty\n";
    }
    elseif (!empty($Password)) {
        if ( strpos($Password, $CapitalLetter) || strpos($Password, $SmallLetter) || strpos($Password, $NumberRange) ){
            
        }
        else {
            echo "Password must contain at least 1 Capital letter , 1 small letter or 1 Number\n";
        }
        if (empty($C_Password)) {
            echo "please fillup confirm password field\n";
        }
        elseif (!empty($C_Password)) {
            if($Password!=$C_Password){
                echo "Password and Confirm pass doesn't match\n";
            }
        }
    }
    if (empty($_POST['Male']) && empty($_POST['Female']) && empty($_POST['Other'])) {
        echo"please select your gender\n";
    }
    if (empty($BirthDate && $BirthMonth && $BirthYear)) {
        echo"please select a date, month and year\n";
    }
    if (!empty($BirthDate && $BirthMonth && $BirthYear)) 
    {
        if($BirthDate>31 || $BirthMonth>12)
        {
            echo 'Wrong Birthdate or Birth month' ;
        }
    }
    if (!empty($name))
    {
        if (strlen($name)>20) {
            echo"name must contain less than 20 characters\n";
        }
    }
    if (!empty($UserName)) {
        if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $UserName) && strlen($UserName)>=4 ) {
           
            echo"form submitted successfully\n";
        }
        else 
        {
            echo"must contain alpha numeric and '_' and contain atleat 4 character\n";
        }
    }
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>REGISTRATION</legend>
            <pre>Name             :<input type="Text" name="Name" value=""></pre><br><hr>
            <pre>Email            :<input type="email" name="email" value=""></pre><br><hr>
            <pre>User Name        :<input type="Text" name="UserName" value=""></pre><br><hr>
            <pre>Password         :<input type="password" name="Password" value=""></pre><br><hr>
            <pre>Confirm password :<input type="password" name="ConfirmPassword" value=""></pre><br><hr>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="Male" id="">Male
                <input type="radio" name="Female" id="">Female
                <input type="radio" name="Other" id="">Other
            </fieldset>
            <hr>
            <fieldset>
                <legend>Date OF Birth</legend>
                <input type="tel" name="Day" size="1"><b>/</b>
                <input type="tel" name="Month" size="1"><b>/</b>
                <input type="tel" name="Year" size="1"><i>(dd/mm/yyyy)</i> 
            </fieldset>
            <hr>
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="reset">
            
        </fieldset>
    </form>
</body>
</html>