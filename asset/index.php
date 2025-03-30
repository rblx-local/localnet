<?php
header("Content-Type: application/json");

$id = isset($_GET['ID']) ? $_GET['ID'] : (isset($_GET['id']) ? $_GET['id'] : null);
if (!$id) {
    die(json_encode(["message" => "cant process request"]));
}

if (is_numeric($id)) {
    $id = $id * 1;
    header("Pragma: cache");
    header("Cache-Control: max-age=120");
    $curl = curl_init("https://assetdelivery.roblox.com/v1/asset/?" . $_SERVER["QUERY_STRING"]);
    curl_setopt_array($curl, [
        CURLOPT_ENCODING => "",
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => "Roblox/WinInet" // set useragent else roblox will think you're a monkey from zimbabwe
    ]);

    $data = curl_exec($curl);
    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($code != 200) {
        http_response_code($code);
        header("Content-Type: application/json");
        die($data);
    }

    header("Content-Type: application/octet-stream");
    die($data);
}
?>