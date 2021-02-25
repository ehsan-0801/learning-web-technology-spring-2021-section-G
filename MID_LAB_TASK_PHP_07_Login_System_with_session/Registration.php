<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
            <td>

            </td>
            <td height="400px" align="left"  padding="100">
                <form action="RegCheck.php" method="post" >
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        <pre>Name             :<input type="Text" name="Name" value=""></pre><br><hr>
                        <pre>Email            :<input type="email" name="email" value=""></pre><br><hr>
                        <pre>User Name        :<input type="Text" name="UserName" value=""></pre><br><hr>
                        <pre>Password         :<input type="password" name="password" value=""></pre><br><hr>
                        <pre>Confirm password :<input type="password" name="ConfirmPassword" value=""></pre><br><hr>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male" id="">Male
                            <input type="radio" name="gender" value="Female" id="">Female
                            <input type="radio" name="gender" value="Other" id="">Other
                        </fieldset>
                        <hr>
                        <fieldset>
                            <legend>Date OF Birth</legend>
                            <input type="tel" name="Day" size="1"><b>/</b>
                            <input type="tel" name="Month" size="1"><b>/</b>
                            <input type="tel" name="Year" size="1"><i>(dd/mm/yyyy)</i> 
                        </fieldset>
                        <hr>
                        <input type="submit" name="submit" value="submit">
                        <input type="reset" name="reset" value="reset">
                        
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