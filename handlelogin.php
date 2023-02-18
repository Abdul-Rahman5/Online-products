<?php
session_start();
if (isset($_POST['submit'])) {
    extract($_POST);
    // validetion 
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
    if (empty($errors)) {
        ($email == "admin@gmail.com" && $password == 'admin') ? header('location: ./admin/view/layout.php') : header("location: index.php");
    } else {
        $_SESSION['error'] = $errors;
        header("location: login.php");
    }

}
