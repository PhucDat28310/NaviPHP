<?php
require_once "header1.php";
if(isset($_POST['char']))
{
  $charity=$_POST['char'];
  $query = "select * from charities where id='$charity'";
  $result = mysqli_query($link, $query);
  $row=mysqli_fetch_assoc($result);
  $name=$_SESSION['user1'];
}
else
{
  echo "<meta http-equiv='refresh' content='3;url=charity.php'>";
}
?>
<head>
	<style>
	html,body {
  background-color: RGB(52, 73, 94);
}
</style>
    <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
    </script>
</head>
<body>

<div style="margin-left: 60px;" class="col-md-11 content">
           <?php
           if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
             echo "<p style='color:green;'>
              Ủng hộ thành công ".$_SESSION['success']."'s Thông tin thanh toán<br><span style='color:red'>Nếu bạn đã chọn tùy chọn thanh toán ngay bây giờ, bạn có thể truy cập trang thanh toán của mình và kiểm tra(hàng dựng chưa có ạ).</span></p>";
              unset($_SESSION['success']);
           }

           $x=$_POST['char'];
           $arr=explode(",",$x);
           $founder=$arr[0];
           $purpose=$arr[1];
            ?>

           <form class="form-horizontal reg-form" action="donerCheck.php" method="post">
                 <div class="form-group form-group-md">
                   <label class="col-md-2 control-label">Tên nhà tài trợ</label>
                       <div class="col-sm-6">
                         <input class="form-control" type="text" required
                                placeholder="Doner Name" value="<?php echo $name;?>" name="d_name" readonly>
                       </div>
                 </div>
               <div class="form-group form-group-md">
                 <label class="col-md-2 control-label">Số tiền</label>
                 <div class="col-md-6">
                  <input class="form-control" type="number" required
                    placeholder="Amount Here" name="d_amount">
                  </div>
               </div>
              <div class="form-group form-group-md">
                <label class="col-md-2 control-label">Mục đích</label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" required
                      placeholder="Purpose of donation" value="<?php echo $purpose;?>" name="d_purpose" readonly>
                  </div>
              </div>
              <div class="form-group form-group-md">
                    <label class="col-md-2 control-label">Địa chỉ</label>
                    <div class="col-md-6">
                     <input class="form-control" type="text" required
                            placeholder="Address Here" maxlength="50" name="d_address">
                   </div>
              </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Số điện thoại</label>
                       <div class="col-md-6">
                         <input class="form-control" type="text" required
                                placeholder="ví dụ: 0123456789" name="d_cell">
                       </div>
                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Thanh toán</label>

                       <div class="col-md-6 form-group-md">
                             <select  name="d_pay"  required>
                                  <option value="">Thanh toán</option>
                                  <option value='Thanh toán ngay' >Thanh toán ngay</option>
                                  <option value='Thanh toán sau'>Thanh toán sau</option>
                             </select>
                       </div>
                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Phương thức thanh toán</label>

                       <div class="col-md-6 form-group-md">
                             <select  name="d_paytype" required>
                                  <option value="">Phương thức thanh toán</option>
                                  <option value='ATM' >Thẻ ATM</option>
                                  <option value='Paypal' >Paypal</option>
                                  <option value='VNPay' >VNPay</option>
                                  <option value='Other' >Khác</option>
                             </select>
                       </div>
                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Thanh toán cho</label>
                       <div class="col-md-6">
                         <input class="form-control" type="text" value="<?php echo $founder?>" name="founder" readonly>
                       </div>
                 </div>
                <div class="form-group">
                       <div class="col-sm-offset-2 col-md-10">
                         <button type="submit" name="but" value="set" class="btn btn-default">Ủng hộ ngay</button>
                       </div>
                 </div>
           </form>
         </div>
     </div>


     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(1)').addClass("active");
     });
     </script>
     </script>
   </body>
</html>
