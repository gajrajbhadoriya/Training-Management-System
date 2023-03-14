<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\StudentController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $students = new StudentController();

    $id = $_POST['id'];
    $students->delete($id);
    
    header('Location: read_student.php');
    exit;
}