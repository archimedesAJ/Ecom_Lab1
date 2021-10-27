<?php

require('../Classes/product_class.php');

function add_product_controller($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->add_product($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword);

}


?>