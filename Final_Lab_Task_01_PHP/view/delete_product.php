<?php 
     session_start();
     require_once('../model/fucnctions.php');
     $id=$_GET['id'];
     $pdID=getProductbyId($id);
 
     $_SESSION['edit_id']=$id;
 

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="../controller/deleteProduct.php">
		<fieldset>
			<legend>Delete PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><?php echo$pdID['name'] ?></td>
				</tr>
				<tr>
					<td>Buying price</td>
					<td><?php echo$pdID['BuyingPrice'] ?></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><?php echo$pdID['SellingPrice'] ?></td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td>Displayable</td>
                    <td>: Yes</td>
				</tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="DeleteProduct"> 
						
					</td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>