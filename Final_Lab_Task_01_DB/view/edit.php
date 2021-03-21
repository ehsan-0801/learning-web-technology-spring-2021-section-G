<?php
	$title = "Edit Page";
	require('header.php');
	$connection = mysqli_connect('localhost','root', '', 'userDB');
	$id=$_GET['id'];
	$sql="select username, password, email from users where ID=$id";
	$Data=mysqli_query($connection,$sql);
	$userdata=mysqli_fetch_assoc($Data);
	$_SESSION['id']=$id;
?>

	<form method="post" action="../controller/update.php">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo$userdata['username'] ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="<?php echo$userdata['password'] ?>" value="123"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo$userdata['email'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Update"> 
						<a href="user_list.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	require('footer.php');
?>