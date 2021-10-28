<?php
require('../Settings/core.php');
//Checking if a user is logged in
if (check_login() == true && check_permission() == 1){
    header('Location: ../View/index1.php');
}
else{
    header('Location: ../View/index.php');
}

?>


