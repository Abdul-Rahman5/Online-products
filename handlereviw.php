<?php
session_start();
if (isset($_POST['submit'])) {
    extract($_POST);
    if (!isset($_SESSION['comment'])) {
        $_SESSION['comment'] = [];
    }

    $products = [
        "review" => $review
    ];
    array_push($_SESSION['comment'], $products);
    header("location: review.php");

    exit;
}
