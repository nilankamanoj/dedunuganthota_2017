<?php
$con = mysqli_connect('localhost', 'newuser', 'password')or die("cannot connect");
mysqli_select_db($con,'test')or die("cannot select DB");