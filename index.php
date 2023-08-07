<?php

include_once './includes/header.php'

?>


<section class="banner bg-info">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-7 bannerContainer"></div>
      <div class="col-lg-5 bookContainer">
        <h3 class="text-primary mt-3">
          <span class="text-secondary">Newest</span> Book
          <div class="progress mt-2" role="progressbar" aria-label="Example 1px high" aria-valuenow="10" aria-valuemin="0" aria-valuemax="80" style="height: 3px; width: 40vw">
            <div class="progress-bar" style="width: 10%"></div>
          </div>
        </h3>

        <div class="row bookRead">
          <div class="col d-flex gap-2">
            <div class="card bg-transparent border-0" style="
                    width: 18rem;
                    background-image: url(./img/phpmysql.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>

            <div class="card border-0" style="
                    width: 18rem;
                    background-image: url(./img/monster.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>

            <div class="card border-0" style="
                    width: 18rem;
                    background-image: url(./img/fullstack.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>

            <div class="card" style="
                    width: 18rem;
                    background-image: url(./img/webapp.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>
          </div>
        </div>
        <h3 class="text-primary mt-2">
          <span class="text-secondary">Best</span> Reads
        </h3>

        <div class="progress mt-2" role="progressbar" aria-label="Example 1px high" aria-valuenow="10" aria-valuemin="0" aria-valuemax="80" style="height: 3px; width: 40vw">
          <div class="progress-bar" style="width: 10%"></div>
        </div>

        <div class="row mt-2 bookRead">
          <div class="col d-flex gap-2">
            <div class="card bg-transparent border-0" style="
                    width: 18rem;
                    background-image: url(./img/cassandraComplex.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>

            <div class="card border-0" style="
                    width: 18rem;
                    background-image: url(./img/andrederuyter.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>

            <div class="card border-0" style="
                    width: 18rem;
                    background-image: url(./img/circuswonders.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>

            <div class="card" style="
                    width: 18rem;
                    background-image: url(./img/gedoerte.jpg);
                    background-size: cover;
                    background-position: center;
                  "></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="login">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 bg-secondary loginContainer" style="height: 15rem">
        <div class="buttonContainer d-flex gap-3">
          <h3 class="mt-5 ms-5">
            <a href="./signup.php" target="_blank" rel="noopener noreferrer" class="text-white signUpBTN">Sign In</a>
          </h3>
          <h3 class="mt-5">
            <a href="./register.php" target="_blank" rel="noopener noreferrer" class="text-white registerBTN">Register</a>
          </h3>
          <h3 class="mt-5 ms-9">
            <a href="./admin_login.php" target="_blank" rel="noopener noreferrer" class="text-white registerBTN">Admin Login</a>
          </h3>
        </div>

      </div>
      <div class="col-lg-5 bg-primary">
        <h3 class="mt-5 ms-5 text-white">
          The library is <span class="timeStamp">open</span> now
        </h3>
        <h1 class="ms-5 text-white mt-4 display-2">7:00AM - 5:00PM</h1>
      </div>
    </div>
  </div>
</section>



<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
</body>

</html>