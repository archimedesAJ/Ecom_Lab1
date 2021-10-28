<?php

require('../Classes/brand_class.php');

function add_brand_controller($brand_name){
    //create an instance of the product class
    $brand_instance = new Brand();
    //call the method from the class
    return $brand_instance->add_brand($brand_name);

}


function select_all_brands_controller(){
    //create an instance of the product class
    $brand_instance = new Brand();
    //call the method from the class
    return $brand_instance->select_all_brands();
    
}

function select_one_brand_controller($id){
    //create an instance of the product class
    $brand_instance = new Brand();
    //call the method from the class
    return $brand_instance->select_one_brand($id);
    
}

function update_brand_controller($brand_id, $brand_name){
    //create an instance of the product class
    $brand_instance = new Brand();
    //call the method from the class
    return $brand_instance->update_one_brand($brand_id, $brand_name);
    
}


?>