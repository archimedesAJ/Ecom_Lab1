<?php

require('../Settings/db_class.php');

//extending means inheriting all the methods from connection
class Brand extends Connection{

    //methods for adding product
    function add_brand($brand_name){
        //retrun true or false
        return $this->query("insert into brands(brand_name) values('$brand_name')");
    }

}

?>