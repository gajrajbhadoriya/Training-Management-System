<?php

namespace App\Models;

use PDO;

class Admin
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DBTransaction();
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM admin WHERE email = :email AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function addAdmin($name, $email, $gender, $number, $password)
    {
        $stmt = $this->pdo->prepare("INSERT INTO admin (name, email, gender, number, password) VALUES (:name, :email, :gender, :number, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':password', $password);

        return $stmt->execute();
    }

    public function getAdmin()
    {
        $stmt = $this->pdo->query("SELECT * FROM admin");
        $admin = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $admin;
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM admin WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
