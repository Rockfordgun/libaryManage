<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once './dbh.inc.php';



        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = $pdo->prepare($sql);

        if (!$stmt) {
            header("Location: ../login.php?error=sqlerror");
            die();
        }

        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $pwdCheck = password_verify($password, $user['password']);

            if ($pwdCheck == false) {
                session_start();
                $_SESSION['userId'] = $user['id'];
                $_SESSION['userUid'] = $user['username'];

                header("Location: ../user.php");
                die();
            } else {
                header("Location: ../login.php?error=wrongpassword");
                die();
            }
        } else {
            header("Location: ../login.php?error=nouser");
            die();
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
    die();
}
