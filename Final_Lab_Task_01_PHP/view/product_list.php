<?php
	$title = "Product List Page";
	require_once('../model/product_model.php');
?>
<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>PROFIT</td>
		</tr>
		<?php
		$products=getAllProducts();
		foreach($products as $product){
	echo "
			<tr>
				<td>{$product['ID']}</td>
				<td>{$product['name']}</td>
				<td>{$product['sellP']}-{$product['buyP']}</td>
				<td><a href='editproduct.php?id={$product['ID']}'>edit</a> |
				    <a href='../controller/deleteproduct.php?id={$product['ID']}'>delete</a>
				</td>
				
			</tr>";
}
?>