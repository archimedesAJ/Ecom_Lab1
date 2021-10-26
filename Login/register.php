<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=proxim-nova">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div id="page-main">
    <div id="form">
    <h2>Register Form</h2>
    <div id="form-area">
        <form onsubmit="return getDetails(this)" action="registerprocess.php" id="form" method="post">
            <div class="field-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" required="true" name="name" placeholder="Full Name">
            </div>

            <div class="field-group">
                <label for="pemail">Email</label>
                <input type="text" id="email" name="email" required="true" placeholder="Emails">
            </div>


            <div class="field-group">
                <label for="password">Password</label>
                <input type="password" id="password" required="true" name="password" placeholder="Password">
            </div>

            <div class="field-group">
                <label for="country">Country</label>
                <input type="text" id="country" required="true" name="country" placeholder="Country">
            </div>


            <div class="field-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" required="true" placeholder="City">
            </div>

            <div class="field-group">
                <label for="phone">Contact</label>
                <input type="text" id="phone" name="phone" required="true" placeholder="Contact Number">
            </div>

            <button id="next" type="submit" name="btn" value="submit">Submit</button>
        </form>
    </div>
</div>
</body>
<script type="text/javascript"  src="../JS/registerValidation.js"></script>
</html>



