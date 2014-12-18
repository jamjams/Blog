<?php
	require_once(__DIR__ . "/../model/config.php");
	// storing the username
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	// we are selecting a proper user from the database. Retrieving data on our database.
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	if($query->num_rows == 1) {
		$row = $query->fetch_array();

		if($row["password"] === crypt($password, $row["salt"])) {
			$_SESSION["authenticated"] = true;

			echo "<p>Login Successful!</p>";
		}

		else {
			echo "<p>Invalid username and password</p>";
		}
	}
	else {
		echo "<p>Invalid username and password</p>";
	}
?>