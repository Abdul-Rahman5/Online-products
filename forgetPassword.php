<?php
include "header.php";
include "navbar.php";
?>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">


          <div class="card-body px-5 py-5 bg-light">
            <h3 class="card-title text-left mb-3">Login</h3>
            <form action="handleforget.php" method="post">
              <?php
              session_start();
              if (!empty($_SESSION['error'])) {
                foreach ($_SESSION['error'] as $error) ?>
                <p class="text-danger small"><?php echo $error ?></p>

              <?php   }
              unset($error);
              ?>
              <div class="form-group">
                <label>email *</label>
                <input type="email" name="email" class="form-control p_input" value="<?php echo (!empty($_SESSION['email'])) ? $_SESSION['email'] : '';
                                                                                      unset($_SESSION['email']) ?>">
              </div>
              <div class="form-group">
                <label> New Password *</label>
                <input type="text" name="password" class="form-control p_input" value="<?php echo (!empty($_SESSION['password'])) ? $_SESSION['password'] : '';
                                                                                        unset($_SESSION['password']) ?>">
              </div>
              <div class="form-group">
                <label>Confirm Password *</label>
                <input type="password" name="repassword" class="form-control p_input">
              </div>
              <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
                </div>
                <a href="forgetPassword.php" class="forgot-pass">Forgot password</a>
              </div>
              <div class="text-center">
                <button type="submit" name="submite" class="btn btn-info btn-block enter-btn">Confirm</button>
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
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- row ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>

<?php include "footer.php" ?>