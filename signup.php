<!DOCTYPE html>

<head>

  <!-- Start Links -->
  <link rel="stylesheet" href="css/splide.min.css">
  <link rel="stylesheet" href="css/splide-core.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!--Start Home Style -->
  <link rel="stylesheet" href="css/index_style.css">
  <!-- End Home Style -->

  <!-- Start Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,400&display=swap" rel="stylesheet">
  <!-- End Google Fonts -->

  <!-- End Links -->

  <title>Haga Helwa</title>

</head>


<body class="bg-light">
  <?php

  include "navbar.php";
  ?>
  <div class="row ">
    <div class="card-body  col-md-4 px-5 py-5  m-auto rounded-2">
      <h3 class="card-title text-left mb-3">Register</h3>
      <form action="handle_singup.php" method="post" class="">
        <?php
        session_start();
        if (!empty($_SESSION['error'])) {
          foreach ($_SESSION['error'] as $error) ?>
          <p class="text-danger small"><?php echo $error ?></p>

        <?php   }
        if (!empty($_SESSION['error'])) {
          unset($_SESSION['error']);
        }
        ?>
        <div class="form-group ">
          <label>Username</label>
          <input type="text" name="name" class="form-control p_input" value="<?php echo (!empty($_SESSION['name'])) ? $_SESSION['name'] : '';
                                                                              unset($_SESSION['name']) ?> ">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control p_input" value="<?php echo (!empty($_SESSION['email'])) ? $_SESSION['email'] : '';
                                                                                unset($_SESSION['email']) ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" class="form-control p_input" value="<?php echo (!empty($_SESSION['password'])) ? $_SESSION['password'] : '';
                                                                                  unset($_SESSION['password']) ?>">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control p_input" value="<?php echo (!empty($_SESSION['phone'])) ? $_SESSION['phone'] : '';
                                                                              unset($_SESSION['phone']) ?>">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control p_input" value="<?php echo (!empty($_SESSION['address'])) ? $_SESSION['address'] : '';
                                                                                unset($_SESSION['address']) ?>">
        </div>

        <div class="form-group d-flex align-items-center justify-content-between">
          <div class="form-check">

            <div class="text-center">
              <button type="submit" name="submit" class="btn m-2 text-center btn-info btn-block enter-btn">Signup</button>
            </div>
            <div class="d-flex">
              <button class="btn btn-facebook col me-2">
                <i class="mdi mdi-facebook"></i> Facebook </button>
              <button class="btn btn-google col">
                <i class="mdi mdi-google-plus"></i> Google plus </button>
            </div>
            <p class="sign-up text-center">Already have an Account?<a href="login.php"> Login</a></p>
            <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
      </form>
    </div>
  </div>
  </div>
  <div class=" col-md-4 mt-4 px-5 py-5 rounded-2">
    <img class="w-100" src="./img/banner-1.png" alt="">


  </div>
  </div>
  </div>
  </div>

  <!-- content-wrapper ends -->
  </div>
  <!-- row ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>

  <?php include "footer.php" ?>