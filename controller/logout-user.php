<?php
	require_once(__DIR__ . "/../model/config.php");
	unset($SESSION["aunthenticated"]);
	session_destroy();
	header("Location: " . $path . "blog.php");
?>