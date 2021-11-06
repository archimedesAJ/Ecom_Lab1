<?php

require('../Controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$brands = select_all_brands_controller();
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
    <link rel="stylesheet" href="../CSS/form_style.css">
</head>
<body>
    
<div id="page-main">
    <div id="form">
    <h2>Add Product Form</h2>
    <div id="form-area">
        <form onsubmit="return getDetails(this)" action="../Actions/Add_product.php" id="form" method="post" enctype="multipart/form-data">
        
            <div class="field-group">
            <label for="product_cat">Choose a cart:</label>
            <select name="cart_id" id="cart_id">
                <?php
                 foreach($categories as $category){
                    echo "<option value='{$category['cat_id']}'>{$category['cat_name']}</option>";
                 }
                ?>
            </select>
            </div>


            <div class="field-group">
            <label for="product_cat">Choose a brand:</label>
            <select name="brand_id" id="brand_name">
            <?php
                 foreach($brands as $brand){
                    echo "<option value='{$brand['brand_id']}'>{$brand['brand_name']}</option>";
                 }
                ?>
            </select>
            </div>


            <div class="field-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title">
            </div>


            <div class="field-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Price">
            </div>

            <div class="field-group">
                <label for="country">Description</label>
                <textarea rows="4" cols="50" name="description" id="desc"></textarea>
            </div>


            <div class="field-group">
                <label class="img" for="city">Image</label>
                <input type="file" id="image" name="image" required="true">
            </div>

            <div class="field-group">
                <label for="keyword">Keyword</label>
                <input type="text" id="keyword" name="keyword" placeholder="Keyword">
            </div>

            <button id="next" type="submit" name="submit_btn" value="submit">Submit</button>
        </form>
    </div>
</div>
</body>
<script type="text/javascript"  src="../JS/productValidation.js"></script>
</html>



