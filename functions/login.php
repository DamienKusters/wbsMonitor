<?php
	session_start();

	$username = filter_input(INPUT_POST, "username");
	$password = filter_input(INPUT_POST, "password");

	if(trim($username) != "" && trim($password) != "") {
		include("../connect.php");
		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($conn ,$sql);

		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION["loggedIn"] = true;
			$_SESSION["username"] = $username;
			

		}

		mysqli_close($conn);

	}
	header("location: ../index.php");
?>