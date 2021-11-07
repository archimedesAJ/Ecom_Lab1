<?php
require('../Controllers/product_controller.php');

//Selecting all products
$all_products = select_all_products_controller();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=proxim-nova">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="../CSS/form_style.css">-->

    <style>
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #111;
        }

        .search-container button {
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;

        }

        input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
        }

        
        .myDiv {
        border: 1px outset grey;
        /*background-color: lightblue;  */  
        text-align: center;
        width: 40%;
        margin-left: 20px;
        }
</style>

</style>
</head>
<body>
<ul>
    <li><a href="Login/login.php">Login</a></li>
    <li><a href="Login/register.php">Register</a></li>
    <li><a href="all_product.php">Products</a></li>
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
   </div>
</ul>

<br>

<?php


if (isset($_GET['productid'])){
    $prod_id = $_GET['productid'];

   $prod_details = select_one_product_controller($prod_id);
   $product_cat_id = $prod_details['product_cat'];
   $product_brand_id = $prod_details['product_brand'];
   $brand_name = select_one_brand_name_controller($product_brand_id);
   $cat_name = select_one_category_name_category($product_cat_id);
   //var_dump($cat_name);

}
?>
<div class="myDiv">
    <a href="single_product.php?productid=<?php echo $prod_details['product_id']?>" class="image"><img src="<?php echo $prod_details['product_image']?>" alt="product" srcset="" width="200" height="200"></a>
        <div><?php echo "<strong>{$prod_details['product_title']} </strong>"?></div>
             <div><?php echo "<strong> Category</strong>: {$cat_name['cat_name']}" ?></div>
             <div><?php echo "<strong>Brand</strong>: {$brand_name['brand_name']} "?></div>
             <div><?php echo " {$prod_details['product_desc'] } "?></div>
             <div><?php echo "<strong> GHS {$prod_details['product_price'] }</strong>"?></div>
             <div><?php echo " Keyword: {$prod_details['product_keywords'] }"?></div>
     
             <button>
                <a href="all_product.php" style="text-decoration: none">Back to view page</a>
             </button>
             <button>
                <a href="../Actions/add_to_cart.php?productid=<?php echo $row['product_id']?>" style="text-decoration: none">Add To Cart </a>
             </button>
            <br>
        </div>