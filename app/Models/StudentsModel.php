<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    // 1. The name of the table associated with this model
    protected $table = 'students';
    
    // 2. The primary key for the 'students' table
    protected $primaryKey = 'no';
    
    // 3. List of fields that are allowed to be inserted or updated in the 'students' table
    protected $allowedFields = [
        'id', 
        'nama', 
        'semester', 
        'nim', 
        'ip_sem1', 
        'ip_sem2', 
        'ip_sem3', 
        'ip_sem4', 
        'ip_sem5', 
        'ip_sem6', 
        'ip_sem7', 
        'ip_sem8'
    ];
}