<?php
include('functions/connect.php');
include('functions/functions2.php');
if(isset($_POST)) {
$item_id = abs(intval($_POST['item_id']));
$ip = get_real_ip();
$query = $con->query("SELECT * FROM likes2 WHERE item_id='$item_id' AND ip='$ip' LIMIT 1");
$check = mysqli_num_rows($query);
if ($check == 0) {
$datetime = time();
$add = $con->query("INSERT INTO likes2 (item_id,ip) VALUES ('$item_id','$ip')");
if ($add) {
$check = $con->query("SELECT item_id FROM likes2 WHERE item_id='$item_id'");
$number = mysqli_num_rows($check);
sleep(1);
echo 'Liked <span>'.$number.'</span>';
}
} else {
echo 0;
}
} else {
echo 0;
}
$con->close();