<!DOCTYPE html>
<html>

<head>
    <title>DOB Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="date" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?>"> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>