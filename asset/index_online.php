<?php
// Remove the index.php file and rename this file to index.php to get assets straight from ROBLOX API's (expect some rate limit though)
if (!isset($_GET['id'])) {
    die('lol');
}
$sosa = $_GET['id'];
if (file_exists($sosa)) {
    header("Content-type: binary/octet-stream; content-encoding: gzip");
    header("Content-disposition: attachment; filename=" . $sosa); 
    die(file_get_contents($sosa));
} 
else {
$url = "https://apis.roblox.com/asset-delivery-api/v1/assetId/" . $sosa;
$headers = [
    'x-api-key: key' // get your key from here: https://create.roblox.com/dashboard/credentials?activeTab=ApiKeysTab
]; $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        die('Error: ' . curl_error($ch));
    }
    curl_close($ch);
 
    $data = json_decode($response, true);
    if (is_array($data) && isset($data['location'])) {
        header('Location: ' . $data['location']);
        sleep(5);
        exit;
    } else {
       
        die("Error:\n" . $response);
    }
}
?>