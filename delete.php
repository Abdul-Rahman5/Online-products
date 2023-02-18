<?php
session_start();
// session_destroy();
// var_dump($_SESSION['table'][6]);
$_SESSION['is_exist']=true;
$carts = $_SESSION['table'];
// foreach ($carts as $cart=>$value) {
    // if ($_SESSION['is_exist'] == true) {
        // echo "sad";
        // echo $cart;

        // unset($_SESSION['table'][$i]);
    // } else {
        // echo 'bad';
    // }
// }
for ($i=0; $i < count($carts) ; $i++) {
  var_dump($carts)    ;
  echo "<br>";
}
// header("location: cart.php");