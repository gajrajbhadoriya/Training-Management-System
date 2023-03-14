<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController
{
    private $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function add($name, $address, $gender, $standard, $roll, $password)
    {
        return $this->student->addStudent($name, $address, $gender, $standard, $roll, $password);
    }

    public function index()
    {
        return $this->student->getStudent();
    }

    public function delete($id)
    {
        return $this->student->delete($id);
    }

    public function update($id, $name, $address, $gender, $standard, $roll)
    {
        return $this->student->update($id, $name, $address, $gender, $standard, $roll);
    }

    public function appliedCource($student_id, $course_id)
    {
        return $this->student->createApplication($student_id, $course_id);
    }

    public function edit()
    {
        return $this->student->edit();
    }

    public function indexApplication()
    {
        return $this->student->getApplication();
    }
}
