<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // 1. The name of the table associated with this model
    protected $table = 'users';
    
    // 2. The primary key for the 'users' table
    protected $primaryKey = 'no';
    
    // 3. List of fields that are allowed to be inserted or updated in the 'users' table
    protected $allowedFields = ['id', 'username', 'password', 'role'];
}