<?php
  require_once "header.php";
 ?>
         <div style="margin-left: 60px;" class="col-md-11 content">
           <?php
           if(isset($_SESSION['form']) && !empty($_SESSION['form'])){
             echo "<p style='color:red;'>
              Please check and then click.</p>";
              unset($_SESSION['form']);
           }
           else if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
             echo "<p style='color:green;'>
              Successfully deleted.</p>";
              unset($_SESSION['success']);
           }
            ?>
             <div>
             <form class="form-inline" method="post" action="editCharity.php" >
             <table  id="example" class="table table-striped">
                 <thead>
                   <tr>
                    <th></th>
                     <th>Người gây quỹ</th>
                     <th>Tên quỹ từ thiện</th>
                     <th>Mục đích</th>
                     <th>Src</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
                       <?php
                           $query="select * from charities";
                           $result=mysqli_query($link, $query);
                           while($row=mysqli_fetch_array($result))
                           {
                          ?>
                               <tr>
                                      <td>
                                        <input type="checkbox" name="selected[]"
                                          value=<?php echo $row['id']?> />
                                      </td>
                                       <td><?php echo $row['founder']?></td>
                                       <td><?php echo $row['name']?></td>
                                       <td><?php echo $row['purpose']?></td>
                                       <td><?php echo $row['cover']?></td>
                               </tr>
                           <?php
                           }
                           ?>
               </tbody>
               </table>
               <input type="submit" class="btn btn-primary btn-md"
                      value="delete" name="delete">
             </form>
             </div>
         </div>
     </div>
     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(4)').addClass("active");
     });
     </script>
   </body>
</html>
