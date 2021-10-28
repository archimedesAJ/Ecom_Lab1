<?php

require('../Controllers/product_controller.php');

if(isset($_POST['update'])){
    $brand_id = $_POST['brand_id'];
    $brand_name = $_POST['brand_name'];
}

$result = update_brand_controller($brand_id, $brand_name);


if ($result === true) header("Location: ../Admin/Brandform.php");

else echo "update failed ";


?>