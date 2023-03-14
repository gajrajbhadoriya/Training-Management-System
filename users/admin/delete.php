<?php

include dirname(__DIR__, 1) . '/includes/header.php';

use App\Controllers\AdminController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $students = new AdminController();

    $id = $_POST['id'];
    $students->delete($id);
    header('Location: read.php');
    exit;
}