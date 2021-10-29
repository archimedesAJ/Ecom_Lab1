<?php

require('../Controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$category = select_one_category_controller($_GET['id']);
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
    <h2>Update Brand</h2>
        <div id="form-area">
            <form onsubmit="return getBrandDetail(this)" action="../Actions/Update_category.php" id="form" method="post">
                <div class="field-group">
                    <input type="hidden" id="cat_id" required="true" name="cat_id" placeholder="Cat ID" value="<?php echo $category['cat_id'] ?>">
                </div>
                <div class="field-group">
                    <label for="cat_name">Category</label>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Category Name" value="<?php echo $category['cat_name'] ?>">
                </div>
                <button id="next" type="submit" name="update" value="submit">Save Changes</button>
            </form>
        </div>
</div>
</body>
<script type="text/javascript" src="../JS/categoryeditValidation.js"></script>
</html>



    