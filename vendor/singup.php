<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password === $confirm) {

        $password =md5($password);

        /** @var TYPE_NAME $connect */
        mysqli_query($connect,"INSERT INTO `users` (`name`, `email`, `phone`, `pass`) VALUES ('$name', '$email', '$phone', '$password') ");

        $_SESSION['message'] = 'User registered';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Password mismatch';
        header('Location: ../register.php');
    }