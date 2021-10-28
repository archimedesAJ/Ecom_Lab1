<?php

require('../Classes/product_class.php');

function add_product_controller($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->add_product($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword);

}

/*Details about brands */
function add_brand_controller($brand_name){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->add_brand($brand_name);

}


function select_all_brands_controller(){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->select_all_brands();
    
}

function select_one_brand_controller($id){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->select_one_brand($id);
    
}

function update_brand_controller($brand_id, $brand_name){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->update_one_brand($brand_id, $brand_name);
    
}



/*Details about category*/
function add_category_controller($cat_name){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->add_category($cat_name);

}

function select_all_categories_controller(){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->select_all_categories();
    
}

function select_one_category_controller($id){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->select_one_category($id);
    
}

function update_category_controller($cat_id, $cat_name){
    //create an instance of the product class
    $product_instance = new Product();
    //call the method from the class
    return $product_instance->update_one_category($cat_id, $cat_name);
    
}







?>