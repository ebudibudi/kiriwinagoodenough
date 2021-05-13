<?php
	
	require("config/config.php");
	require("config/db.php");

	// Check if the form has been submitted
	if(isset($_POST["submit"])) {
		// echo "Form has been submitted";
		// Get form data
		$title = mysqli_real_escape_string($conn, $_POST["title"]);
		$author = mysqli_real_escape_string($conn, $_POST["author"]);
		$body = mysqli_real_escape_string($conn, $_POST["body"]);

		// Create query
		$query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')"; 

		if(mysqli_query($conn, $query)) {
			header("Location: ./");
		} else {
			echo "Error: " . $mysqli_error($conn);
		}

	}

?>

<?php include "inc/header.php"; ?>

		<h1>Add Post</h1>
		
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Title:</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Author:</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label>Body:</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<input type="submit" name="submit" value="Add Post" class="btn btn-primary">
		</form>

<?php include "inc/footer.php"; ?>