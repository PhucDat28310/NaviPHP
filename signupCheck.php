<?php
require 'connect.php';
if(isset($_POST['submit']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $query = "insert into users values('$user','$pass','$phno','$email','$address')";
    $result = mysqli_query($link, $query);
    if (!$result) {
        echo "<b>
        Các lỗi thường gặp khi đăng kí :- </b><br><br>
        1.Tên người dùng đã tồn tại.<br><br>
        2.Email hoặc số điện thoại đã tồn tại.<br><br>
        3.Sử dụng ít hơn 200 kí tự để mô tả địa chỉ của bạn.<br><br>
        <a href='signup.php'>Thử đăng kí lại</a>
        ";
    die();
    }
    $_SESSION['success']='added';
    header("location: signup.php");
}
?>
