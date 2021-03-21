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
		$rows=getAllUser();
		while($rows){
	echo "
			<tr>
				<td>{$rows['username']}</td>
				<td>{$rows['email']}</td>
				<td><a href='edit.php?id={$rows['ID']}'>edit</a> |
				    <a href='../controller/delete.php?id={$rows['ID']}'>delete</a>
				</td>
				
			</tr>";
}
?>


<?php
	require('footer.php');
?>