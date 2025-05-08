<?php header("Content-Type: application/json; charset=utf-8");
if($_GET['binaryType'] == "WindowsStudio"){
echo'"version-a"';
}else{
echo'"version-b"';
}
?>