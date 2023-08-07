<?php
session_start();
// Include your database connection
require_once './dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $adress = $_POST["user-adress"];

    // Insert into user_profiles table
    $sql = "INSERT INTO user_profiles (user_id, name, surname, email, gender, country, phone, address) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['userId'], $name, $surname, $email, $gender, $country, $phone, $adress]);

    // Redirect after successful insert
    header("Location: profile.php?success=1");
    exit();
} else {
    // Handle form submission error
    header("Location: profile.php?error=1");
    exit();
}
