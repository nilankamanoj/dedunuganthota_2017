<?php
$host = "localhost";
$dbname = "test";
$username = "newuser";
$password = "password";
$con = new mysqli($host, $username, $password,$dbname);
return $con;

?>