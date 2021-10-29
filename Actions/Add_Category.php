<?php

require('../Controllers/product_controller.php');

 $cat_name = $_POST["cat_name"];

 if(isset($_POST['btn'])){

    $result = add_category_controller($cat_name);

    if($result === true){
        header("Location: ../Admin/Category.php");
        echo "insertion successful!";
    }else{
        echo "insertion not successful!";
    }
   
}

?>