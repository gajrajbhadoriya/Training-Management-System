<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\StudentController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseId = $_POST['course_id'];
    $studentId = session_id();
    $student = new StudentController();
    $student->appliedCource($studentId, $courseId);

    header('Location: mycourse.php');
}
