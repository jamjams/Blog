<?php
	// we want to access our path file located in config so we can link to the proper controller
	require_once(__DIR__ . "/../model/config.php");
?>
<div class="logintitle"><center><h1>Login</h1></center>
</div>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	<center><div class="loginusername">
		<label for="username">Username: </label>
		<input type="text" name="username" placeholder="Username"/>
	</div>

	<div class="loginpassword">
		<label for="password">Password: </label>
		<input type="password" name="password" placeholder="Username"/>
	</div>

	<div class="loginsubmit">
		<button type="submit">Submit</button>
	</div></center>
</form>