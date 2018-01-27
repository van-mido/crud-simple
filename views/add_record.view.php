	<div class="content">
	<h1>New User Record</h1>
		
		<form action="" method="post">
			<ul>
				<li><label for="username">Username: </label><input type="text" name="username" id="username"></li>
				<li><label for="email">Email: </label><input type="text" name="email" id="email"></li>
				<li><input type="submit" value="add record"></li>
			</ul>

			<?php if (isset($status)): ?>
				<p class="status"><?= $status; ?></p>
			<?php endif ?>
		</form>
	<p><a href="index.php">Go to home</a></p>
	</div>