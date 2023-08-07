<?php

include_once "./includes/fetch_profiles.php";



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
                        <a href="#details" class="nav-link text-dark text-uppercase">find a book</a>
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
    <section id="user_profile">
        <div class="wrapper">
            <!-- Sidebar -->
            <?php include "./includes/sidebar.php"; ?>
            <!-- Main Component -->
            <div class="main">
                <nav class="navbar navbar-expand px-3 border-bottom">
                    <!-- Button for sidebar toggle -->
                    <button class="btn" type="button" data-bs-theme="dark">
                        <span class="navbar-toggler-icon bg-primary rounded"></span>
                    </button>
                </nav>
                <main class="content px-3 py-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="top_profiles d-flex justify-content-between mt-3">
                                    <h4>My Profile</h4>
                                    <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Edit Profile
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Your Profile</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post">
                                                        <label for="newPassword">New Password:</label>
                                                        <input type="password" id="newPassword" name="newPassword" required>

                                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr />
                            </div>
                            <table class="table">
                                <thead>
                                    <tr class="fs-5 text_profile table_back">
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Action</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($userProfiles as $profile) : ?>
                                        <tr>
                                            <td><?php echo $profile['id']; ?></td>
                                            <td><?php echo $profile['name']; ?></td>
                                            <td><?php echo $profile['surname']; ?></td>
                                            <td><?php echo $profile['email']; ?></td>
                                            <td><?php echo $profile['address']; ?></td>
                                            <td><?php echo $profile['gender']; ?></td>
                                            <td><?php echo $profile['country']; ?></td>
                                            <td><?php echo $profile['phone']; ?></td>
                                            <td><a href="edit_profile.php?id=<?php echo $profile['id']; ?>" class="btn btn-primary">Edit</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <div class="top_profiles d-flex justify-content-between mt-3">
                                    <h4>User Book Request</h4>

                                </div>
                                <hr />
                            </div>
                            <div class="row ms-3">

                                <ul>
                                    <?php
                                    // Fetch and display the submitted messages
                                    $sql = "SELECT * FROM submitted_messages";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute();
                                    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($messages as $message) {
                                        echo "<li>Name: {$message['name']} - Email: {$message['email']} - Phone: {$message['phone']}</li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <div class="top_profiles d-flex justify-content-between mt-3">
                                    <h4>Books</h4>

                                </div>
                                <hr />
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                        <tr class="fs-5 text_profile table_back">
                                            <th scope="col">Book Cover</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Upload Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Fetch all book data from the books table
                                        $sql = "SELECT * FROM books";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($books as $book) : ?>
                                            <tr>
                                                <td><img src="./img/books/<?php echo basename($book['image_url']); ?>" alt="Book Image" width="100"></td>

                                                <td><?php echo $book['title']; ?></td>
                                                <td><?php echo $book['author']; ?></td>
                                                <td><?php echo $book['description']; ?></td>
                                                <td><?php echo $book['category']; ?></td>
                                                <td><?php echo $book['upload_date']; ?></td>
                                                <td><a href="edit_book.php?id=<?php echo $book['book_id']; ?>" class="btn btn-primary">Edit</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>




    </section>



    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>

</body>

</html>