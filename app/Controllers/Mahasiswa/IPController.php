<?php
namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\CoursesModel;
use App\Models\StudentsCoursesModel;

class IPController extends BaseController
{
    // Method to display the IP generator view
    public function generatorView()
    {
        $coursesModel = new CoursesModel(); // Initialize the CoursesModel to interact with the courses table
        $studentId = session()->get('id'); // Retrieve the student ID from the session

        // Get the list of courses taken by the student by joining 'students_courses' and 'courses' tables
        $courses = $coursesModel->select('courses.id, courses.course_name, courses.credits')
                                ->join('students_courses', 'students_courses.course_id = courses.id')
                                ->where('students_courses.student_id', $studentId)
                                ->findAll(); // Fetch all courses for the student

        // Return the 'ip_generator' view and pass the list of courses taken by the student
        return view('mahasiswa/ip_generator', ['courses' => $courses]);
    }

    // Method to generate the IP (Indeks Prestasi) based on the student's grades
    public function generateIP()
    {
        // Get grades from the form input (assumes grades are submitted as an associative array)
        $grades = $this->request->getPost('grades');
        $totalCredits = 0; // Initialize the total credits counter
        $totalWeightedGrade = 0; // Initialize the weighted grade counter
    
        // Loop through each course and grade
        foreach ($grades as $courseId => $grade) {
            $course = (new CoursesModel())->find($courseId); // Fetch the course details by its ID
            if ($course) {
                $credits = $course['credits']; // Get the number of credits for the course
                $totalCredits += $credits; // Add credits to the total credits
                $totalWeightedGrade += $grade * $credits; // Add weighted grade to the total
            }
        }
    
        // Calculate the IP (GPA) by dividing the total weighted grade by the total credits
        $ip = $totalWeightedGrade / $totalCredits;
    
        // Return the 'ip_result' view and display the calculated IP (rounded to 2 decimal places)
        return view('mahasiswa/ip_result', ['ip' => number_format($ip, 2)]);
    }
}