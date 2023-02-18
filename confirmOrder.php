<?php
include "header.php";
include "navbar.php";

?>


<section id="cart-add" class="section-p1">
    <form>
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" name="coupon" placeholder="Enter coupon code">
            <button class="normal" type="submit">Apply</button>
        </div>
    </form>
    <div id="subTotal">
        <h3>Cart totals</h3>
        <?php
        session_start();
        if (!empty($_SESSION['error'])) {
            foreach ($_SESSION['error'] as $error) ?>
            <p class="text-danger small"><?php echo $error ?></p>

        <?php   }
        if (!empty($_SESSION['error'])) {
            unset($_SESSION['error']);
        }
        if (!empty($_SESSION['con'])) { ?>
            <div class="text-center rounded-3 bg-light w-100 text-success lead fs-2"><?php echo $_SESSION['con']; ?></div>
        <?php unset($_SESSION['con']);
        }
        ?>
        <form action="handleCon.php" method="post" class=" col-6 lead">

            <label for="name">Name : </label>
            <input name="name" class="form-control" type="text" value="<?php echo (!empty($_SESSION['name'])) ? $_SESSION['name'] : '';
                                                                        unset($_SESSION['name']) ?> ">
            <label for="email">Email : </label>
            <input name="email" class="form-control" id="email" type="email" value="<?php echo (!empty($_SESSION['email'])) ? $_SESSION['email'] : '';
                                                                                    unset($_SESSION['email']) ?> ">
            <label for="address">Address : </label>
            <input name="address" class="form-control" type="text" value="<?php echo (!empty($_SESSION['address'])) ? $_SESSION['address'] : '';
                                                                            unset($_SESSION['address']) ?> ">
            <label for="city">city : </label>
            <input name="city" class="form-control" type="text" value="<?php echo (!empty($_SESSION['city'])) ? $_SESSION['city'] : '';
                                                                        unset($_SESSION['city']) ?> ">
            <label for="postalCode">PostalCode : </label>
            <input name="postalCode" class="form-control" type="number">
            <label for="phone">phone : </label>
            <input name="phone" class="form-control" type="text">
            <label for="paymentType">paymentType : </label>
            <select class="mb-2 p-2 rounded-3 lead">
                <option value="Cash_on_Delivery">Cash on Delivery</option>
                <option value="Credit_Card">Credit Card</option>
                <option value="Fawry">Fawry</option>
            </select>
            <button class="btn btn-outlinr-success" name="submit" type="submit">proceed to checkout</button>
        </form>

    </div>
</section>


<?php include "footer.php" ?>