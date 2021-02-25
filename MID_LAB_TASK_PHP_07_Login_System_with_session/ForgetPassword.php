<?php 
    session_start();

    if (isset($_POST['submit'])) {
        if(empty($_POST['email'])){
            echo "email field cnnot be empty";
        }
        else if($_SESSION['email']==$_POST['email']){
            echo"an email has been sent to your email";
        }
        else{
            echo"email not found";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <table border=".05px" style="border-color: black;border-style: solid;">
        <tr>
            <td><img src="Images/ImageCompany.png" alt="Company Logo"></td>
            <td align="Right" width="100%">
                <a href="Home.php"><b>Home|</b></a>
                <a href="Login.php"><b>Login|</b></a>
                <a href="Registration.php"><b>Registration|</b></a>
                
            </td>

        </tr>
        <tr>
            <td colspan="2" height="400px">
                <form action="" method="post" >
                    <fieldset>
                        <legend>Forgot Password</legend>
                        <table>
                            <tr>
                                <td>Enter Email:</td>
                                <td><input type="email" name="email"value=""><hr>
                                </td>
                                
                            </tr>
                            
                            <tr>
                                 
                                <td>
                                    <input type="submit" name="submit" value="submit">
                                </td>
                                
                            </tr>
                        </table>
                    </fieldset>
                </form>

            </td>
        </tr>
        <tr>
            <td colspan="2" width="100%" height="100px" align="center">
                <h3>Copyright©2021</h3>

            </td>
        </tr>
    </table>
</body>
</html>