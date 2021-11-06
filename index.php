
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Homepage</title>
</head>

<body>
    <div
        style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 90vh; max-height: 90vh;">
        <h1 style="font-size: 5rem;">Welcome to Index Page</h1>
        <a style="font-size: 1.5rem;" href="Login/login.php">Login Page</a>
        <a style="font-size: 1.5rem;" href="Login/register.php">Register Page</a>
    </div>
<!--
<br>
<br>
<br>
<br>





    <table class="table">
        <thead>
            <tr>
                <th>Products</th>
				<th></th>
				<th></th>
            </tr>
        </thead>

        <tbody>
			<?php
			foreach($products as $product){
				echo 
				"
				<tr>
					<td>{$product['product_title']}</td>
                    <td>{$product['product_price']}</td>
                    <td>{$product['product_desc']}</td>
                    <td>{$product['product_image']}</td>
                    <td>{$product['product_image']}</td>
					<td><a href='../Admin/Brandedit.php?id={$brand['brand_id']}'>View</a></td>
                    <td><a href='../Admin/Branddelete.php?id={$brand['brand_id']}'>Add to Cart</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>
</table>

        -->

</body>

</html>