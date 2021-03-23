<?php 
    require_once('../model/product_model.php');
    session_start();
    

        $id=$_SESSION['id'];
    
        deleteProductbyId($id);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/product_list.php');
        }else{
            
        }
?>