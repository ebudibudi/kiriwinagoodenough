<?php
	
	require("config/config.php");
	require("config/db.php");

	// Create query
	$query = "SELECT * FROM posts ORDER BY created_at DESC";

	// Get result
	$result = mysqli_query($conn, $query);

	// Fetch data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// var_dump($posts);

	// Free the result
	mysqli_free_result($result);

	// Close connection
	mysqli_close($conn);

?>

<?php include "inc/header.php"; ?>

		<h1>Posts</h1>
		<?php foreach($posts as $post): ?>
		<div>
			<h3 class="text-primary"><?php echo $post["title"]; ?></h3>
			<small>
				Created on <?php echo $post["created_at"]; ?> by <?php echo $post["author"]; ?>
			</small>
			<p><?php echo $post["body"]; ?></p>
			<a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-success btn-sm">Read more</a>
		</div><hr>
		<?php endforeach; ?>

<?php include "inc/footer.php"; ?>