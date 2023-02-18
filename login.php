<?php
include "header.php";
include "navbar.php";
?>

<div class="row p-5 justify-content-center mx-5 bg-light">


  <div class=" px-5 col-md-5 py-5  ">
    <h3 class="card-title lead fs-2 text-left mb-3">Login</h3>
    <form action="handlelogin.php" method="post">
      <div class="form-group">
        <label>email *</label>
        <input type="email" name="email" class="form-control p_input" value="<?php if (!empty($_COOKIE['email'])) echo $_COOKIE['email'] ?>">
      </div>
      
      <div class="form-group">
        <label>Password *</label>
        <input type="password" name="password" class="form-control p_input" value="<?php if (!empty($_COOKIE['password'])) echo $_COOKIE['password']?>">
      </div>
      <div class="form-group d-flex align-items-center justify-content-between">
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input"> Remember me </label>
        </div>
        <a href="forgetPassword.php" class="forgot-pass">Forgot password</a>
      </div>
      <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Login</button>
      </div>
      <div class="d-flex">
        <button class="btn btn-facebook me-2 col">
          <i class="mdi mdi-facebook"></i> Facebook </button>
        <button class="btn btn-google col">
          <i class="mdi mdi-google-plus"></i> Google plus </button>
      </div>
      <p class="sign-up">Don't have an Account?<a href="signup.php"> Sign Up</a></p>
    </form>
  </div>

  <div class=" px-5 col-md-5 ">
    <img class="w-100" src="./img/banner-1.png" alt="">

  </div>
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

<?php



include "footer.php" ?>


//table user, product, cart ,, review comment , rating = session