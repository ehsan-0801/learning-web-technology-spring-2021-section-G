<?php

if(isset($_POST['submit'])){

    $BG		=  $_POST['BloodGroup'];

    if($BG == ""){
        echo "Null submission...";
    }else{
        echo $BG;
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
            <legend>BloodGroup :</legend>
            <select name="BloodGroup">
                <option value=""></option>
                <option value="">A+</option>
                <option value="">A-</option>
                <option value="">B+</option>
                <option value="">B-</option>
                <option value="">AB+</option>
                <option value="">AB-</option>
                <option value="">O+</option>
                <option value="">O-p</option>

            </select><br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>