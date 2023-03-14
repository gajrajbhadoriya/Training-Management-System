<?php

namespace App\Models;

use PDO;

class Student
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DBTransaction();
    }

    public function addStudent($title, $address, $gender, $standard, $roll, $password)
    {
        $stmt = $this->pdo->prepare("INSERT INTO student (name, address, gender, standard, roll, password) VALUES (:name, :address, :gender, :standard, :roll, :password)");
        $stmt->bindParam(':name', $title);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':standard', $standard);
        $stmt->bindParam(':roll', $roll);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    public function getStudent()
    {
        $stmt = $this->pdo->query("SELECT * FROM student");
        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $students;
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM student WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function edit()
    {
        $query = "SELECT * FROM student WHERE ID=:id LIMIT 1";
        $statement = $this->pdo->prepare($query);
        $data = [':id => $student_id '];
        $statement->execute($data);

        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function update($id, $name, $address, $gender, $standard, $roll)
    {
        $stmt = $this->pdo->prepare("UPDATE student SET name = :name, address = :address, gender = :gender, standard = :standard, roll = :roll WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':standard', $standard);
        $stmt->bindParam(':roll', $roll);

        return $stmt->execute();
    }

    public function createApplication($student_id, $course_id)
    {
        $stmt = $this->pdo->prepare('INSERT INTO course_applications (student_id, course_id, created_at) VALUES (:student_id, :course_id)');
        $stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
        $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getApplication()
    {
        $stmt = $this->pdo->prepare('SELECT a.id, a.course_name, b.created_at
            FROM course a, course_applications b WHERE a.id = b.course_id');
        $application = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $application;
             
    }
}
