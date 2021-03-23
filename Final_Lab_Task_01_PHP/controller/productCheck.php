<?php
	session_start();
	require_once('../model/product_model.php');
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['buyP']) || empty($_POST['sellP']) || empty($_POST['display']) ||)
        {
            echo 'Null value found'
        }   
    }