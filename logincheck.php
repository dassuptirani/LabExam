<?php


	session_start();

	if(isset($_POST['Login'])){

		$Id = $_POST['id'];
		$Password = $_POST['Pword'];

		if(empty($Id) == true || empty($Password) == true){
			echo "null login!";
		}else{

			if( $Id== $Password){
				
				$_SESSION['id'] = $Id;
				$_SESSION['Pword'] = $Password;

				header('location: logincheck.php');

			}else{
				echo "invalid id/password";
			}
		}

	}else{
		header('location: Login.html');
	}




?>