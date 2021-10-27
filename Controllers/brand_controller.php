<?php

require('../Classes/brand_class.php');

function add_brand_controller($brand_name){
    //create an instance of the product class
    $brand_instance = new Brand();
    //call the method from the class
    return $brand_instance->add_brand($brand_name);

}


?>