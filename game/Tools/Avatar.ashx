<?php
require "functions.php";  // Include functions.php to load the RCCServiceSoap class

// Create an instance of RCCServiceSoap
$RCCServiceSoap = new RCCServiceSoap("127.0.0.1", 64989, "roblox.com");

// The script to run on the server
$script = 'game:GetService("ContentProvider"):SetBaseUrl("http://localhost")
game:GetService("ScriptContext").ScriptsDisabled = true
game.Players:CreateLocalPlayer(1)
game.Players["Player"]:LoadCharacter()
return game:GetService("ThumbnailGenerator"):Click("PNG", 500, 500, true)';

// Execute the script and get the result
$render = $RCCServiceSoap->execScript($script, rand(1, getrandmax()), 120);

// Define the path to save the rendered file
$path = "renders/test.png";

file_put_contents($path, base64_decode($render));
$content = file_get_contents('renders/test.png');
header('Content-Type: image/png');
echo $content;

exit;
?>