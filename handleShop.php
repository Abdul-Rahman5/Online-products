<?php
session_start();
if (isset($_POST['submit'])) {
    extract($_POST);
    $id= $_GET['id'];
    if (!isset($_SESSION['table'])) {
        $_SESSION['table'] = [];
    }
    $errors = [];
    if (empty($quantity)) {
        $errors[] = " quantity is required";
    }
    if (empty($errors)) {
        $products = [
            "cat" => $cat,
            "title" => $title,
            "desc" => $desc,
            "price" => $price,
        "quantity" => $quantity,
            "imageName" => $imageName,
        ];
        array_push($_SESSION['table'], $products);
        header("location: cart.php");
    } else {
        $_SESSION['error'] = $errors;
        header("location: shop.php");
    }

    exit;
}
