<?php

include_once "./includes/header.php";
include_once "./includes/availibility.php";

include_once './includes/dbh.inc.php';
include_once './fetchCategoryBooks.php';



// Fetch all books
$sql = "SELECT * FROM books";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<section class="book_header">

</section>


<section class="new_books">
    <div class="newBookContainer mx-auto my-5">
        <div class="row">
            <h1 class="text-uppercase text-center">new <span class="text-primary">books</span></h1>
            <div class="col-sm-6 mb-3 mb-sm-0 ">
                <div class="card border-0">
                    <div class="card-body">
                        <h3 class="card-title ">Book Name</h3>
                        <div class="row ">
                            <div class="col img-fluid"><img src="./img/mediteranean.jpg" alt="" srcset=""></div>
                            <div class="col">
                                <h4 class="bg-warning py-3 text-white text-uppercase text-center fw-bold">buy this book</h4>
                                <h3 class="text-center">R365.00</h3>
                                <a name="" id="" class="btn btn-primary rounded-0 text-white fw-bold mb-2
                         text-uppercase " href="#" role="button">Add To Cart</a>


                                <h4 class="bg-warning py-3 text-white text-uppercase text-center fw-bold">rent the book</h4>

                                <div class="col d-flex justify-content-evenly">
                                    <?php if ($availability == 1) : ?>
                                        <div class="block1 w-50 bg-warning text-center text-uppercase py-3 fw-bold text-white">available</div>
                                        <div class="block2 w-50 bg-danger text-center text-uppercase py-3 fw-bold text-white opacity-25">not available</div>
                                    <?php else : ?>
                                        <div class="block1 w-50 bg-warning text-center text-uppercase py-3 fw-bold text-white opacity-25">available</div>
                                        <div class="block2 w-50 bg-danger text-center text-uppercase py-3 fw-bold text-white">not available</div>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <?php if ($availability == 1) : ?>
                                        <p>Great news! The book you've been eyeing is now available for rent. Don't miss out on the opportunity to dive into its captivating pages and immerse yourself in a world of adventure. Whether you're looking for inspiration, entertainment, or knowledge, this book is ready to accompany you on your journey. Rent it today and embark on a reading experience that's bound to enrich your mind and spark your imagination.</p>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary text-uppercase text-white fw-bold" type="button">rent this book now</button>
                                        </div>
                                    <?php else : ?>
                                        <p>Apologies, the book you're interested in is currently unavailable as it's being rented. Fill out the form below to join the waiting list. We'll notify you when it's ready for borrowing.</p>
                                        <input type="text" id="name" name="inputName" class="form-control text-secondary lh-1 border-bottom" placeholder="Enter Your Name" required>


                                        <input type="email" id="email" name="inputEmail" class="form-control text-secondary lh-1 border-bottom" placeholder="Enter Your Email" required>
                                        <input type="tel" id="phone" name="inputPhone" class="form-control text-secondary lh-1 border-bottom" placeholder="Enter Your Cell" required>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary text-uppercase text-white fw-bold" type="button">rent this book now</button>
                                        </div>

                                    <?php endif; ?>


                                </div>



                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Description</h4>
                                <p>5 Ingredients Mediterranean is everything people loved about the first book, but with the added va-va-voom of basing it on Jamie's lifelong travels around the Med.

                                    With over 125 utterly delicious, easy-to-follow recipes, it's all about making everyday cooking super-exciting, with minimal fuss - all while transporting you to sunnier climes.

                                    You'll find recipes to empower you to make incredibly delicious food, but without copious amounts of ingredients, long shopping lists or loads of washing up. 65% of the recipes are meat-free or meat-reduced, and all offer big, bold flavour. With chapters including Salads, Soups and Sarnies, Pasta, Veg, Pies and Parcels, Seafood, Fish, Chicken and Duck, Meat and Sweet Things, you'll find something for every day of the week, and every occasion.
                                </p>

                                <a href="http://">READ MORE</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h3 class="card-title ">Book Name</h3>
                        <div class="row ">
                            <div class="col img-fluid"><img src="./img/mediteranean.jpg" alt="" srcset=""></div>
                            <div class="col">
                                <h4 class="bg-warning py-3 text-white text-uppercase text-center fw-bold">buy this book</h4>
                                <h3 class="text-center">R365.00</h3>
                                <a name="" id="" class="btn btn-primary rounded-0 text-white fw-bold mb-2
                         text-uppercase " href="#" role="button">Add To Cart</a>


                                <h4 class="bg-warning py-3 text-white text-uppercase text-center fw-bold">rent the book</h4>

                                <div class="col d-flex justify-content-evenly">
                                    <?php if ($availability == 1) : ?>
                                        <div class="block1 w-50 bg-warning text-center text-uppercase py-3 fw-bold text-white">available</div>
                                        <div class="block2 w-50 bg-danger text-center text-uppercase py-3 fw-bold text-white opacity-25">not available</div>
                                    <?php else : ?>
                                        <div class="block1 w-50 bg-warning text-center text-uppercase py-3 fw-bold text-white opacity-25">available</div>
                                        <div class="block2 w-50 bg-danger text-center text-uppercase py-3 fw-bold text-white">not available</div>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <?php if ($availability == 1) : ?>
                                        <p>Great news! The book you've been eyeing is now available for rent. Don't miss out on the opportunity to dive into its captivating pages and immerse yourself in a world of adventure. Whether you're looking for inspiration, entertainment, or knowledge, this book is ready to accompany you on your journey. Rent it today and embark on a reading experience that's bound to enrich your mind and spark your imagination.</p>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary text-uppercase text-white fw-bold" type="button">rent this book now</button>
                                        </div>
                                    <?php else : ?>
                                        <p>Apologies, the book you're interested in is currently unavailable as it's being rented. Fill out the form below to join the waiting list. We'll notify you when it's ready for borrowing.</p>
                                        <input type="text" id="name" name="inputName" class="form-control text-secondary lh-1 border-bottom" placeholder="Enter Your Name" required>


                                        <input type="email" id="email" name="inputEmail" class="form-control text-secondary lh-1 border-bottom" placeholder="Enter Your Email" required>
                                        <input type="tel" id="phone" name="inputPhone" class="form-control text-secondary lh-1 border-bottom" placeholder="Enter Your Cell" required>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary text-uppercase text-white fw-bold" type="button">rent this book now</button>
                                        </div>

                                    <?php endif; ?>


                                </div>



                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Description</h4>
                                <p>5 Ingredients Mediterranean is everything people loved about the first book, but with the added va-va-voom of basing it on Jamie's lifelong travels around the Med.

                                    With over 125 utterly delicious, easy-to-follow recipes, it's all about making everyday cooking super-exciting, with minimal fuss - all while transporting you to sunnier climes.

                                    You'll find recipes to empower you to make incredibly delicious food, but without copious amounts of ingredients, long shopping lists or loads of washing up. 65% of the recipes are meat-free or meat-reduced, and all offer big, bold flavour. With chapters including Salads, Soups and Sarnies, Pasta, Veg, Pies and Parcels, Seafood, Fish, Chicken and Duck, Meat and Sweet Things, you'll find something for every day of the week, and every occasion.
                                </p>

                                <a href="http://">READ MORE</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="catgFiction">
    <div class="newBookContainer mx-auto my-5">
        <div class="row">
            <h1 class="text-uppercase text-center">Fiction <span class="text-primary">books</span></h1>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card border-0">
                    <div class="card-body ">
                        <div class="img-fluid text-center"><img src="./img/mediteranean.jpg" alt="" srcset=""></div>
                        <h4 class="bg-warning py-2 mx-4 my-2 text-white text-uppercase text-center fw-bold">buy this book</h4>
                        <p class="card-text mx-4 books_paragraph">A thriller that will have you on the edge of your seat from the first page to the last!

                            5 Ingredients Mediterranean is everything people loved about the first book, but with the added va-va-voom of basing it on Jamie's lifelong travels around the Med.

                            With over 125 utterly delicious, easy-to-follow recipes, it's all about making everyday cooking super-exciting, with minimal fuss - all while transporting you to sunnier climes.

                            You'll find recipes to empower you to make incredibly delicious food, but without copious amounts of ingredients, long shopping lists or loads of washing up. 65% of the recipes are meat-free or meat-reduced, and all offer big, bold flavour. With chapters including Salads, Soups and Sarnies, Pasta, Veg, Pies and Parcels, Seafood, Fish, Chicken and Duck, Meat and Sweet Things, you'll find something for every day of the week, and every occasion.
                        </p>

                        <a href="http://" class="ms-4">Read More</a>
                        <div class="d-flex mx-4">
                            <button type="button" class="block1 w-50 bg-warning text-center text-uppercase py-2 fw-bold text-white" id="buyButton">buy this book</button>

                            <div type="button" class="block2 w-50 bg-danger text-center text-uppercase py-2 fw-bold text-white" id="rentButton">rent the book</div>
                        </div>
                        <div>
                            <h4 class="ms-4 my-2 text-primary" id="availabilityText"></h4>

                            <div class="d-grid gap-2 mx-4" id="actionButtonContainer">
                                <button class="btn btn-primary text-uppercase text-white fw-bold rounded-0" type="button" id="actionButton">buy this book now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body ">
                        <div class="img-fluid text-center"><img src="./img/mediteranean.jpg" alt="" srcset=""></div>
                        <h4 class="bg-warning py-2 mx-4 my-2 text-white text-uppercase text-center fw-bold">buy this book</h4>
                        <p class="card-text mx-4 books_paragraph">A thriller that will have you on the edge of your seat from the first page to the last!

                            5 Ingredients Mediterranean is everything people loved about the first book, but with the added va-va-voom of basing it on Jamie's lifelong travels around the Med.

                            With over 125 utterly delicious, easy-to-follow recipes, it's all about making everyday cooking super-exciting, with minimal fuss - all while transporting you to sunnier climes.

                            You'll find recipes to empower you to make incredibly delicious food, but without copious amounts of ingredients, long shopping lists or loads of washing up. 65% of the recipes are meat-free or meat-reduced, and all offer big, bold flavour. With chapters including Salads, Soups and Sarnies, Pasta, Veg, Pies and Parcels, Seafood, Fish, Chicken and Duck, Meat and Sweet Things, you'll find something for every day of the week, and every occasion.
                        </p>

                        <a href="http://" class="ms-4">Read More</a>
                        <div class="d-flex mx-4">
                            <div class="block1 w-50 bg-danger text-center text-uppercase py-2 fw-bold text-white">buy this book</div>
                            <div class="block2 w-50 bg-warning text-center text-uppercase py-2 fw-bold text-white ">rent the book</div>
                        </div>
                        <div>
                            <h4 class="ms-4 my-2 text-primary">Available</h4>

                            <div class="d-grid gap-2 mx-4">
                                <button class="btn btn-primary text-uppercase text-white fw-bold rounded-0" type="button">rent this book now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card border-0">
                    <div class="card-body ">
                        <div class="img-fluid text-center"><img src="./img/mediteranean.jpg" alt="" srcset=""></div>
                        <h4 class="bg-warning py-2 mx-4 my-2 text-white text-uppercase text-center fw-bold">buy this book</h4>
                        <p class="card-text mx-4 books_paragraph">A thriller that will have you on the edge of your seat from the first page to the last!

                            5 Ingredients Mediterranean is everything people loved about the first book, but with the added va-va-voom of basing it on Jamie's lifelong travels around the Med.

                            With over 125 utterly delicious, easy-to-follow recipes, it's all about making everyday cooking super-exciting, with minimal fuss - all while transporting you to sunnier climes.

                            You'll find recipes to empower you to make incredibly delicious food, but without copious amounts of ingredients, long shopping lists or loads of washing up. 65% of the recipes are meat-free or meat-reduced, and all offer big, bold flavour. With chapters including Salads, Soups and Sarnies, Pasta, Veg, Pies and Parcels, Seafood, Fish, Chicken and Duck, Meat and Sweet Things, you'll find something for every day of the week, and every occasion.
                        </p>

                        <a href="http://" class="ms-4">Read More</a>
                        <div class="d-flex mx-4">
                            <div class="block1 w-50 bg-danger text-center text-uppercase py-2 fw-bold text-white">buy this book</div>
                            <div class="block2 w-50 bg-warning text-center text-uppercase py-2 fw-bold text-white ">rent the book</div>
                        </div>
                        <div>
                            <h4 class="ms-4 my-2 text-primary">Not Available</h4>

                            <div class="d-grid gap-2 mx-4">
                                <button class="btn btn-primary text-uppercase text-white fw-bold rounded-0" type="button">request this book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card-body border-0 ">
                    <div class="img-fluid text-center"><img src="./img/mediteranean.jpg" alt="" srcset=""></div>
                    <h4 class="bg-warning py-2 mx-4 my-2 text-white text-uppercase text-center fw-bold">buy this book</h4>
                    <p class="card-text mx-4 books_paragraph">A thriller that will have you on the edge of your seat from the first page to the last!

                        5 Ingredients Mediterranean is everything people loved about the first book, but with the added va-va-voom of basing it on Jamie's lifelong travels around the Med.

                        With over 125 utterly delicious, easy-to-follow recipes, it's all about making everyday cooking super-exciting, with minimal fuss - all while transporting you to sunnier climes.

                        You'll find recipes to empower you to make incredibly delicious food, but without copious amounts of ingredients, long shopping lists or loads of washing up. 65% of the recipes are meat-free or meat-reduced, and all offer big, bold flavour. With chapters including Salads, Soups and Sarnies, Pasta, Veg, Pies and Parcels, Seafood, Fish, Chicken and Duck, Meat and Sweet Things, you'll find something for every day of the week, and every occasion.
                    </p>

                    <a href="http://" class="ms-4">Read More</a>
                    <div class="d-flex mx-4">
                        <div class="block1 w-50 bg-danger text-center text-uppercase py-2 fw-bold text-white">buy this book</div>
                        <div class="block2 w-50 bg-warning text-center text-uppercase py-2 fw-bold text-white ">rent the book</div>
                    </div>
                    <div>
                        <h4 class="ms-4 my-2 text-primary">Not Available</h4>

                        <div class="d-grid gap-2 mx-4">
                            <button class="btn btn-primary text-uppercase text-white fw-bold rounded-0" type="button">request this book</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Include the fetchCategoryBooks.php script -->
