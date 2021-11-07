<?php
 
require('../Controllers/product_controller');
//Function to select all products
function all_products(){
    $results = select_all_products_controller();
    if (empty($results)){
        echo "Ooops! There are no products added yet.";
    }
    else{
        return $results;
    }
}

//Function to select a single product
function single_product(){
    $results = select_one_product_controller($id);
    if(empty($results)){
        echo "Ooops! There are no products added yet.";
    }
    else{
        return $results;
    }
}



//Function to search product results

function product_search_results(){
    $results = select_product_search_controller($keyword);
    if(empty($results)){
        echo "Ooops! Cannot find anything with your search!.";
    }
    else{
        return $results;
    }

}


?>