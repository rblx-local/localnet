<?php
// all those comments are for yungDoom cause they are uhh... dumb at web dev
session_start();

// include database or it won't work
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check if it's anything
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['error_message'] = 'Please fill all required fields.';
        header('Location: login.php');
        exit;
    }

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    try {
        // fetch user kek
        $stmt = $pdo->prepare('SELECT id, username, password FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // if the passwords it correct, it set da session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['success_message'] = 'Login successful. Welcome, ' . htmlspecialchars($user['username']) . '!';

            // redirect back to show the message
            header('Location: login.php');
            exit;
        } else {
            // you know what this is
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
    // blah blah blah
    header('Location: login.php');
    exit;
}
