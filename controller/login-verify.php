<?php
	require_once(__DIR__ . "/../model/config.php");

	function authenticateUser() {
		// checking if there is a session variable
		if(!isset($_SESSION["authenticated"])) {
			return false;
		}
		else {
			if($_SESSION["authenticated"] != true) {
				return false;
			}
			else {
				return true;
			}
		}
	}
?>