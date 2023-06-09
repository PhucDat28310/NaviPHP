<!-- them quy tu thien cua trang admin -->
<?php
  require_once "header.php";
 ?>
<style type="text/css">
[type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label 
{
  background: red;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
    font-family: 'Poppins', sans-serif;
    font-size: 10px;
  font-weight: 1000;
  margin-bottom: 1rem;
  outline: none;
  padding: 1rem 20px;
  position: relative;
  transition: all 0.3s;
  vertical-align: middle;
}
  .btn-1 {
    background-color: #f79159;
    box-shadow: 0 6px darken(#f79159, 10%);
    transition: none;
  }
    .hover {
      box-shadow: 0 4px darken(#f79159, 10%);
      top: 2px;
    }
  
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file{
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
#img-upload{
    width: 100%;
}

</style>

<div style="margin-left: 60px;" class="col-md-11 content">
           <?php
          if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
            echo "<p style='color:green;'>Requested admin about your proposal successfully</p>";
             unset($_SESSION['success']);
           }
            ?>
           <form class="form-horizontal reg-form" action="charityCheck.php" method="post"  enctype="multipart/form-data" id="uploadForm">
            <div class="form-group form-group-md">
               <label class="col-md-2 control-label">Người gây quỹ</label>
               <div class="col-md-6">
                <input class="form-control" type="text" required
                  placeholder="Name of the fund raiser" value=<?php echo $_SESSION['user']?> readonly name="founder">
                </div>
              </div>

                 <div class="form-group form-group-md">
                   <label class="col-md-2 control-label">Tên quỹ từ thiện</label>
                       <div class="col-sm-6">
                         <input class="form-control" type="text" required
                                placeholder="Charity Name" maxlength="50" name="c_name">
                       </div>
                 </div>
                <div class="form-group form-group-md">
                 <label class="col-md-2 control-label">Mục đích của quỹ từ thiện</label>
                 <div class="col-md-6">
                  <input class="form-control" type="text" required
                    placeholder="Ví dụ: Trồng cây gây rừng, trẻ mồ côi, người già neo đơn,..." maxlength="200" name="c_purpose">
                  </div>
                </div>
                <div class="container">
                <div class="col-md-2 control-label">
                    <input type="file" name="fileToUpload" id="file" />
                    <label for="file" class="btn-1">Chọn ảnh</label>
                </div>
                </div><br>

                <div class="form-group">
                       <div class="col-md-6 col-sm-offset-1">
                         <button type="submit" name="submit" value="add" class="btn btn-info">Thêm quỹ từ thiện</button>
                       </div>
                 </div>
           </form>
         </div>
     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(5)').addClass("active");
         $("form").submit(function(e){
           $sdate = new  Date( $("input:first").val() );
           $edate = new Date( $("input:odd").val() );
           if($sdate > $edate) {
             e.preventDefault();
             $('p#error').text("Date range is invalid").show().fadeOut(2101);
           }
         });


function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#file").change(function () {
    filePreview(this);
});


     });
     </script>
   </body>
</html>
