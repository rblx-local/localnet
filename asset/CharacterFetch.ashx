<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('config/db.php');

if (!isset($_GET["userId"])) {
    die("no user id provided");
}

$id = intval($_GET["userId"]);

$query = $con->prepare("SELECT head_color, left_arm_color, right_arm_color, left_leg_color, right_leg_color, torso_color, hat1, hat2, hat3, tshirt, shirt, pants FROM users WHERE id = :userId");
$query->execute(['userId' => $id]);
$user = $query->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("invalid user");
}

foreach ($user as $key => $value) {
    if (empty($value)) {
        $user[$key] = "0";
    }
}

echo "http://localhost/asset/bodycolors.ashx?headc={$user['head_color']}&larmc={$user['left_arm_color']}&rarmc={$user['right_arm_color']}&llegc={$user['left_leg_color']}&rlegc={$user['right_leg_color']}&torsoc={$user['torso_color']};";
echo "http://localhost/asset/?id={$user['hat1']};";
echo "http://localhost/asset/?id={$user['hat2']};";
echo "http://localhost/asset/?id={$user['hat3']};";
echo "http://localhost/asset/?id={$user['tshirt']};";
echo "http://localhost/asset/?id={$user['shirt']};";
echo "http://localhost/asset/?id={$user['pants']};";
?>