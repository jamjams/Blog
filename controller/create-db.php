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
	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");
		//value being stored is either true or false
	
		//if the value is true, the code below is executed. Outputs the $query message.
		if($query) {
			echo "Successfully created database: " . $database;
			//concatinates name of database.
		}
	}
	// runs if the database already exists.
	else {
		echo "Database already exists.";
	}
//Makes a table. Gives the name of the table "posts". has an id that every blog post has. NOT NULL means the blog post can't be empty. Never can be a blog post that is empty.
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT."
		// title of each blog post. At least 255 character for the title
		. "title varchar (255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id)");
	//Now able to put information into the datatable.
	/*connection closes 
	every
	*/	
	$connection->close();
?>