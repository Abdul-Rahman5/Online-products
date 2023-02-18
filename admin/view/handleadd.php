<?php
session_start();
if (isset($_POST['submit'])) {
    extract($_POST);
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    // vaild

    $image = $_FILES['image'];
    $imageName = $image['name'];
    $size = $image['size']/(1024*1024);
    $error = $image['error'];
    $tmpName = $image['tmp_name'];
    
    $errorImage = [];
    if ($error != 0) {
        $errorImage[] = 'image not found';
    } elseif ($size > 1) {
        $errorImage[] = 'image size';
    } elseif (empty($cat)) {
        $errorImage[] = " Category is required";
    } elseif (is_numeric($cat)) {
        $errorImage[] = " Category must be string";
    } elseif (empty($title)) {
        $errorImage[] = " title is required";
    } elseif (empty($desc)) {
        $errorImage[] = " Description is required";
    } 
    elseif (empty($price)) {
        $errorImage[] = " price is required";
    } 
    elseif (empty($quantity)) {
        $errorImage[] = " quantity is required";
    } 








    if (empty($errorImage) ) {
        move_uploaded_file($tmpName, "../../upload/$imageName");
        $_SESSION['success'] = "Done successfully";
        $product = [
            "cat" => $cat,
            "title" => $title,
            "desc" => $desc,
            "price" => $price,
            "quantity" => $quantity,
            "imageName" => $imageName,
        ];
        array_push($_SESSION['cart'], $product);
        header("location: addProduct.php");

    } else {
        $_SESSION['errorImage'] = $errorImage;
        header("location: addProduct.php");
    }
    exit;
  
}
