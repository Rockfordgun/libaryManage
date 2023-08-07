<?php

session_start();



include_once './includes/dbh.inc.php'; // Include your database connection

include_once './includes/fetchCategoryBooks.php';
include_once './includes/rentals.php';

if (!isset($_SESSION['userId'])) {
  header("Location: index.php"); // Redirect to login page
  exit();
}




if (isset($_SESSION['userId'])) {
  require_once './includes/dbh.inc.php';

  $userId = $_SESSION['userId'];

  $sql = "SELECT * FROM user_profiles WHERE user_id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$userId]);
  $profile = $stmt->fetch(PDO::FETCH_ASSOC);
}


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
            <a href="./bookspage.php" class="nav-link text-dark text-uppercase">find a book</a>
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
      <aside id="sidebar">
        <div class="h-100">
          <!-- Sidebar Navigation -->
          <ul class="sidebar-nav">
            <li class="sidebar-header text-uppercase fw-bold">my account</li>

            <li class="sidebar-item">
              <a href="#" class="sidebar-link collapsed text-secondary" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
                <i class="fa-solid fa-id-card me-2"></i>
                User Details
              </a>
              <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Dashboard</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Edit Profile</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Change Password</a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link collapsed text-secondary" data-bs-toggle="collapse" data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                <i class="fa-solid fa-map-location-dot me-2"></i>
                Bookings
              </a>
              <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">My Bookings</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Invoices</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Reviews</a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link collapsed text-secondary" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="fa-regular fa-user pe-2"></i>
                Auth
              </a>
              <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                  <a href="./logout.php" class="sidebar-link">Sign Out</a>
                </li>

              </ul>
            </li>
            <li class="sidebar-header text-uppercase fw-bold">Need help</li>

            <li class="sidebar-item fs-5 fw-bold text-secondary lh-1">
              <p>
                <i class="fa-solid fa-phone-volume ms-4 text-secondary"></i>
                +12 345 6789
              </p>

              <p>
                <i class="fa-solid fa-envelope ms-4"></i>
                info@prestine.co.za
              </p>
            </li>
          </ul>
        </div>
      </aside>
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
                          <form action="./includes/process_form.php" method="post" class="form-control">

                            <div class="row">
                              <div class="col">
                                <input type="text" class="form-control text-dark border-bottom" name="name" id="" placeholder="Enter Your Name">
                              </div>
                              <div class="col">
                                <select class="form-select text-secondary border-bottom" name="gender" aria-label="Default select example">
                                  <option selected>Select Your Gender</option>
                                  <option value="1">Male</option>
                                  <option value="2">Female</option>

                                </select>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col">
                                <input type="text" class="form-control text-dark border-bottom" name="surname" id="" placeholder="Surname">
                              </div>
                              <div class="col">
                                <select class="form-select text-dark border-bottom" name="country" aria-label="Default select example">
                                  <option selected>Open this select menu</option>
                                  <option value="1">South Africa</option>
                                  <option value="2">Albania</option>
                                  <option value="3">Algeria</option>
                                  <option value="4">Andorra</option>
                                  <option value="5">Angola</option>
                                  <option value="6">Antigua </option>
                                  <option value="7">Argentina</option>
                                  <option value="8">Bhutan</option>
                                  <option value="9">United States</option>
                                  <option value="10">Australia</option>
                                </select>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col">
                                <input type="email" class="form-control text-dark border-bottom" name="email" id="" placeholder="Enter Your Email">
                              </div>
                              <div class="col">
                                <input type="tel" id="typePhone" name="phone" class="form-control text-dark border-bottom" required placeholder="Enter Your Phone Number" />
                              </div>

                            </div>
                            <div class="row mt-3">
                              <div class="col">

                                <div class="form-outline">

                                  <div class="col-lg-12">
                                    <textarea name="user-adress" id="user-adress" class="form-control text-dark border-bottom" cols="50" rows="3" placeholder="Enter your Adress"></textarea>
                                  </div><!--end col 10-->
                                </div>

                              </div>

                            </div>

                            <button type="submit" class="btn btn-primary text-white mt-4">Submit</button>
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
                    <th scope=" col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>


                  </tr>
                </thead>
                <tbody>
                  <?php if (is_array($profile) && isset($profile['name']) && isset($profile['surname']) && isset($profile['email'])) { ?>
                    <tr>
                      <td>1</td>
                      <td><?php echo $profile['name']; ?></td>
                      <td><?php echo $profile['surname']; ?></td>
                      <td><?php echo $profile['email']; ?></td>
                    </tr>
                  <?php } else { ?>
                    <tr>
                      <td colspan="4">
                        <p class="error-message">Oops! Something went wrong while fetching your profile information. Please edit your profile.</p>
                      </td>
                    </tr>
                  <?php } ?>


                  <thead>
                    <tr class="fs-5 text_profile  ">

                      <th scope="col">Adress</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Country</th>
                      <th scope="col">Phone</th>

                    </tr>
                  <tbody>
                    <?php if (is_array($profile) && isset($profile['name']) && isset($profile['surname']) && isset($profile['email'])) { ?>

                      <tr>

                        <td class="w-25"> <?php echo $profile['address']; ?></td>
                        <td> <?php echo $profile['gender']; ?></td>
                        <td><?php echo $profile['country']; ?></td>
                        <td><?php echo $profile['phone']; ?></td>

                        <td><a href="edit_profile.php?id=<?php echo $profile['id']; ?>" class="btn btn-primary">Edit</a></td>
                      </tr>
                    <?php } else { ?>
                      <tr>
                        <td colspan="4">
                          <p class="error-message">Oops! Something went wrong while fetching your profile information. Please edit your profile.</p>
                        </td>
                      </tr>
                    <?php } ?>
                    </thead>
                  </tbody>
              </table>
            </div>

            <div class="row">
              <div class="col mb-3">
                <div class="top_profiles d-flex justify-content-between mt-3">
                  <h4>Bookings</h4>
                  <p class="me-4 text-secondary">Edit Profile</p>
                </div>
                <hr />
              </div>
              <div class="row table-responsive-sm">
                <table class="table ms-2">
                  <thead>
                    <tr class="fs-5 text_profile">
                      <th scope="col  ">Hotel Name</th>
                      <th scope="col">Book In</th>
                      <th scope="col">Book Out</th>
                      <th scope="col">Pick Up</th>
                      <th scope="col">Excursions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>@mdo</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </section>



  <?php
  session_start();

  // ... your existing code ...

  if (isset($_SESSION['cart_message'])) {
    echo '<p>' . $_SESSION['cart_message'] . '</p>';
    unset($_SESSION['cart_message']);
  }
  ?>





  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/script.js"></script>

</body>

</html>