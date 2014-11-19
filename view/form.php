<?php 
// connecting controller to the blog post form.
	require_once(__DIR__ . "/../model/config.php");
 ?>

<h1>Create Blog Post</h1>

<!-- WE want the form to take in certain information and put that info in a table -->
<form method="post" action="<?php echo $path . "controller/create-posts.php"; ?>">
<!-- div box for title -->
	<div class="titlebox">
	<!-- text displayed in front of text box -->
		<label for="title">Title: </label>
		<!-- input box allows us to put text in the box -->
		<input type="txt" name="title"/>
	</div>
<!-- div box for posts -->
	<div class="postbox">
		<label for="post">Post: </label>
		<!-- we can put as much text aws we want which differs from the input box -->
		<textarea name="post"></textarea>
	</div>

	<div class="submitbutton">
		<button type="submit">Submit your post!</button>
	</div>
</form>