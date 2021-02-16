<!DOCTYPE html>
<html>

<head>
    <title>Degree Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>GENDER</legend>
            <input type="checkbox" name="Degree" value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">
            SSC
            <input type="checkbox" name="Degree" value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">
            HSC
            <input type="checkbox" name="Degree" value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">
            BSc
            <input type="checkbox" name="Degree" value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">
            MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>