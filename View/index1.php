<?php
require('../Settings/core.php');
if (check_login() && check_permission()==1){
    echo "Hurray Welcome to Admin Page!";
}else{
    header("Location: index.php");
}
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
        <li><a href="../Admin/Brand.php">Add Brand</a></li>
        <li><a href="../Admin/Category.php"> Add Category</a></li>
        <li><a href="Product.php">Add Product</a></li>
        
    </ul>
  
</body>
<br>

<?php

require('../Controllers/product_controller.php');

$all_products = select_all_products_controller();

?>
<table class="table">
        <thead>
            <tr>
                <th>Product ID</th>
				<th>Product Image</th>
				<th>Product Title</th>
                <th>Product Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
			<?php
			foreach($all_products as $product){
				echo 
				"
				<tr>
                    <td>{$product['product_id']}</td>
                    <td><img src={$product['product_image']} height=25 width=30></td>
					<td>{$product['product_title']}</td>
                    <td>{$product['product_price']}</td>
                    <td>{$product['product_desc']}</td>
					<td><a href='../Admin/Brandedit.php?id={$product['product_id']}'>Edit</a></td>
                    <td><a href='../Admin/Branddelete.php?id={$product['product_id']}'>Delete</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>
</table>

</html>


