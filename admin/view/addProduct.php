<?php
session_start();


include "../view/header.php";

include "../view/sidebar.php";
include "../view/navbar.php";

?>

      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">

              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Add Product</h3>
                <form method="post" action="handleadd.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <?php
                    if(!empty($_SESSION['errorImage'])){
                    foreach($_SESSION['errorImage'] as $err){?>
                        
                        <div class="text-danger"><?php echo $err; ?></div>
                   <?php }
                      unset($_SESSION['errorImage']);
                    }
                    if(!empty($_SESSION['success'])){ ?>
                      <div class='text-success'><?php  echo $_SESSION['success']?></div>;
                <?php    }

unset($_SESSION['success']);
                    ?>
                    <label>Category</label>
                    <input type="text" name="cat" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="desc" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                  
                    <input type="file" name="image" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Add</button>
                  </div>
                
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

<?php 
include "../view/footer.php";
 ?>