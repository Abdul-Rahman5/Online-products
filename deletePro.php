<?php
session_start();
if (isset($_POST['delete'])) {
     $id = $_GET['id'];
    unset($_SESSION['table'][$id]);
}
header("location: cart.php");


?>