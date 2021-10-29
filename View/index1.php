<?php
if (check_login() && check_permission()==1){
    header("Location: index1.php");
}
else{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <div
        style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 90vh; max-height: 90vh;">
        <h1 style="font-size: 5rem;">Welcome to Index Page</h1>
        <a style="font-size: 1.5rem;" href="../Login/register.php">Register</a>
        <a style="font-size: 1.5rem;" href="../Logout/logout.php">Log out</a>
        <a style="font-size: 1.5rem;" href="../Admin/Brandform.php">Brand</a>
        <a style="font-size: 1.5rem;" href="../Admin/Categoryform.php">Category</a>
        
        
    </div>

</body>

</html>