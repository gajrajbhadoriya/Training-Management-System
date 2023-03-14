<?php
include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\AdminController;

$admin = new AdminController();
$admin = $admin->index();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Data Table</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<nav>
	<nav>
		<a href="../../index.php">Home</a>
        <a href="create.php">Add Admin</a>
		<a href="read.php">View Admin</a>
		<a href="#">Course</a>
	</nav>
	</nav>
	<h1>Admin Data Table</h1>
	<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>MObile Number</th>
			<th>Password</th>
			<th colspan="2">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($admin as $admins) { ?>
		<tr>
			<td><?= $admins['id']?> </td>
			<td><?= $admins['name']?></td>
			<td><?= $admins['email'] ?></td>
			<td><?= $admins['gender'] ?></td>
			<td><?= $admins['number'] ?></td>
			<td><?= $admins['password']?></td>
			<td>
                    <form method="post" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $admins['id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
            </td>
			<td>
					<form name="form" method="post" action="update.php"> 
						<input type="hidden" name="new" value="1" />
						<input name="id" type="hidden" value="<?php echo $student['id'];?>" />
						<button type="submit">edit</button>

					</form>
			</td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
</body>
</html>

