<?php

require('../Controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$brands = select_all_brands_controller();
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
    <link rel="stylesheet" href="../CSS/form_style.css">
</head>
<body>
    
<div id="page-main">
    <div id="form">
    <h2>Brand Form</h2>
        <div id="form-area">
            <form onsubmit="return getBrandDetails(this)" action="../Actions/Add_brand.php" id="form" method="post">
                <div class="field-group">
                    <label for="brand_name">Brand</label>
                    <input type="text" id="brand_name"  required="true" name="brand_name" placeholder="Brand Name">
                </div>
                <button id="next" type="submit" name="btn" value="submit">Add Brand</button>
            </form>
        </div>
</div>
<br>
<br>
<br>



<table class="table">
        <thead>
            <tr>
                <th>Brand Name</th>
				<th></th>
				<th></th>
            </tr>
        </thead>

        <tbody>
			<?php
			foreach($brands as $brand){
				echo 
				"
				<tr>
					<td>{$brand['brand_name']}</td>
					<td><a href='../Admin/Brandedit.php?id={$brand['brand_id']}'>Edit</a></td>
                    <td><a href='../Admin/Brandedit.php?id={$brand['brand_id']}'>Delete</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>
</table>
</body>
<script type="text/javascript" src="../JS/brandValidation.js"></script>
</html>



    