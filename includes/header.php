<?php

require_once './includes/config_session.inc.php';
require_once './includes/signup_view.inc.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Font Selection-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <!--STOP-->
    <link rel="stylesheet" href="./css/fontawesome.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style.css" />


    <title>Centurion Books</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark">

        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link text-dark text-uppercase">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../bookspage.php" class="nav-link text-dark text-uppercase">find a book</a>
                    </li>
                    <li class="nav-item">
                        <a href="#details" class="nav-link text-dark text-uppercase">gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#details" class="nav-link text-dark text-uppercase">contact us</a>
                    </li>
                </ul>
            </div>
            <div class="logo ms-auto">
                <img src="./img/logo.png" alt="" srcset="" />
            </div>
        </div>
    </nav>