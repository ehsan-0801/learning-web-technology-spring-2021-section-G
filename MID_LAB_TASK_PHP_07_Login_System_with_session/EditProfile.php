<?php 
    session_start();

    if (isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['gender']) ||
            empty($_POST['Day']) ||  empty($_POST['Month']) ||  empty($_POST['Year'])){
            
                echo"field cannot be empty";
        }
        else{
            header('location: ViewProfile.php');
            $_SESSION['name']=$_POST['name'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['gender']=$_POST['gender'];
            $_SESSION['Birthdate']=$_POST['Day'];
            $_SESSION['BirthMonth']=$_POST['Month'];
            $_SESSION['BirthYear']=$_POST['Year'];

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <table border=".05px" style="border-color: black;border-style: solid;">
        <tr>
            <td><img src="Images/ImageCompany.png" alt="Company Logo"></td>
            <td align="right" width="100%">Logged in as <a href="ViewProfile.php"><?php echo $_SESSION['name']; ?></a> | <a href="logout.php">Logout</a></td>
                
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
                        <legend>EDIT PROFILE</legend>
                        <table >
                            <tr>
                                <td>Name:<input type="text" name="name" value=""><hr></td>
                            </tr>
                            <tr>
                                <td>Email:<input type="email" name="email" value=""><hr></td>
                            </tr>
                            <tr>
                                <td>Gender:<input type="radio" name="gender" value="Male" id="">Male
                                    <input type="radio" name="gender" value="Female"id="">Female
                                    <input type="radio" name="gender" value="Other"id="">Other<br>
                                    <hr></td>
                            </tr>
                            <tr>
                                <td>Date of Birth:
                                    <input type="tel" name="Day" size="1"><b>/</b>
                                    <input type="tel" name="Month" size="1"><b>/</b>
                                    <input type="tel" name="Year" size="1"><i>(dd/mm/yyyy)</i><br> <hr></td>
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