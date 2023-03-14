<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\AdminController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
	$password = $_POST['password'];

    $student = new AdminController();
    $student->add($name, $email, $gender, $number, $password);

    header('Location: read.php');
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
        <a href="create.php">Add Admin</a>
		<a href="read.php">View Admin</a>
		<a href="#">Course</a>
	</nav>
	<h1>Add Admin</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<th>Name:</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email"></td>
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
				<th>Mobile Number</th>
				<td><input type="text" name="number"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password"></td>
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