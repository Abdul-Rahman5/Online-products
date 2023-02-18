<?php
include "header.php";
include "navbar.php";
?>

<div class="container">
    <div class="row">

        <div class="col-md-5 ">
            <img src="./img/images (1).png" class="img w-100" alt="">
        </div>
        <div class="col-md-7 mt-5">
            <form action="handlereviw.php" method="post">
                <label class="lead mb-2" for="review">Enter your feedback About our porduct : </label>

                <textarea class="form-control " placeholder="Comments"  name="review" id="review" cols="30" rows="3"></textarea>

                <button class="btn w-100 btn-info mt-3" name="submit" type="submit">send</button>
            </form>
        </div>
    </div>

    <div class="row  mt-5">
        <div class="col-md-6">
            <h3>comment : </h3>

            <?php

            session_start();
            if (!empty($_SESSION['comment'])) {
                $views = $_SESSION['comment'];
                // var_dump($views);
                foreach ($views as $view) { ?>

                    <p class="lead "><?php echo $view['review']; ?></p>

            <?php     }
            }
            ?>

        </div>
    </div>
</div>












<?php include "footer.php" ?>