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
function getAllProducts(){

        $conn = getConnection();
        $sql = "select * from products";
        $result = mysqli_query($conn, $sql);
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($products, $row);
        }
        return $products;
    }

}