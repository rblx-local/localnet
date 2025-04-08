<?php
ob_start();

$servername = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";

try {
$con = new PDO("mysql:host=$servername;dbname=rocknetdb;charset=utf8mb4", $dbusername, $dbpassword);
$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
?>