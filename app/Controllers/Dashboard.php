<?php

namespace App\Controllers;

use App\Models\StudentsModel;

class Dashboard extends BaseController
{
    // 1. Dashboard for students
    public function mahasiswa()
    {
        // Retrieve session data (username and student ID)
        $session = session();
        $username = $session->get('username'); // Get the logged-in username from the session
        $id = $session->get('id'); // Get the logged-in student's ID from the session

        // Initialize the StudentsModel to interact with the students table
        $studentsModel = new StudentsModel();
        
        // Retrieve student data from the database using the student ID
        $student = $studentsModel->find($id);

        // Check if student data exists
        if (!$student) {
            // If the student doesn't exist, redirect to login page with an error message
            return redirect()->to('/login')->with('error', 'Mahasiswa tidak ditemukan');
        }

        // Prepare data to send to the view (dashboard)
        $data = [
            'nama' => $student['nama'], // Retrieve student's name from the database
            'nim' => $student['id'], // Retrieve student's ID (NIM) from the database
            'semester' => $student['semester'] // Retrieve student's current semester from the database
        ];

        // Return the dashboard view for the student and pass the data to it
        return view('dashboard/mahasiswa', $data);
    }
}