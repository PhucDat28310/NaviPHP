<?php
require_once "connect.php";
if($_POST['fileToUpload']==NULL)
{
  $target_dir = "chars/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "Tập tin là 1 hình ảnh - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "Tập tin không phải là 1 hình ảnh.";
      $uploadOk = 0;
      die();
    }
  }
  if (file_exists($target_file)) {
    echo "Xin lỗi, tên tập tin đã tồn tại. Đổi tên và tải tệp của bạn lên.";
    $uploadOk = 0;
    die();
  }
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Xin lỗi, tệp của bạn quá lớn.";
    $uploadOk = 0;
    die();
  }
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Chỉ cho phép các tệp .JPG, .JPEG, .PNG & .GIF.";
    $uploadOk = 0;
    die();
  }
  if ($uploadOk == 0) {
    echo "Tệp của bạn chưa được tải lên.";
    die();
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
      echo "Đã xảy ra lỗi khi tải tệp của bạn lên.";
    }
  }
  $cover=$target_file;
}
else
{
  $cover='chars/default.jpg';
}
$founder=$_POST['founder'];
$name=$_POST['c_name'];
$purpose=$_POST['c_purpose'];
$id=NULL;
$query="insert into raise(`founder`,`name`,`purpose`,`cover`,`id`) values('$founder','$name','$purpose','$cover','$id')";
if($_POST['submit']=="add")
{
  $query="INSERT INTO `charities`(`id`, `name`, `purpose`, `founder`, `cover`) VALUES ('$id','$name','$purpose','$founder','$cover')";
  $result=mysqli_query($link,$query);
  if (!$result) {
    echo "error";
    die();
  }
  $_SESSION['success']='added';
  header("location: addCharity.php");
}
else
{
  $result=mysqli_query($link,$query);
  if (!$result) {
    echo "Tên quỹ từ thiện đã được sử dụng vui lòng sử dụng tên khác";
    die();
  }
  $_SESSION['success']='added';
  header("location: raisefund.php");
}
?>
