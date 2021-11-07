<?php

require('../Settings/db_class.php');

//extending means inheriting all the methods from connection
class Product extends Connection{
    /*Details of Products */
    //methods for adding product
    function add_product($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword){
        //retrun true or false
        return $this->query("insert into products(product_cat,product_brand, product_title,product_price, product_desc, product_image, product_keywords) values('$productCat', '$productBrand', '$productTitle','$productPrice', '$productDesc', '$productImage', '$productKeyword')");
    }

    //methods for selecting all products
    function select_all_products(){
        //return array or false
        return $this->fetch("select * from products");

    }

    //method for deleting one product
    function delete_one_product($id){
        //return true or false
        return $this->query("delete from products where product_id = '$id'");
    }

    //method for update one product
    function update_one_product($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword){
        //return true or false
        return $this->query("update products set product_cat='$productCat',product_brand='$productBrand', product_title=' $productTitle', product_price='$productPrice', product_desc='$productDesc', product_image='$productImage', product_keywords='$productKeyword' where product_id='$id'");
    }

    //method for selecting one product
    function select_one_product($id){
        //return associative array or false
        return $this->fetchOne("select * from products where product_id='$id'");
    }

    function select_product_search($keyword){
        return $this->fetch("select * from products where keyword LIKE %$keyword%");
    }

    /*Details of Brands */
    //methods for adding brand
    function add_brand($brand_name){
        //retrun true or false
        return $this->query("insert into brands(brand_name) values('$brand_name')");
    }


    //methods for selecting all brands
    function select_all_brands(){
        //return array or false
        return $this->fetch("select * from brands");
    }

    //methods for selecting one brand
    function select_one_brand($id){
        //return associative array or false
        return $this->fetchOne("select * from brands where brand_id='$id'");

    }
   
    //methods for selecting one brand_name
    function select_one_brand_name($id){
        //return associative array or false
        return $this->fetchOne("select brand_name from brands where brand_id='$id'");

    }


    //method for update one brand
    function update_one_brand($brand_id, $brand_name){
        //return true or false
        return $this->query("update brands set brand_name='$brand_name' where brand_id='$brand_id'");
    }



    /*Details of Category */
    //methods for adding category
    function add_category($cat_name){
        //retrun true or false
        return $this->query("insert into categories(cat_name) values('$cat_name')");
    }

    //methods for selecting all categories
    function select_all_categories(){
        //return array or false
        return $this->fetch("select * from categories");
    }

    //methods for selecting one brand
    function select_one_category($id){
        //return associative array or false
        return $this->fetchOne("select * from categories where cat_id='$id'");
    }

    //method for update one brand
    function update_one_category($cat_id, $cat_name){
        //return true or false
        return $this->query("update categories set cat_name='$cat_name' where cat_id='$cat_id'");
    }
    
}

?>
