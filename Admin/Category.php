<?php
require('../Settings/core.php');
require('../Controllers/product_controller.php');
//check if the user_login and it's and admin
if (check_login() && check_permission()==1){
}else{
    header("Location: ../View/index.php");
}

// return array of all rows, or false (if it failed)
$categories = select_all_categories_controller();
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
            <form onsubmit="return getBrandDetails(this)" action="../Actions/Add_Category.php" id="form" method="post">
                <div class="field-group">
                    <label for="cat_name">Category</label>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Category Name">
                </div>
                <button id="next" type="submit" name="btn" value="submit">Add Category</button>
            </form>
        </div>
</div>
<br>
<br>
<br>



<table class="table">
        <thead>
            <tr>
                <th>Category Name</th>
				<th></th>
				<th></th>
            </tr>
        </thead>

        <tbody>
			<?php
			foreach($categories as $category){
				echo 
				"
				<tr>
					<td>{$category['cat_name']}</td>
					<td><a href='../Admin/Categoryedit.php?id={$category['cat_id']}'>Edit</a></td>
                    <td><a href='../Admin/Categoryedit.php?id={$category['cat_id']}'>Delete</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>
</table>
</body>
<script type="text/javascript" src="../JS/categoryValidation.js"></script>
</html>



    