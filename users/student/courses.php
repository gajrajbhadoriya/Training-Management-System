<?php
include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\CourseController;

$course = new CourseController();
$course = $course->index();

// var_dump($students);
// exit;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Data Table</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <a href="courses.php">Courses</a>
		<a href="mycourse.php">My Applied Course</a>
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
            <form action="applycource.php" method="POST"> 
                <input type="hidden" name="course_id" value="1">
                <button type="submit">Apply for Course </button>
            </form>
            </td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
</body>
</html>