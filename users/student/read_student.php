<?php
include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\StudentController;

$students = new StudentController();
$students = $students->index();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Data Table</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<nav>
		<a href="../../index.php">Home</a>
        <a href="create_student.php">Add Student</a>
		<a href="read_student.php">View Student</a>
		<a href="../course/read_course.php">Course</a>
	</nav>
	<h1>Student Data Table</h1>
	<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Standard</th>
			<th>Roll Number</th>
			<th>Password</th>
			<th colspan="2" style="text-align: center;">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($students as $student) { ?>
		<tr>
			<td><?= $student['id']?> </td>
			<td><?= $student['name']?></td>
			<td><?=$student['email']?></td>
			<td><?= $student['address'] ?></td>
			<td><?= $student['gender'] ?></td>
			<td><?= $student['standard'] ?></td>
			<td><?= $student['roll'] ?></td>
			<td><?= $student['password']?></td>
			<td>
                    <form method="post" action="delete_student.php">
                        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
            </td>
			<td>
					<form name="form" method="post" action="update_student.php"> 
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