<?php
$host = 'localhost'; // change this if database is NOT hosted in localhost
$dbname = 'rocknetdb';
$username = 'root';
$password = '';

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("CANT CONNECT, SEND THIS TO clan.58#0: " . $e->getMessage());
}
$_SERVER['DOCUMENT_ROOT'] = "D:/xampp/htdocs/";
?>