<?php

namespace App\Controllers;

class Home extends BaseController
{
    // 1. Index method that redirects users to the login page
    public function index()
    {
        // Redirect the user to the login page
        return redirect()->to('/login'); // Mengarahkan ke halaman login
    }
}