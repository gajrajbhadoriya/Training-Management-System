<?php

namespace App\Models;

use PDO;

class Course
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new DBTransaction();
    }

    public function addCourse($courseName, $courseDescription, $courseCode, $courseCredit, $courseInstructor, $startDate, $endDate)
    {
        $stmt = $this->pdo->prepare("INSERT INTO course (course_name, course_description, course_code, 	course_credit, course_instructor, start_date, end_date) VALUES (:course_name, :course_description, :course_code, :course_credit, :course_instructor, :start_date, :end_date)");
        $stmt->bindParam(':course_name', $courseName);
        $stmt->bindParam(':course_description', $courseDescription);
        $stmt->bindParam(':course_code', $courseCode);
        $stmt->bindParam(':course_credit', $courseCredit);
        $stmt->bindParam(':course_instructor', $courseInstructor);
        $stmt->bindParam(':start_date', $startDate);
        $stmt->bindParam(':end_date', $endDate);

        return $stmt->execute();
    }

    public function getCourse()
    {
        $stmt = $this->pdo->query("SELECT * FROM course");
        $course = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $course;
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM course WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
