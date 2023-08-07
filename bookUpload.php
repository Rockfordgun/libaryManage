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
                                    <h4>Upload Book</h4>

                                </div>
                                <hr />
                            </div>
                            <div class="row">
                                <form action="./includes/upload_book.php" class="form-control" method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control text-dark border-bottom" name="bookName" id="bookName" placeholder="Enter Book Title">
                                        </div>
                                        <div class="col">
                                            <select class="form-select text-secondary border-bottom" name="category" id="category">
                                                <option selected>Select A Book Category</option>
                                                <option>Fiction</option>
                                                <option>Arts & Craft</option>
                                                <option>Children</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <input type="text" class="form-control text-dark border-bottom" name="author" id="author" placeholder="Enter Author Name">
                                        </div>
                                        <div class="col">
                                            <label class="text-secondary" for="bookImage">Book Image:</label>
                                            <input type="file" name="bookImage" id="bookImage" accept="image/*" required>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col">

                                            <div class="form-outline">

                                                <div class="col-lg-12">
                                                    <textarea name="description" id="description" class="form-control text-dark border-bottom" cols="50" rows="3" placeholder="Enter The Book Description"></textarea>
                                                </div><!--end col 10-->
                                            </div>

                                        </div>

                                    </div>

                                    <button class="btn btn-primary text-white mt-4" type="submit">Submit</button>
                                </form>

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
                                                <td>
                                                    <a href="deleteBook.php?id=<?php echo $book['book_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
                                                </td>
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





    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>

</body>

</html>