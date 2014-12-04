<?php
//checks if there is a connection error. it is an if statement.
	require_once(__DIR__ . "/../model/config.php");
	
//Makes a table. Gives the name of the table "posts". has an id that every blog post has. NOT NULL means the blog post can't be empty. Never can be a blog post that is empty.
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		// title of each blog post. At least 255 character for the title
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");
	//Now able to put information into the datatable.
	/*connection closes 
	every
	*/	
	if($query) {
		//lets us know that the table posts was successfully created.
		echo "<p>Successfully created table: posts</p>";
	}
	else {
		//table already exists.
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

	$query = $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int(11) NOT NULL AUTO_INCREMENT, "
		. "unsername varchar(30) NOT NULL,"
		. "email varchar(50) NOT NULL,"
		. "password char(128) NOT NULL, "
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY(id))");
	if($query) {
		echo "<p>Successfully created table: users</p>";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>