<?php

function get_real_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function check_ip($item_id,$ip,$con) {

$query = $con->query("SELECT * FROM likes WHERE item_id='$item_id' AND ip='$ip' LIMIT 1");
$likes = mysqli_num_rows($query);
return $likes;
}

function likes($item_id,$con) {
//$con = new mysqli('localhost', 'newuser', 'password','test');
$query = $con->query("SELECT * FROM likes WHERE item_id='$item_id'");
$likes = mysqli_num_rows($query);
return $likes;
}