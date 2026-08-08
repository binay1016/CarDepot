<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'config.php';

// ---------------- REGISTER ----------------
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    if (!$check) { die("Prepare (check) failed: " . $conn->error); }
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $_SESSION['register_error'] = 'UserName is already registered!';
        header("Location: signup.html");
        exit();
    }

    $insert = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    if (!$insert) { die("Prepare (insert) failed: " . $conn->error); }
    $insert->bind_param("ss", $username, $password);
    $insert->execute();

    if ($insert->error) {
        die("Insert failed: " . $insert->error);
    }

    $_SESSION['register_success'] = 'Account created! You can log in now.';
    header("Location: index.php");
    exit();
}

// ---------------- LOGIN ----------------
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    if (!$stmt) { die("Prepare (login) failed: " . $conn->error); }
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_admin'] = (bool) $user['is_admin'];
            header("Location: home.php");
            exit();
        }
    }

    // only reached if username wasn't found OR password was wrong
    $_SESSION['login_error'] = 'Incorrect username or password.';
    header("Location: index.php");
    exit();
}