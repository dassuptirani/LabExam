<?php
	session_start();
	
	if(isset($_SESSION['id'])){
?>

<!DOCTYPE html>


<html>
<head>
<body>
<h1 align="middle">   Welcome Anne!<?=$_SESSION['id']?<h1><br>
<a align="middle" href="Profile">      Profile</a><br>
<a align="middle" href="Change Password">Change Password</a><br>
<a align="middle" href="Logout">Logout</a>


</body>
</head>
</html>

<?php		
	}else{
		header('location: Login.html');
	}

?>





