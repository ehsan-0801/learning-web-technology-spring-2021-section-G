<?php
	$title = "User List Page";
	require('header.php');
	$connection = mysqli_connect('localhost','root', '', 'userDB');
	$sql="select * from users";
	$usersData=mysqli_query($connection, $sql);
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
		while($row=mysqli_fetch_assoc($usersData)){
	echo "
			<tr>
				<td>{$row['ID']}</td>
				<td>{$row['username']}</td>
				<td>{$row['email']}</td>
				<td><a href='edit.php?id={$row['ID']}'>edit</a> |
				    <a href=''>delete</a>
				</td>
				
			</tr>";
}
?>


<?php
	require('footer.php');
?>