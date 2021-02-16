<?php

if(isset($_POST['submit'])){

    $DOB 		=  $_POST['DOB'];

    if($DOB == ""){
        echo "Null submission...";
    }else{
        echo $DOB;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>DOB Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="DOB" value=""> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>