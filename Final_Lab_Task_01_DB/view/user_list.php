<?php
	$title = "User List Page";
	require('header.php');
	require_once('../model/userModel.php');
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
		<?php
		$users=getAllUser();
		foreach($users as $user){
	echo "
			<tr>
				<td>{$user['ID']}</td>
				<td>{$user['username']}</td>
				<td>{$user['email']}</td>
				<td><a href='edit.php?id={$user['ID']}'>edit</a> |
				    <a href='../controller/delete.php?id={$user['ID']}'>delete</a>
				</td>
				
			</tr>";
}
?>


<?php
	require('footer.php');
?>