<?php include_once './includes/fetchCategoryBooks.php'; ?>

<!-- Now you can use the $books array to display the fetched books -->
<section class="catg1Fiction">
    <div class="newBookContainer mx-auto my-5">
        <div class="row">
            <h1 class="text-uppercase text-center"><?php echo $category; ?> <span class="text-primary">books</span></h1>
            <?php foreach ($books as $book) : ?>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card border-0">
                        <div class="card-body">
                            <!-- Populate book details here using PHP variables -->
                            <div class="img-fluid text-center"><img src="./img/books/<?php echo basename($book['image_url']); ?>" alt="Book Image"></div>
                            <h4 class="bg-warning py-2 mx-4 my-2 text-white text-uppercase text-center fw-bold">buy this book</h4>
                            <p class="card-text mx-4 books_paragraph"><?php echo $book['description']; ?></p>
                            <a href="http://" class="ms-4">Read More</a>

                            <!--Button change START-->
                            <div class="d-flex mx-4">


                                <button type="button" class="btn w-50 bg-warning text-center text-uppercase py-2 fw-bold text-white rounded-0" data-bs-toggle="modal" data-bs-target="#buyBook">
                                    buy this book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="buyBook" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="button" class="btn w-50 bg-danger text-center text-uppercase py-2 fw-bold text-white rounded-0" name="confirmRent" data-bs-toggle="modal" data-bs-target="#rentBook">
                                    rent this book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="rentBook" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Rent A Book</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Exciting update! The book you've been looking for is available for rent. Dive into its pages and embark on an enriching reading experience. Happy reading!

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="./includes/rentals.php" method="POST">
                                                    <input type="hidden" name="bookId" value="<?php echo $book['book_id']; ?>">
                                                    <button type="submit" class="btn btn-primary" name="confirmRent">Rent Now</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="d-flex mx-4">
                                <div class="w-50  fs-3 text-start text-uppercase py-2 fw-bold text-primary"><?php echo 'R' . $book['price']; ?></div>
                                <div class="w-50  mt-2  text-uppercase py-2 fw-bold text-primary ">
                                    <?php
                                    $availability =  $book['available'];
                                    if ($availability == 0) : ?>
                                        <p class="  fs-5 text-start text-uppercase  fw-bold text-primary">Not Available</p>

                                    <?php elseif ($availability == 1) : ?>
                                        <p class=" fs-5 text-start text-uppercase  fw-bold text-primary">Available</p>

                                    <?php endif; ?>
                                </div>
                            </div>



                            <!--Button Change END-->

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</section>



<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/button.js"></script>
<script src="./js/script.js"></script>


</body>

</html>