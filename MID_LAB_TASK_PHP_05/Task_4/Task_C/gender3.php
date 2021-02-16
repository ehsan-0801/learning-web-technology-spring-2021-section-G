<!DOCTYPE html>
<html>

<head>
    <title>GENDER Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?>">
            Male
            <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?>">
            Female
            <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?>">
            Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>