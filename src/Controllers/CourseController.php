<?php

namespace App\Controllers;

use App\Models\Course;

class CourseController
{
    private $course;

    public function __construct()
    {
        $this->course = new Course();
    }

    public function add($courseName, $courseDescription, $courseCode, $courseCredit, $courseInstructor, $startDate, $endDate)
    {
        return $this->course->addCourse($courseName, $courseDescription, $courseCode, $courseCredit, $courseInstructor, $startDate, $endDate);
    }

    public function index()
    {
        return $this->course->getCourse();
    }

    public function delete($id)
    {
        return $this->course->delete($id);
    }
}