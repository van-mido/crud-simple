
	<div class="content">
	<h1> <?= isset($name) ? $name : "System Users"  ?></h1>	
		<?php if ($users): ?>
			
		<table>
		<tbody>
		<tr><td>ID</td><td>User</td><td>Email</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
				
		<?php foreach ($users as $user): ?>
							
						<tr>
							<td><?= $user['id']; ?></td>
							<td><?= $user['username']; ?></td>
							<td><?= $user['email']; ?></td>
							<td><a href="simple_reg.php?id=<?= $user['id']; ?>">View</a></td>
							<td><a href="edit_reg.php?id=<?= $user['id']; ?>">Edit</a></td>
							<td><a href="delete_reg.php?id=<?= $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?'); ">Delete</a></td>
						</tr>
					<?php endforeach ?>	
			</tbody>
			</table>		
					<?php else: ?>
					<p><?= "No users to display"; ?></p>	
		
		<?php endif ?>

	<p><a href="add_record.php">Insert data</a></p>
	
	</div>
	
