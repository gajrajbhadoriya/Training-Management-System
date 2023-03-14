<?php

include 'users/includes/header.php';

use App\Controllers\LoginController;

$userController = new LoginController();

$message = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $userController->login($email, $password);
    $users = $userController->studentLogin($email, $password);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <style>
      body {
        background-color: #f2f2f2;
      }

      form {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        width: 300px;
        margin: 0 auto;
        margin-top: 100px;
        border-radius: 5px;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <div id="admin-form" style="display:none">
      <form method="POST">
        <h2>Admin Login</h2>
        <label for="username">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter Email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password">

        <button type="submit" name="submit">Login</button>
      </form>
    </div>

    <div id="student-form" style="display:none">
      <form method="POST">
        <h2>Student Login</h2>
        <label for="username">Email</label>
        <input type="text" id="username" name="email" placeholder="Enter username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password">

        <button type="submit" name="submit">Login</button>
      </form>
    </div>

    <script>
      function showAdminForm() {
        document.getElementById("admin-form").style.display = "block";
        document.getElementById("student-form").style.display = "none";
      }

      function showStudentForm() {
        document.getElementById("admin-form").style.display = "none";
        document.getElementById("student-form").style.display = "block";
      }
    </script>

    <div>
      <button onclick="showAdminForm()">Admin Login</button>
      <button onclick="showStudentForm()">Student Login</button>
    </div> 
  </body>
</html>