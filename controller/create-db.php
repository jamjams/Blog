<?php
//checks if there is a connection error. it is an if statement.
	require_once(__DIR__ . "/../model/database.php");
	$connection = new mysqli($host, $username, $password);
	//if there is a connection, the code is executed. the concatination is used to describe the error.
	if($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}

	$exists = $connection->select_db($database);
//checking if database exists. Tell databse to create database. Query allows us to do that.
	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database");
		//value being stored is either true or false
	}
		//if the value is true, the code below is executed. Outputs the $query message.
		if($query){
			echo "Successfully created database " . $database;
			//concatinates name of database.
		}
	//connection closes	
	$connection->close();
?>