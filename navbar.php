<section id="header">
    <a href="index.html">
        <img src="img/logo.png" alt="homeLogo">
    </a>

    <div>
        <ul id="navbar">
            <?php
            if (!empty($_COOKIE['name'])){ ?>
            <li class="link">
                <a class="active " href="index.html"></a>
            </li>
            <li class="link">
                <a href="shop.php"></a>
            </li>
            <li class="link">
                <a href="index.php">Blog</a>
            </li>
            
            <li class="link">
                <a href="shop.php">shop</a>
            </li>
            <li class="link">
                <a href="cart.php">cart</a>
            </li>
            <li class="link">
                <a href="#">Contact</a>
            </li>
            <!-- <li class="link">
                <a href="lang.php?lang=en">English</a>
            </li>
            <li class="link">
                <a href="lang.php?lang=ar">Arabic</a>
            </li> -->
            <li class="link">
                <a href="logout.php">LogOut</a>
            </li>
            <li class="link">
                <a href="# "><?php echo "welcome". $_COOKIE['name'] ?></a>
            </li>
            <li class="link">
                <a id="lg-cart" href="cart.html">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
            <a href="#" id="close"><i class="fas fa-times"></i> </a>

            <?php }else{ ?>

            <li class="link">
                <a href="signup.php">Signup</a>
            </li>
            <!-- <li class="link">
                <a href="lang.php?lang=en">English</a>
            </li>
            <li class="link">
                <a href="lang.php?lang=ar">Arabic</a>
            </li> -->

            <li class="link">
                <a href="login.php">Login</a>
            </li>
            <?php } ?>



        </ul>

    </div>

    <div id="mobile">
        <a href="cart.html">
            <i class="fas fa-shopping-cart"></i>
        </a>
        <a href="#" id="bar"> <i class="fas fa-outdent"></i> </a>
    </div>
</section>