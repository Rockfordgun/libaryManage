<?php
include_once './includes/dbh.inc.php'; // Include your database connection

$category = 'Fiction'; // Replace with the actual category
$sql = "SELECT * FROM books WHERE category = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$category]);
$books = $stmt->fetchAll();
