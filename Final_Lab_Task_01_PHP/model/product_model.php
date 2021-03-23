<?php
	
require_once('product_db.php');
function insertProduct($products){
	$conn = getConnection();
	$sql = "insert into products values('', '{$products['name']}', '{$products['BuyingPrice']}','{$products['SellingPrice']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}
    else{
		return false;
	}
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
    function deleteProductbyId($id){
        $conn = getConnection();
        $sql="delete from products where ID='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getProductbyId($id){
	
        $conn = getConnection();
        $sql = "select name, BuyingPrice, SellingPrice from products where ID='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
