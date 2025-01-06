<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
    // 1. The name of the table in the database
    protected $table = 'courses';

    // 2. The primary key for the table
    protected $primaryKey = 'id';

    // 3. Define the fields that are allowed to be inserted or updated in the database
    protected $allowedFields = ['course_name', 'day', 'start_time', 'duration', 'credits', 'semester'];
}