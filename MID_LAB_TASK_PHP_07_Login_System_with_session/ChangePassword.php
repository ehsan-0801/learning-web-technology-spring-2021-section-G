<?php 
    session_start();

    if(isset($_POST['submit'])){
        if(empty($_POST['CurrentPass']) || empty($_POST['NewPass']) || empty($_POST['NewConPass'])) {
            echo "field cannot be empty";
        }
        else{
            if ($_SESSION['Password']!= $_POST['CurrentPass']) {
                echo"please enter your valid password";
            }
            else if($_POST['CurrentPass']==$_POST['NewPass']) {
                echo "new password cannot be same as old password <br>";
                echo "try a new one ! <br>";
            }
            else if($_POST['NewPass']!=$_POST['NewConPass']) {
                echo"password and confirm password doesn't match <br>";
            }
            else{
                echo"password changed successfully <br>";
                $_SESSION['Password']=$_POST['NewPass'];
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
    <title>Change Profile Picture</title>
</head>
<body>
    <table border=".05px" style="border-color: black;border-style: solid;">
        <tr>
            <td><img src="Images/ImageCompany.png" alt="Company Logo"></td>
            <td align="right"width="100%">Logged in as <a href="ViewProfile.php"><?php echo $_SESSION['name']?></a> | <a href="logout.php">Logout</a></td>
                
            </td>

        </tr>
        <tr>
            <td>
                <h3>Account</h3>
                <hr>
                <ul>
                    <li><a href="WelcomePage.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="EditProfile.php">Edit Profile</a></li>
                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="ChangePassword.php">Change Password</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                    
                </ul>
            </td>
            <td colspan="2" height="400px">
                <form action=""method="post">
                    <fieldset>
                        <legend>Change Password</legend>
                        <table >
                            <tr>
                                <td>Current Password:<input type="password" name="CurrentPass" value=""></td>
                            </tr>
                            <tr>
                                <td style="color: green;">New Password:<input type="password" name="NewPass" value=""></td>
                            </tr>
                            <tr>
                                <td style="color:red;">Confirm Password:<input type="password" name="NewConPass" value=""><hr></td>
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