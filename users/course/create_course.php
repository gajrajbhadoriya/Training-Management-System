<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\CourseController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseName = $_POST['course_name'];
    $courseDescription = $_POST['course_description'];
    $courseCode = $_POST['course_code'];
    $courseCredit = $_POST['course_credit'];
    $courseInstructor = $_POST['course_instructor'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    $course = new CourseController;
    $course->add($courseName, $courseDescription, $courseCode, $courseCredit,  $courseInstructor, $startDate, $endDate);

    header('Location: read_Course.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Information Form</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
		<a href="../../index.php">Home</a>
        <a href="create_course.php">Add course</a>
		<a href="read_course.php">View course</a>
		<a href="#">Intersted Students</a>
	</nav>
	<h1>Add Course</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<th> Course name:</th>
				<td><input type="text" name="course_name"></td>
			</tr>
			<tr>
				<th>Course Description:</th>
				<td><input type="text" name="course_description"></td>
			</tr>
			<tr>
				<th>Course Code:</th>
				<td>
					<select name="course_code">
						<option value="0001">0001</option>
						<option value="0002">0002</option>
						<option value="0003">0003</option>
						<option value="0004">0004</option>
						<option value="0005">0005</option>
						<option value="0006">0006</option>
						<option value="0007">0007</option>
						<option value="0008">0008</option>
                    </select>
				</td>
			</tr>
			<tr>
				<th>Course Credit:</th>
				<td><input type="text" name="course_credit"></td>
			</tr>
			<tr>
				<th>Course Instructor:</th>
				<td><input type="text" name="course_instructor"></td>
			</tr>
            <tr>
				<th>Course Start Date:</th>
				<td><input type="date" name="start_date"></td>
			</tr>
            <tr>
				<th>Course End Date:</th>
				<td><input type="date" name="end_date"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>