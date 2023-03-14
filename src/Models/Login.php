<?php

namespace App\Models;

use PDO;

class login
{
    private $db;

    public function __construct()
    {
        $this->db = new DBTransaction();
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM admin WHERE email = :email AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function studentLogin($email, $password)
    {
        $sql = "SELECT * FROM student WHERE email = :email AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $users = $stmt->fetch(PDO::FETCH_ASSOC);
        return $users;
        // var_dump($users);
    }
}