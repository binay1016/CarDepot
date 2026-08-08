<?php

session_start();
require_once 'config.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkUserName = $conn->query("SELECT username WHERE username = '$username'");

    if($checkUserName->num_rows > 0){
        $_SESSION['register_error']='UserName is already registered!';
        $_SESSION['active_form']='register';
    }else{
        $conn->query("INSERT INTO users ( username ,password) VALUES ('$username','$password)");

    }
    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username ='$email'");
    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['username'] = $user['username'];
        }
    }

    $_SESSION['login_error'] = 'Incorrect email or passowrd';
    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    exit();
}


?>