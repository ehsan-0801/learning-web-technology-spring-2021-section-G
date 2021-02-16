<?php

if(isset($_POST['submit'])){

    $Degree		=  $_POST['Degree'];

    if($Degree == ""){
        echo "Null submission...";
    }else{
        echo $Degree;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Degree Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>Degree :</legend>
            <input type="checkbox" name="degree"> SSC
            <input type="checkbox" name="degree"> HSC
            <input type="checkbox" name="degree"> BSc
            <input type="checkbox" name="degree"> MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>