<?php
session_start();
if (isset($_POST['submite'])) {
    extract($_POST);
    // validetion

    // email 
    if (empty($email)) {
        $errors[] = "your email is required";
    }
    // password 
    if (empty($password)) {
        $errors[] = "your password is required";
    } elseif (!is_string($password)) {
        $errors[] = "your passwoed must be string";
    } elseif (strlen($password) < 6) {
        $errors[] = "your passwoed must be  more than 6 chars";
    }
    if  ( ! ($password == $repassword)) {
        $errors[] = " It must be the same password";
    } 

    if (empty($errors) ) {
        setcookie('email', $email, time() + 60 * 60 * 24);
        setcookie('password', $password, time() + 60 * 60 * 24);
        header("location: login.php");
    } else {
        $_SESSION['error'] = $errors;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location: forgetPassword.php");
    }
}
