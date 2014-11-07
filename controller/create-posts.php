<?php
// we want to recieve the information that is being sent. We want to filter input and we want to get it from posts and we are grabbing it from title. And we are also filtering it to make sure it is a string. Trying to protect us from malicious stuff.
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "posts", FILTER_SANITIZE_STRING);
	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";
?>	