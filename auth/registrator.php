<?php
session_start();

// Databse
require_once __DIR__ . '/../config/db.php';

// CHECK IF IT'S POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate inputs
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['error_message'] = 'Please fill all required fields.';
        header('Location: register.php');
        exit;
    }

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = 'Invalid email format.';
        header('Location: register.php');
        exit;
    }

    // hash the password using bcrypt
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    try {
        // check if username or email already exists
        $stmt = $pdo->prepare('SELECT id FROM users WHERE username = :username OR email = :email');
        $stmt->execute(['username' => $username, 'email' => $email]);
        if ($stmt->fetch()) {
            $_SESSION['error_message'] = 'Username or email already exists.';
            header('Location: register.php');
            exit;
        }

        // create new user
        $stmt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $passwordHash
        ]);

        // get id
        $userId = $pdo->lastInsertId();

        // success message and redirect
        $_SESSION['success_message'] = 'Registration successful. Your user ID is: ' . htmlspecialchars($userId);
        header('Location: register.php');
        exit;

    } catch (PDOException $e) {
        $_SESSION['error_message'] = 'FUCK! Database ERROR!: ' . $e->getMessage();
        header('Location: register.php');
        exit;
    }
} else {
    header('Location: register.php');
    exit;
}
