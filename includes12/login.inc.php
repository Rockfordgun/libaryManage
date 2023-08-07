<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // Assuming you have a password field named "password"

    try {
        require_once './dbh.inc.php'; // Your database connection

        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = $pdo->prepare($sql);

        if (!$stmt) {
            header("Location: ../index.php?error=sqlerror");
            die();
        }

        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $pwdCheck = password_verify($password, $user['password']);

            if ($pwdCheck == false) {
                session_start();
                $_SESSION['userId'] = $user['id']; // Assuming you have a column named "id" in your users table
                $_SESSION['userUid'] = $user['username'];

                header("Location: ../user.php");
                die();
            } else {
                header("Location: ../index.php?error=wrongpassword");
                die();
            }
        } else {
            header("Location: ../index.php?error=nouser");
            die();
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
