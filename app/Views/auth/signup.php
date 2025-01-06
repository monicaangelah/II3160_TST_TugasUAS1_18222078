<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page title for the sign-up page -->
    <title>Sign Up</title>
    
    <!-- Including Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Main container for the sign-up form -->
    <div class="container mt-5">
        <!-- Heading for the page -->
        <h2>Sign Up</h2>
        
        <!-- Form that sends POST data to the /signup endpoint -->
        <form method="POST" action="/signup">
            <!-- ID Field -->
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" class="form-control" required>
            </div>
            
            <!-- Username Field -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            
            <!-- Password Field -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            
            <!-- Role Selection Dropdown -->
            <br>
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="student">Mahasiswa</option>
                <option value="admin">Admin</option>
                <option value="teacher">Dosen</option>
            </select>
            <br>
            
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
        
        <!-- Link to the login page if the user already has an account -->
        <p class="mt-3">Already have an account? <a href="/login">Log In</a></p>
    </div>
</body>
</html>