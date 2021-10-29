<?php

require('../Controllers/product_controller.php');

if(isset($_POST['update'])){
    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];
}

$result = update_category_controller($cat_id, $cat_name);


if ($result === true) header("Location: ../Admin/Categoryform.php");

else echo "update failed ";


?>