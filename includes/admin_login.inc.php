<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Include your database connection and other necessary files here
    require_once './includes/dbh.inc.php';
    require_once './includes/signup_model.inc.php'; // Include necessary functions for checking login


    function admin_login($pdo, $username, $password)
    {
        // Hash the provided password using the same hashing algorithm used during admin registration
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Replace 'admin_users' with the actual name of your admin table
        $sql = "SELECT password FROM admin_users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && password_verify($password, $row['password'])) {
            return true;
        }
        return false;
    }

    function get_admin_id($pdo, $username)
    {
        // Replace 'admin_users' with the actual name of your admin table
        $sql = "SELECT id FROM admin_users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return $row['id'];
        }
        return null;
    }


    // Check if admin credentials are correct
    if (admin_login($pdo, $username, $password)) {
        session_start();
        $_SESSION['adminId'] = get_admin_id($pdo, $username); // Assuming you have a function to get admin's ID

        header("Location: mainAdmin.php"); // Redirect to admin page
        exit();
    } else {
        header("Location: ../admin_login.php?error=invalidlogin"); // Redirect with an error message
        exit();
    }
} else {
    header("Location: ../admin_login.php"); // Redirect if not a POST request
    exit();
}
