<?php
include_once './dbh.inc.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $author = $_POST["author"];
    $bookName = $_POST["bookName"];
    $description = $_POST["description"];
    $category = $_POST["category"];

    // Upload image
    $targetDir = "../img/books/"; // Adjust the directory path as needed
    $targetFile = $targetDir . basename($_FILES["bookImage"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $validImageTypes = array("jpg", "jpeg", "png", "gif");
    if (in_array($imageFileType, $validImageTypes)) {
        if (move_uploaded_file($_FILES["bookImage"]["tmp_name"], $targetFile)) {
            // Insert data into the books table
            $sql = "INSERT INTO books (title, available, image_url, description, author, category, upload_date) 
                    VALUES (?, ?, ?, ?, ?, ?, NOW())";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$bookName, 1, $targetFile, $description, $author, $category]);

            header("Location: ../upload_success.php");
            exit();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Invalid image format. Please upload a JPG, JPEG, PNG, or GIF file.";
    }
}
