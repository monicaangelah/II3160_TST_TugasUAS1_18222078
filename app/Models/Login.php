<?php
namespace App\Models;
use CodeIgniter\Model;

class Login extends Model
{
    // 1. Function to check if a user exists with matching username and password
    public function getDataUsers($username, $password)
    {
        // 2. Connect to the database using CodeIgniter's database configuration
        $db = \Config\Database::connect();

        // 3. Define the SQL query to retrieve the user's name based on username and password
        $queryString = 'SELECT name FROM user WHERE 
                        username = "'.$username.'" 
                        AND password = "'.$password.'"';

        // 4. Execute the query on the database
        $query = $db->query($queryString);

        // 5. Get the result of the query
        $results = $query->getResult();

        // 6. Return the count of matching results (if count > 0, user exists)
        return count($results);
    }
}