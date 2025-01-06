<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\StudentsCoursesModel;
use App\Models\CoursesModel;

class PendaftaranController extends BaseController
{
    // Method to display the course registration page
    public function index()
    {
        $coursesModel = new CoursesModel(); // Initialize the CoursesModel to interact with the courses table
        $courses = $coursesModel->findAll(); // Fetch all available courses

        // Return the 'pendaftaran_mata_kuliah' view and pass the list of courses
        return view('pendaftaran_mata_kuliah', ['courses' => $courses]);
    }

    // Method to register a student for a course
    public function pilih()
    {
        $studentsCoursesModel = new StudentsCoursesModel(); // Initialize the StudentsCoursesModel to interact with the registration table

        // Get the student ID from the session
        $studentId = session()->get('id');
        if (!$studentId) {
            return redirect()->back()->with('error', 'Anda belum login'); // Redirect back if student is not logged in
        }

        // Get the course ID and semester from the form input
        $courseId = $this->request->getPost('course_id');
        $semester = $this->request->getPost('semester');

        // Validate the input data
        if (!$courseId || !$semester) {
            return redirect()->back()->with('error', 'Data tidak valid'); // Redirect if data is invalid
        }

        // Check if the student has already registered for the course
        $exists = $studentsCoursesModel->where('student_id', $studentId)
            ->where('course_id', $courseId)
            ->first();

        if ($exists) {
            return redirect()->back()->with('error', 'Mata kuliah sudah dipilih'); // Redirect if the course is already selected
        }

        // Prepare the data to insert into the students_courses table
        $data = [
            'student_id' => $studentId,
            'course_id' => $courseId,
            'semester' => $semester,
        ];

        // Insert the registration data into the database
        if ($studentsCoursesModel->insert($data)) {
            return redirect()->back()->with('success', 'Mata kuliah berhasil dipilih'); // Success message if course is successfully registered
        } else {
            return redirect()->back()->with('error', 'Gagal memilih mata kuliah'); // Error message if the registration fails
        }
    }

    // Method to cancel a student's course registration
    public function batal()
    {
        $studentsCoursesModel = new StudentsCoursesModel(); // Initialize the StudentsCoursesModel

        // Get the student ID from the session
        $studentId = session()->get('id');
        if (!$studentId) {
            return redirect()->back()->with('error', 'Anda belum login'); // Redirect if student is not logged in
        }

        // Get the course ID from the form input
        $courseId = $this->request->getPost('course_id');

        // Validate the input data
        if (!$courseId) {
            return redirect()->back()->with('error', 'Data tidak valid'); // Redirect if course ID is not valid
        }

        // Delete the course registration for the student
        $studentsCoursesModel->where('student_id', $studentId)
            ->where('course_id', $courseId)
            ->delete();

        // Return a success message after successful cancellation
        return redirect()->back()->with('success', 'Mata kuliah berhasil dibatalkan');
    }
}
