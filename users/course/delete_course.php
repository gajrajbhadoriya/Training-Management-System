<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\CourseController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course = new CourseController();

    $id = $_POST['id'];
    $course->delete($id);
    header('Location: read_course.php');
    exit;
}