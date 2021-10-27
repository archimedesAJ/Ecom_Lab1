<?php

require('../Settings/db_class.php');

//extending means inheriting all the methods from connection
class Products extends Connection{

    //methods for adding product
    function add_product($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword){
        //retrun true or false
        return $this->query("insert into products(product_cat,product_brand, product_title,product_price, product_desc, product_image, product_keywords) values('$full_name', '$email', '$password','$country', '$city', '$contact_number')");
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
    function update_one_customer($productCat, $productBrand, $productTitle,$productPrice, $productDesc, $productImage, $productKeyword){
        //return true or false
        return $this->query("update customer set product_cat='$productCat',product_brand='$productBrand', product_title=' $productTitle', product_price='$productPrice', product_desc='$productDesc', product_image='$productImage', product_keywords='$productKeyword' where id='$id'");
    }

    //method for selecting one customer
    function select_one_product($id){
        //return associative array or false
        return $this->fetchOne("select * from products where product_id='$id'");
    }


}

?>
