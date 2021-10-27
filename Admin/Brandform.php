<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=proxim-nova">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/form_style.css">
    <script src="http://parsleyjs.org/dist/parsley.js"><script>
</head>
<body>
    
<div id="page-main">
    <div id="form">
    <h2>Brand Form</h2>
        <div id="form-area">
            <form onsubmit="return getBrandDetails(this)" action="registerprocess.php" id="form" method="post">
                <div class="field-group">
                    <label for="name">Brand Name</label>
                    <input type="text" id="brand_name" required="true" name="brand_name" placeholder="Brand Name">
                </div>
                <button id="next" type="submit" name="btn" value="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
<script type="text/javascript"  src="../JS/brandValidation.js"></script>
</html>



    