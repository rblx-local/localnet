<?php
ob_start();
$id = (int)$_GET["id"];
$folderPath = "assets/";
$file = $folderPath . $id;

if (!file_exists($file)) {
    $file = "https://www.roblox.com/asset/?id=" . $id;
    header("location:" . $file);
    exit();
}

readfile($file);
header("content-type:text/plain");
?>