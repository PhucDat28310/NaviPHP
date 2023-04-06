<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
<link rel="stylesheet" href="invoice.css">
<?php
    if(isset($_POST['submit']))
    {
        $dname = $_POST['dname'];
        $amount=$_POST['amount'];
        $pur = $_POST['pur'];
        $addr = $_POST['addr'];
        $cell=$_POST['cell'];
        $date=$_POST['date'];
        $pay=$_POST['pay'];
        $paytype=$_POST['paytype']; 
        $r =rand(10000,99999);
        echo '<div class="invoice">';
        echo '<div class="invoice-logo">';
        echo '</div>';
        echo '<div class="invoice-sec-1">';
        echo '<div class="invoice-sec-1-ref">';
        echo '<div class="ref-no">';
        echo "<p>Nhà tài trợ - <span>$dname</span></p>";
        echo "<p>Số hoá đơn: <span>BASIS-2019/UCBL/$r<br><br>Số điện thoại: $cell</span></p>";
        echo '</div>';
        echo '<div class="to-invoice">';
        echo '<p>To</p>';
        echo "<p>Mái ấm tình thương</p>";
        echo "<p>Mục đích: <span>$pur</span></p>";
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-sec-1-date">';
        echo "<p>Ngày: <span>$date</span></p>";
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-banner">';
        echo '<div class="banner-d">';
        echo '<p>Hoá đơn</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-table">';
        echo '<div class="invoice-table-container">';
        echo '<div class="invoice-table-data">';
        echo '<div class="invoice-table-sl invoice-table-sl-h">';
        echo '<strong> <p>Số</p></strong>';
        echo '</div>';
        echo '<div class="invoice-table-desc invoice-table-desc-h">';
        echo '<strong><p>Mô tả</p></strong>';
        echo '</div>';
        echo '<div class="invoice-table-amount invoice-table-amount-h">';
        echo '<strong><p>Số tiền ủng hộ</p></strong>';
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-table-data">';
        echo '<div class="invoice-table-sl">';
        echo '<p>01</p>';
        echo '</div>';
        echo '<div class="invoice-table-desc">';
        echo "<p>Quyên góp ở website thông qua phương thức thanh toán $paytype cho quỹ từ thiện - $pur</p>";
        echo '</div>';
        echo '<div class="invoice-table-amount">';
        echo "<p>$amount</p>";
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-table-footer">';
        echo '<div class="invoice-total">';
        echo '<p>Tổng số tiền</p>';
        echo '</div>';
        echo '<div class="invoice-total-amount">';
        echo "<p>$amount /-</p>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="invoice-declaration">';
        echo '<p>Cảm ơn bạn đã ủng hộ cho chúng tôi !<br><br>Số tiền bạn ủng hộ sẽ được chúng tôi giúp đỡ những người cần được giúp đỡ. Chúng tôi rất biết ơn sự hào phóng của bạn cho tổ chức khiêm tốn của chúng tôi.</p>';
        echo '</div>';
        echo '<div class="invoice-greeting">';
        echo '<p>Trân thành cảm ơn bạn</p>';
        
        echo '<p>Quản trị viên</p>';
        echo '<p>Mai Lê Phúc Đạt </p>';
        echo '<p>Tổ chức từ thiện - Mái ấm tình thương</p>';
        echo '</div>';
        echo '</div>';
    }

?>

<script>
setTimeout(function(){print(); }, 4000);
</script>