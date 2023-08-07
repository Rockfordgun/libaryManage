<?php
if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'admin', 'Spectrum0!', 'libraryDB');

    if ($connection) {
        echo "We are connected to the Register Section";

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query FAILED: ' . mysqli_error($connection));
        } else {
            echo "User registered successfully!";
        }
    } else {
        die("Database connection failed");
    }
}
