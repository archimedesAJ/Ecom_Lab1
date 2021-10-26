<?php
	require('../Settings/core.php');
	require('../Controllers/customer_controller.php');

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

       // select customer details with this email
        $result = select_customer_givenEmail_controller($email);
		

		if (empty($result)){
			$_SESSION['error'] = 'Cannot find account with the email';
			$message = $_SESSION['error'];
			echo ("<script>alert('$message'); window.location.href = 'login.php';</script>");

			
		}
		else{
			if (password_verify($password, $result['customer_pass'])){
				$_SESSION['user_id'] = $result['customer_id'];
				$_SESSION['user_role'] = $result['user_role'];
				header("Location: ../View/index.php");
			}
			else{
                $_SESSION['error'] = 'Incorrect password';
				$message = $_SESSION['error'];
				echo "<script>alert('$message');window.location.href = 'login.php';</script>";
			}
		}	

	}
	else{
		$_SESSION['error'] = 'Input customer credentials first';
		check_error();
	}
	
?>

		