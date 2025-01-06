<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsCoursesModel extends Model
{
    // 1. The name of the table associated with this model
    protected $table = 'students_courses';
    
    // 2. The primary key for the 'students_courses' table
    protected $primaryKey = 'id';
    
    // 3. List of fields that are allowed to be inserted or updated in the 'students_courses' table
    protected $allowedFields = ['student_id', 'course_id', 'semester', 'grade'];
}