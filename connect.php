<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'charity';
$link = mysqli_connect("$hostname", "$username", "$password", "$db");

date_default_timezone_set('Asia/Ho_Chi_Minh');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
