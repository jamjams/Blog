<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/posts.css">
	<title></title>
</head>
<body>



<?php
	
	require_once(__DIR__ . "/../model/config.php");
// creating a connection to database and storing the connection with the $connection variable
	//$connection = new mysqli($host, $username, $password, $database);

// we want to recieve the information that is being sent. We want to filter input and we want to get it from posts and we are grabbing it from title. And we are also filtering it to make sure it is a string. Trying to protect us from malicious stuff.
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');
	//this query is going to store a true or false value. Made a posts table
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

	if ($query) {
		// successfully inserted title into post
		echo "<p>Title: $title</p>";
		echo "<p>Post: $post</p>";
		echo "Posted on: " . $date->format("m/d/y") . " at " . $time->format("h:i");
	}

	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

	
?>	

</body>
</html>