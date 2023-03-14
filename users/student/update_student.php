<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\StudentController;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student Record</title>
</head>
<body>

<h1>Update Student Record</h1>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $student = new StudentController();
    $result = $student->edit();
    $row = $result->fetchall();
}
?>
    <form method="post" action="update_student.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="male" <?php if($row['gender'] == 'male') echo 'checked'; ?>>Male
        <input type="radio" name="gender" value="female" <?php if($row['gender'] == 'female') echo 'checked'; ?>>Female<br>
        <label>Standard:</label>
        <select name="standard">
            <option value="1" <?php if($row['standard'] == '1') echo 'selected'; ?>>1</option>
            <option value="2" <?php if($row['standard'] == '2') echo 'selected'; ?>>2</option>
            <option value="3" <?php if($row['standard'] == '3') echo 'selected'; ?>>3</option>
            <option value="4" <?php if($row['standard'] == '4') echo 'selected'; ?>>4</option>
            <option value="5" <?php if($row['standard'] == '5') echo 'selected'; ?>>5</option>
        </select><br>
        <label>Roll:</label>
        <input type="text" name="roll" value="<?php echo $row['roll']; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>