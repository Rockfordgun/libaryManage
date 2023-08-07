<?php
// Include database connection
require_once 'includes/dbh.inc.php';

// Get book ID from query parameter
if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    // Prepare and execute SQL query
    $sql = "SELECT * FROM books WHERE book_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$bookId]);

    // Fetch book details
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    // Handle case when no ID is provided
    // For example, redirect to a book list page
    header("Location: books.php");
    exit();
}
