

<?php
session_start(); // Start the session

if (isset($_POST['add_to_cart']) && isset($_POST['book_id'])) {
    $book_id = $_POST['book_id'];

    // Retrieve book details from the database based on book_id
    // ... your database connection code ...
    $sql = "SELECT * FROM books WHERE book_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$book_id]);
    $book = $stmt->fetch();

    if ($book) {
        // If cart doesn't exist in the session, create an empty cart
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Add the selected book to the cart
        $_SESSION['cart'][] = $book;

        // Optional: You can display a message to indicate successful addition to cart
        $_SESSION['cart_message'] = "Book added to cart!";
    } else {
        $_SESSION['cart_message'] = "Book not found!";
    }
}

// Redirect back to bookspage.php or wherever you want to go
header("Location: bookspage.php");
?>

