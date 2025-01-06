<?php

namespace App\Controllers;

session()->start(); // Ensure the session is started before using session-related features.

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    // 1. Show login page
    public function loginView()
    {
        // Return the login view (HTML form for login)
        return view('auth/login');
    }

    // 2. Handle user login
    public function login()
    {
        $model = new UserModel(); // Initialize the UserModel to interact with the users table
        $username = $this->request->getPost('username'); // Retrieve the username from POST request
        $password = $this->request->getPost('password'); // Retrieve the password from POST request
    
        // Retrieve user from the database using the provided username
        $user = $model->where('username', $username)->first(); // Fetch the first user that matches the username
    
        if ($user) { // If user is found
            // Check if the password matches the hashed password stored in the database
            if (password_verify($password, $user['password'])) {
                // If password matches, set session variables (username, role, id)
                session()->set(['username' => $user['username'], 'role' => $user['role'], 'id' => $user['id']]);
    
                // Redirect the user to a dashboard based on their role
                switch ($user['role']) {
                    case 'student':
                        return redirect()->to('/dashboard/mahasiswa'); // Redirect student to their dashboard
                    case 'admin':
                        return redirect()->to('/dashboard/admin'); // Redirect admin to their dashboard
                    case 'teacher':
                        return redirect()->to('/dashboard/teacher'); // Redirect teacher to their dashboard
                    default:
                        // If the role is not recognized, redirect back to login with an error
                        return redirect()->to('/login')->with('error', 'Invalid role');
                }
            } else {
                // If the password is incorrect, redirect back with an error message
                return redirect()->back()->with('error', 'Invalid password');
            }
        } else {
            // If the user is not found, redirect back with an error message
            return redirect()->back()->with('error', 'User not found');
        }
    }

    // 3. Show signup page
    public function signupView()
    {
        // Return the signup view (HTML form for user registration)
        return view('auth/signup');
    }

    // 4. Handle user signup
    public function signup()
    {
        $model = new UserModel(); // Initialize the UserModel to interact with the users table

        // Retrieve the user data from the POST request
        $data = [
            'id' => $this->request->getPost('id'), // Retrieve user ID
            'username' => $this->request->getPost('username'), // Retrieve username
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT), // Hash the password
            'role' => $this->request->getPost('role') // Retrieve user role (student, admin, or teacher)
        ];

        // Save the new user data in the database
        if ($model->save($data)) {
            // If user is successfully created, redirect to the login page with success message
            return redirect()->to('/login')->with('success', 'Account created successfully. Please log in.');
        } else {
            // If user creation fails, redirect back with an error message
            return redirect()->back()->with('error', 'Failed to create account.');
        }
    }

    // 5. Handle user logout
    public function logout()
    {
        // Destroy the session to log the user out
        session()->destroy();

        // Redirect the user to the login page
        return redirect()->to('/login');
    }
}