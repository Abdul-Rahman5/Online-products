<?php include 'header.php' ?>
<?php include 'navbar.php' ?>




<section id="product1" class="section-p1">
    <h2>Featured Products</h2> <a href="" class="text-der"></a>
    <p>Summer Collection New Modren Desgin</p>
    <div class="pro-container">
        <?php

        session_start();
        if (!empty($_SESSION['cart'])) {
            
        
        $carts = $_SESSION['cart'];
        // $_SESSION['table'] = $carts;
            $id = 0;
        foreach ($carts as $cart) { ?>
            <div class="pro">
                <!-- <form> -->
                <form action="handleShop.php?id=<?php echo $id++ ?>" method="post">
                    <a href="review.php"> <img src="<?php echo "upload/" . $cart['imageName'] ?>" alt="f" />
                    </a>
                    <div class="des">
                        <a class="text-decoration-none" href="review.php ">
                            <h2 class="lead h2 fs-3"> <?php echo $cart['title'] ?></h2>
                        </a>

                        <a class="text-decoration-none" href="review.php ">
                            <p class="lead m-0"> <?php echo $cart['cat'] ?></p>
                        </a>

                        <input type="hidden" name="cat" value="<?php echo $cart['cat'] ?>">
                        <input type="hidden" name="title" value="<?php echo $cart['title'] ?>">
                        <input type="hidden" name="desc" value="<?php echo $cart['desc'] ?>">
                        <input type="hidden" name="price" value="<?php echo $cart['price'] ?>">
                        <input type="hidden" name="imageName" value="<?php echo $cart['imageName'] ?>">


                        <div class="star ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                        </div><a class="text-decoration-none" href="review.php">
                            <p class="lead"> $ <?php
                                                echo $cart['price']  ?></p>
                        </a>

                        <div class="item d-flex justify-content-between">



                            <input class="form-control w-75" type="number" name="quantity">
                            <button class="btn btn-body" type="submit" name="submit"> <i class="fas cart fa-shopping-cart "></i></button>

                </form>
            </div>
    </div>



    </div>



<?php   }
} 
?>



</div>

</section>



<section id="pagenation" class="section-p1">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="shop.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1 of 2 </a></li>

            <li class="page-item">
                <a class="page-link" href="shop.php?" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>

</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext ">
        <h4>Sign Up For Newletters</h4>
        <p>Get E-mail Updates about our latest shop and <span class="text-warning ">Special Offers.</span></p>
    </div>
    <div class="form ">
        <input type="text " placeholder="Enter Your E-mail... ">
        <button class="normal ">Sign Up</button>
    </div>
</section>


<?php include 'footer.php' ?>