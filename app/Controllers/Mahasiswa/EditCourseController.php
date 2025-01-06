<?php

namespace App\Controllers\Mahasiswa;

use App\Models\CoursesModel;
use CodeIgniter\Controller;

class EditCourseController extends Controller
{
    // Method to display the list of all courses
    public function index()
    {
        $model = new CoursesModel(); // Initialize the CoursesModel to interact with the courses table
        
        // Fetch all courses from the database using the model's findAll method
        $data['courses'] = $model->findAll();

        // Return the 'courses/index' view with the data (list of courses)
        return view('courses/index', $data);
    }

    // Method to create a new course
    public function create()
    {
        $model = new CoursesModel(); // Initialize the CoursesModel

        // Get the number of credits from the form submission
        $credits = $this->request->getPost('credits');
        
        // Calculate the course duration based on credits (1 credit = 50 minutes)
        $duration = $credits * 50;

        // Prepare the data array to be saved in the database
        $data = [
            'course_name' => $this->request->getPost('course_name'), // Get the course name
            'credits' => $credits, // Get the number of credits
            'semester' => $this->request->getPost('semester'), // Get the semester
            'day' => $this->request->getPost('day'), // Get the day of the week
            'start_time' => $this->request->getPost('start_time'), // Get the course start time
            'duration' => $duration, // Set the calculated course duration
        ];

        // Save the new course data in the database
        $model->save($data);

        // Redirect to the courses page after saving
        return redirect()->to('/mahasiswa/courses');
    }

    // Method to delete a course by its ID
    public function delete($id)
    {
        $model = new CoursesModel(); // Initialize the CoursesModel
        
        // Delete the course from the database based on the provided ID
        $model->delete($id);

        // Redirect to the courses page after deleting the course
        return redirect()->to('/mahasiswa/courses');
    }
}