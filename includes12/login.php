<?php
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection credentials
    $host = 'localhost';
    $dbUsername = 'admin';
    $dbPassword = 'Spectrum0!';
    $dbName = 'libraryDB';

    // Create a database connection
    $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

    if (!$connection) {
        die("Database connection failed");
    }

    // Validate and sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($connection, $username);

    // Query to fetch user data from the database
    $query = "SELECT password FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED: ' . mysqli_error($connection));
    }

    // Check if the user exists in the database
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $storedPassword = $user['password'];

        // Verify the password using password_verify()
        if (password_verify($password, $storedPassword)) {
            // Password matches, user is authenticated
            // Redirect to a protected page (e.g., users.php) or display a success message
            echo "User successfully signed in!";
        } else {
            // Password does not match
            echo "Incorrect password.";
        }
    } else {
        // User not found in the database
        echo "User not found.";
    }

    // Close the connection
    mysqli_close($connection);
}
