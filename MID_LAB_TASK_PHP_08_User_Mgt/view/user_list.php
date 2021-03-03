<?php
	$title = "User List Page";
	include('header.php');
	$DataInput = file_get_contents('../model/user.json');
	$DataArray = json_decode($DataInput, true);
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
			$users = json_decode(file_get_contents('../model/user.json'), true);

			$i = 1;

			foreach($users as $user) {
				echo '<tr>
				<td>'.$i++.'</td>
				<td>'.$user['username'].'</td>
				<td>'.$user['email'].'</td>
				<td>
					<a href="edit.php?id=1"> EDIT</a> |
					<a href="delete.php?id=1"> DELETE</a>
				</td>
			</tr>';
			}

			
		?>
		
	</table>

<?php
	include('footer.php');
?>