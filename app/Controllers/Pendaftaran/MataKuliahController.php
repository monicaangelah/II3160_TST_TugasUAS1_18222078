<?php

namespace App\Controllers\Pendaftaran;

use App\Controllers\BaseController;
use App\Models\CoursesModel;
use App\Models\StudentsCoursesModel;

class MataKuliahController extends BaseController
{
    // 1. View list of available courses
    public function index()
    {
        $model = new CoursesModel(); // Initialize the CoursesModel to interact with the courses table
        $data = $model->findAll(); // Retrieve all courses from the database

        // Return the courses data in JSON format
        return $this->response->setJSON($data);
    }

    // 2. Register a student for a course
    public function tambah()
    {
        // Get student ID, course ID, and semester from the incoming POST request
        $studentId = $this->request->getPost('student_id');
        $courseId = $this->request->getPost('course_id');
        $semester = $this->request->getPost('semester');
    
        // Validate that all required fields are provided
        if (!$studentId || !$courseId || !$semester) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'All fields are required'
            ])->setStatusCode(400); // Return error response with a 400 status code
        }
    
        // Initialize the StudentsCoursesModel to manage course registrations
        $model = new StudentsCoursesModel();
        $model->insert([ // Insert the student's course registration into the database
            'student_id' => $studentId,
            'course_id' => $courseId,
            'semester' => $semester,
        ]);
    
        // Return a success message in JSON format
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Course successfully registered'
        ]);
    }    

    // 3. Remove a course from a student's registration list
    public function hapus($id)
    {
        // Initialize the StudentsCoursesModel to manage course registrations
        $enrollmentModel = new StudentsCoursesModel(); 
        $data = $enrollmentModel->find($id); // Retrieve the enrollment data by ID
    
        // Check if the enrollment data exists
        if (!$data) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Data not found'
            ])->setStatusCode(404); // Return error response with a 404 status code
        }
    
        // Delete the course registration
        $enrollmentModel->delete($id);
    
        // Return a success message after successful deletion
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Course successfully removed'
        ]);
    }
}
