
<h1>Edit Page</h1>
	<form action="" method="post">
		<ul>
			<li><label for="username">Username: </label><input type="text" name="username" value="<?= isset($row['username']) ? $row['username'] : ''; ?>" id="username"></li>
			<li><label for="email">Email: </label><input type="text" name="email" value="<?= isset($row['email']) ? $row['email'] : ''; ?>" id="email"></li>
			<li><input type="submit" value="Update"></li>
		</ul>

		<?php if (isset($status)): ?>
			<p class="status"><?= $status; ?></p>
		<?php endif ?>
	</form>
<p><a href="index.php">Go Back</a></p>
	
</body>
</html>