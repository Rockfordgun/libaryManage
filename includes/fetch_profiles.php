<?php
include_once './includes/dbh.inc.php'; // Include your database connection

// Fetch all user profiles
$sql = "SELECT * FROM user_profiles";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$userProfiles = $stmt->fetchAll(PDO::FETCH_ASSOC);
