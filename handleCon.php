<?php
session_start();
if (isset($_POST['submit'])) {
    extract($_POST);
    // validetion

    //  Name
    $errors = [];
    if (empty($name)) {
        $errors[] = "your name is required";
    } elseif (is_numeric($name)) {
        $errors[] = "your name must be string";
    } elseif (strlen($name) < 2) {
        $errors[] = "your name less than 2 chars";
    }
    // email 
    if (empty($email)) {
        $errors[] = "your email is required";
    }
    // address 
    if (empty($address)) {
        $errors[] = "your address is required";
    } elseif (!is_string($address)) {
        $errors[] = "your address must be string";
    } 
    // city 
    if (empty($city)) {
        $errors[] = " city is required";
    } elseif (!is_string($address)) {
        $errors[] = "your city must be string";
    } 
    // phone
    if (empty($phone)) {
        $errors[] = "your phone is required";
    } elseif (!is_numeric($phone)) {
        $errors[] = "your phone must be numeric";
    }
    if (empty($postalCode)) {
        $errors[] = " postalCode is required";
    } 

    if (empty($errors)) {
        $_SESSION['con'] = "congratulations";
        header("location: confirmOrder.php");
    } else {
        $_SESSION['error'] = $errors;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['city'] = $city;
        header("location: confirmOrder.php");
    }
}
