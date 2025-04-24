<?php
if (isset($_GET['username'])) {
    header("Location: /Game/Tools/Avatar.ashx?username=".$_GET['username']); // username unused
}elseif (isset($_GET['userId'])) {
    header("Location: /Game/Tools/Avatar.ashx?userId=".$_GET['userId']); // userId unused
}else {
    echo("ERROR");
}
?>