<?php

require('../controllers/customer_controller.php');

 $full_name = $_POST["name"];
 $email = $_POST["email"];
 $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $country =  $_POST["country"];
 $city = $_POST["city"];
 $contact_number = $_POST["phone"];


if(isset($_POST['btn'])){

    $result = add_customer_controller($full_name, $email, $password,$country, $city, $contact_number);

    if($result === true){
        header("Location: ../Login/login.php");
        echo "insertion successful!";
    }else{
        echo "insertion not successful!";
    }
   
}

?>