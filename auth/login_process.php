<?php
session_start();


require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['error_message'] = 'Please fill all required fields.';
        header('Location: login.php');
        exit;
    }

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    try {

        $stmt = $pdo->prepare('SELECT id, username, password FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['success_message'] = 'Login successful. Welcome, ' . htmlspecialchars($user['username']) . '!';


            header('Location: login.php');
            exit;
        } else {

            $_SESSION['error_message'] = 'Invalid username or password.';
            header('Location: login.php');
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['error_message'] = 'FUCK! Database ERROR!: ' . $e->getMessage();
        header('Location: login.php');
        exit;
    }
} else {

    header('Location: login.php');
    exit;
}
