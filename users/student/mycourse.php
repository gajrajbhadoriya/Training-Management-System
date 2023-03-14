<?php
include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\StudentController;

$application = new StudentController();
$application = $application->indexApplication();

// var_dump($application);
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
			<th>Course_id</th>
			<th  style="text-align: center;">Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($application as $applications) { ?>
		<tr>
			<td><?= $applications['id']?> </td>
			<td><?= $applications['course_name']?></td>
			<td>
                    <form method="post" action="removecourse.php" style="text-align: center;">
                        <input type="hidden" name="id" value="<?php echo $applications['id']; ?>">
                        <button type="submit" >Remove</button>
                    </form>
            </td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
</body>
</html>