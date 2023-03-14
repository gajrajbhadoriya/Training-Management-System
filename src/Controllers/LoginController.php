<?php

namespace App\Controllers;

use App\Models\login;

class LoginController
{
    private $user;
    private $db;

    public function __construct()
    {
        $this->user = new login($this->db); 
    }

    public function login()
    {   
        $message = '';
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->user->login($email, $password);
            if ($user['password'] === $password or $user['email'] === $email) {
                header('Location: index.php');
            } else {
                $message = "please check your email or password";
                echo $message;
            }
        }
    }

    public function studentLogin()
    {   
        $message = '';
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $users = $this->user->studentLogin($email, $password);
            if ($users['password'] === $password or $users['email'] === $email) {
                header('Location: indexx.php');
            } else {
                $message = "please check your email or password";
                echo $message;
            }
        }
    }
}
