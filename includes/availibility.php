<?php
include_once './includes/dbh.inc.php';

$bookId = $_GET['book_id']; // Assuming you are passing the book_id through GET request
$sql = "SELECT available FROM books WHERE book_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$bookId]);
$availability = $stmt->fetchColumn();

echo json_encode(['availabilityValue' => $availabilityValue]);
