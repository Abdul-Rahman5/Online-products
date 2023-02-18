<?php
session_start();
// session_destroy();   

include 'header.php' ?>
<?php include 'navbar.php' ?>

<section id="page-header" class="about-header">
    <h2>#Cart</h2>
    <p>Let's see what you have.</p>
</section>
<section id="cart" class="container">



    <table class="w-100">
        <thead>
            <tr>
                <td>Image</td>
                <td>Name</td>
                <td>Desc</td>
                <td>Quantity</td>
                <td>price</td>
                <td>Subtotal</td>
                <td>Remove</td>
                <td>Edit</td>
            </tr>
        </thead>


        <tbody>
            <?php



            function sum($num1 = 1, $num2 = 1)
            {
                $result = $num1 * $num2;
                echo $result;
            }
            if (!empty($_SESSION['table'])) {


                $carts = $_SESSION['table'];
                $i = 0;
                foreach ($carts as $cart) {
                    $index = $i++;

            ?>


                    <tr>
                        <td><img class="w-75" src="<?php echo "upload/" . $cart['imageName'] ?>" alt="">

                        </td>
                        <td><?php echo $cart['title'] ?></td>
                        <td><?php echo $cart['cat'] ?></td>
                        <td><?php echo $cart['quantity'] ?></td>
                        <td><?php echo $cart['price'] ?></td>
                        <td><?php echo  sum($cart['quantity'], $cart['price']) ?></td>


                        <form action="deletePro.php?id=<?php echo $index; ?>" method="post">

                        <td><button type="submit" name="delete" class="btn btn-danger"> Remove</button>  </td>
                        </form>
                        <td><a href="shop.php" class="btn mx-2 btn-info   ">Edit</a></td>

                    </tr>



            <?php   }
            }
            ?>

        </tbody>

        <!-- confirm order  -->
        <td><a href="confirmOrder.php" class="btn btn-success">Confirm</a></td>

    </table>
</section>

<?php include "footer.php" ?>