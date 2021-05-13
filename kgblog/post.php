<?php
	require("config/config.php");
	require("config/db.php");

	// Check if the form has been submitted
	if(isset($_POST["delete"])) {
		// echo "Form has been submitted";
		// Get form data
		$delete_id = mysqli_real_escape_string($conn, $_POST["delete_id"]);

		// Create query
		$query = "DELETE FROM posts WHERE id = " . $delete_id; 

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

		<a href="./" class="btn btn-default">Back</a>
		<h1><?php echo $post["title"]; ?></h1>
		<div>
			<small>
				Created on <?php echo $post["created_at"]; ?> by <?php echo $post["author"]; ?>
			</small>
			<p><?php echo $post["body"]; ?></p>

			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pull-right">
				<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn btn-danger">
			</form>

			<a href="editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
		</div><hr>

<?php include "inc/footer.php"; ?>