<?php
require('../Controllers/product_controller.php');
$brand_name = $_POST["brand_name"];

if(isset($_POST['btn'])){

    $result = add_brand_controller($brand_name);

    if($result === true){
        header("Location: ../Admin/Brand.php");
        echo "insertion successful!";
    }else{
        echo "insertion not successful!";
    }
   
}

?>