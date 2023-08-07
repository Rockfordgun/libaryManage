<?php

include_once './includes/header.php';


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
          <p> <?php

              check_signup_errors();

              ?></p>
          <h3 class="text-white mt-5 ms-5">Administrator Login Here </h3>


        </div>
        <form action="./includes/admin_login.inc.php" method="post" class="ms-5 mt-4 formContainer form-control bg-secondary">
          <input class="form-control bg-transparent border-bottom" type="text" placeholder="Enter Your Username" name="username" aria-label="Enter Your Username" style="width: 73%" />
          <div class="input-group mb-3" style="width: 80%">
            <input type="text" class="form-control bg-transparent border-bottom" placeholder="Enter Your Password" aria-label="Enter Your Password" name="password" aria-describedby="button-addon2" />
            <button class="btn btn-outline-secondary text-secondary bg-white fw-bold" type="submit" id="button-addon2" style="width: 150px">
              SIGN IN
            </button>
          </div>



        </form>



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