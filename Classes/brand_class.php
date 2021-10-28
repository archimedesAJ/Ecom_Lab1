<?php

require('../Settings/db_class.php');

//extending means inheriting all the methods from connection
class Brand extends Connection{

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

    //method for update one brand
    function update_one_brand($brand_id, $brand_name){
        //return true or false
        return $this->query("update brands set brand_name='$brand_name' where brand_id='$brand_id'");
    }

}

?>