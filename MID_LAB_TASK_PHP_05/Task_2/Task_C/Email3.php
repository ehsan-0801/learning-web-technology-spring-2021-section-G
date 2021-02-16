<!DOCTYPE html>
<html>

<head>
    <title>Email Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>"> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>