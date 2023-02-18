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
    // password 
    if (empty($password)) {
        $errors[] = "your password is required";
    } elseif (!is_string($password)) {
        $errors[] = "your passwoed must be string";
    } elseif (strlen($password) < 5) {
        $errors[] = "your passwoed must be  more than 6 chars";
    }
    // phone
    if (empty($phone)) {
        $errors[] = "your phone is required";
    } elseif (!is_numeric($phone)) {
        $errors[] = "your phone must be numeric";
    }
    // 
    if (empty($address)) {
        $errors[] = "your address is required";
    } elseif (!is_string($address)) {
        $errors[] = "your address must be string";
    }



    if (empty($errors)) {
        setcookie('name', $name, time() + 60 * 60 * 24);
        setcookie('email', $email, time() + 60 * 60 * 24);
        setcookie('password', $password, time() + 60 * 60 * 24);
        header("location: login.php");
    } else {
        $_SESSION['error'] = $errors;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location: signup.php");
    }
}
