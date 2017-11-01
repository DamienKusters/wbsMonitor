<?php
	include("../connect.php");
	
	$username = filter_input(INPUT_POST, "username");
	$password = filter_input(INPUT_POST, "password");


	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn ,$sql);

	if(mysqli_num_rows($result) == 1)
	{
		$_SESSION["loggedIn"] = true;
		$_SESSION["username"] = $username;
		$_SESSION["username"] = $password;
	}

	if(!isset($username) || trim($username) == '' && !isset($password) || trim($password) == ''){
		echo "test";
	}	

	mysqli_close($conn);
?>