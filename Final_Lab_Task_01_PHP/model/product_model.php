<?php
	
require_once('product_db.php');
function insertProduct($products){
	$conn = getConnection();
	$sql = "insert into products values('', '{$products['name']}', '{$products['buyP']}','{$products['sellP']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}
    else{
		return false;
	}

}