<?php

/**
 * Routes Configuration for the Application
 *
 * This file defines all the routes that link URLs to controllers and methods.
 * It is used by CodeIgniter to map incoming requests to appropriate actions
 * in the application. All routes should be registered here.
 *
 * The base routes like login, signup, and logout are grouped separately.
 * Routes for student-related functionalities such as course registration,
 * IP management, and course editing are also grouped for better organization.
 *
 * Each group of routes is organized according to its functionality to
 * make the application's routing structure easy to maintain.
 *
 * Make sure to add new routes here for any new functionalities or pages
 * that need to be accessed by users.
 **/

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Base route for the homepage, maps to Home::index method
$routes->get('/', 'Home::index');

// Authentication routes
$routes->get('/login', 'Auth::loginView');      // Display login form
$routes->post('/login', 'Auth::login');         // Process login form
$routes->get('/signup', 'Auth::signupView');    // Display signup form
$routes->post('/signup', 'Auth::signup');       // Process signup form
$routes->get('/logout', 'Auth::logout');        // Logout user

// Routes for student-related actions
$routes->group('mahasiswa', function ($routes) {
    $routes->get('mata-kuliah', 'Mahasiswa\PendaftaranController::index');          // Show available courses for registration
    $routes->post('mata-kuliah/pilih', 'Mahasiswa\PendaftaranController::pilih');   // Process course selection
    $routes->post('mata-kuliah/batal', 'Mahasiswa\PendaftaranController::batal');   // Cancel course registration
    $routes->get('ip-generator', 'Mahasiswa\IPController::generatorView');          // Display IP generator form
    $routes->post('ip-generator/generate', 'Mahasiswa\IPController::generateIP');   // Generate IP based on the selected criteria
    $routes->get('courses', 'Mahasiswa\EditCourseController::index');               // Display list of courses registered by the student
    $routes->post('courses', 'Mahasiswa\EditCourseController::create');             // Add a new course for the student
    $routes->delete('courses/(:num)', 'Mahasiswa\EditCourseController::delete/$1'); // Delete a course by its ID
});

// Route for student dashboard
$routes->get('/dashboard/mahasiswa', 'Dashboard::mahasiswa');   // Display student dashboard