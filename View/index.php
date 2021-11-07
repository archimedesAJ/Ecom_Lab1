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
    <title>Homepage</title>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
</style>
</head>

<body>
    <ul>
        <li><a href="../Login/register.php">Register</a></li>
        <li><a href="../Logout/logout.php">Log Out</a></li>
    </ul>
  
</body>

<br>

<?php
    foreach ($all_products as $product){
       ?>
         <div>
            <a href="single_product.php?editid=<?php echo $product['product_id']?>" class="image"><img src="<?php echo $product['product_image']?>" alt="product" srcset="" width="100" height="100"></a>
            <h4><?php echo $product['product_title']?></h4>
            <div><?php echo "<strong> GHS {$product['product_price'] }</strong>"?></div>

            <button>
                <a href="../Actions/Add_to_cart.php?updateid=<?php echo $product['product_id']?>" style="text-decoration: none">Add To Cart</a>
            </button>
            <button>
                <a href="single_product.php?updateid=<?php echo $product['product_id']?>" style="text-decoration: none">Details</a>
            </button>

        </div>

    <?php
    }
    ?>
</html>