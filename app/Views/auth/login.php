<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for character set and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page title for the login page -->
    <title>Login</title>
    
    <!-- Including Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Main container for the login form -->
    <div class="container mt-5">
        <!-- Heading for the page -->
        <h2>Login</h2>
        
        <!-- Form that sends POST data to the /login endpoint -->
        <form method="POST" action="/login">
            <div class="form-group">
                <!-- Label and input field for username -->
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            
            <div class="form-group">
                <!-- Label and input field for password -->
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            
            <!-- Submit button to submit the form -->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
        <!-- Link to the signup page if the user doesn't have an account -->
        <p class="mt-3">Don't have an account? <a href="/signup">Sign Up</a></p>
    </div>
</body>
</html>