<?php
include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\CourseController;

$course = new CourseController();
$course = $course->index();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Data Table</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<nav>
		<a href="../../index.php">Home</a>
        <a href="create_course.php">Add course</a>
		<a href="read_course.php">View course</a>
		<a href="#">Intersted Students</a>
	</nav>
	<h1>Course Data Table</h1>
	<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Course Name</th>
			<th>Course Description</th>
			<th>Course Code</th>
			<th>Course Credit</th>
			<th>Course Instructor</th>
			<th>Course Start Date</th>
			<th>Course End Date</th>
			<th colspan="2" style="text-align: center;">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($course as $courses) { ?>
		<tr>
			<td><?= $courses['id']?> </td>
			<td><?= $courses['course_name']?></td>
			<td><?= $courses['course_description'] ?></td>
			<td><?= $courses['course_code'] ?></td>
			<td><?= $courses['course_credit'] ?></td>
			<td><?= $courses['course_instructor'] ?></td>
			<td><?= $courses['start_date'] ?></td>
			<td><?= $courses['end_date'] ?></td>
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