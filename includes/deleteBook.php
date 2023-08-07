<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $bookId = $_GET["id"];

    try {
        require_once 'C:\xampp\htdocs\libaryManage\includes\dbh.inc.php'; // Include your database connection code

        $sql = "DELETE FROM books WHERE book_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$bookId]);

        header("Location: books.php"); // Redirect to the book listing page
        exit();
    } catch (PDOException $e) {
        die("Error deleting book: " . $e->getMessage());
    }
} else {
    header("Location: index.php"); // Redirect to some default page if no ID is provided
    exit();
}
