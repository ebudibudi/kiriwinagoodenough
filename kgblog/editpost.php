<?php
	
	require("config/config.php");
	require("config/db.php");

	// Check if the form has been submitted
	if(isset($_POST["submit"])) {
		// echo "Form has been submitted";
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST["update_id"]);
		$title = mysqli_real_escape_string($conn, $_POST["title"]);
		$author = mysqli_real_escape_string($conn, $_POST["author"]);
		$body = mysqli_real_escape_string($conn, $_POST["body"]);

		// Create query
		$query = "UPDATE posts SET
			title = '$title',
			author = '$author',
			body = '$body'
		WHERE id = $update_id"; 

		if(mysqli_query($conn, $query)) {
			header("Location: ./");
		} else {
			echo "Error: " . $mysqli_error($conn);
		}
	}

	// Get ID
	$id = mysqli_real_escape_string($conn, $_GET["id"]);

	// Create query
	$query = "SELECT * FROM posts WHERE id = " . $id;

	// Get result
	$result = mysqli_query($conn, $query);

	// Fetch data
	$post = mysqli_fetch_assoc($result);
	// var_dump($posts);

	// Free the result
	mysqli_free_result($result);

	// Close connection
	mysqli_close($conn);



?>

<?php include "inc/header.php"; ?>

		<h1>Edit Post</h1>
		
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Title:</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
			</div>
			<div class="form-group">
				<label>Author:</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
			</div>
			<div class="form-group">
				<label>Body:</label>
				<textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>"> 
			<input type="submit" name="submit" value="Edit Post" class="btn btn-primary">
		</form>

<?php include "inc/footer.php"; ?>