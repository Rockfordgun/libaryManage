<?php
include_once '../includes/dbh.inc.php';



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["inputName"];
    $email = $_POST["inputEmail"];
    $phone = $_POST["inputPhone"];

    // Insert the form data into the database
    $sql = "INSERT INTO submitted_messages (name, email, phone) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $phone]);

    // After processing, redirect back to mainAdmin.php
    header("Location: mainAdmin.php");
    exit(); // Make sure to exit after redirecting
}
