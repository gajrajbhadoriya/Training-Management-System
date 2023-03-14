<?php

include dirname(__DIR__, 1) . '/includes/header.php';


use App\Controllers\StudentController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
	$email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $standard = $_POST['standard'];
    $roll = $_POST['roll'];
	$password = $_POST['password'];

    $student = new StudentController();
    $student->add($name, $address, $gender, $standard, $roll, $password);

    header('Location: read_student.php');
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
        <a href="create_student.php">Add Student</a>
		<a href="read_student.php">View Student</a>
		<a href="../course/read_course.php">Course</a>
	</nav>
	<h1>Add Student</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<th>Name:</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Email:</th>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<th>Address:</th>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<th>Gender:</th>
				<td>
					<select name="gender">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Standard:</th>
				<td><input type="text" name="standard"></td>
			</tr>
			<tr>
				<th>Roll Number:</th>
				<td><input type="text" name="roll"></td>
			</tr>
			<tr>
				<th>Password:</th>
				<td><input type="text" name="password"></td>
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