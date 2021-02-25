<?php 
    session_start();

    if(isset($_POST['submit'])){
        if(!empty($_POST['ProfilePicture'])){
            echo "changed successfully";
        }
        else{
            echo "no file was selected";
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
                <form action="" method="post">
                    <fieldset>
                        <legend>Profile Picture</legend>
                        <table >
                            <tr>
                                <td>
                                    <img src="Images/images.png" width="300px" height="300px"><br>
                                    <input type="file" name="ProfilePicture" id="ProfilePicture"><hr>
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