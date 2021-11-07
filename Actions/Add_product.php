<?php

require('../Controllers/product_controller.php');

// check if theres a POST variable with the name 'addProductButton'
if(isset($_POST['submit_btn'])){
    // retrieve the name, description and quantity from the form submission
    
    $fn = $_FILES["image"]["name"];
    $target_folder = "../Images/Product/";
    $up_dist = $target_folder . basename($fn);
    move_uploaded_file($_FILES["image"]["tmp_name"], $up_dist);
    
    $productCat = $_POST['cart_id'];
    $productBrand = $_POST['brand_id'];
    $productTitle = $_POST['title'];
    $productPrice = $_POST['price'];
    $productDesc = $_POST['description'];
    $productImage = $up_dist;
    $productKeyword = $_POST['keyword'];

    // call the add_product_controller function: return true or false
    $result = add_product_controller($productCat, $productBrand,$productTitle,$productPrice,$productDesc, $productImage,$productKeyword);


    if($result === true) header("Location: ../index1.php");
    else echo "insertion failed";

}