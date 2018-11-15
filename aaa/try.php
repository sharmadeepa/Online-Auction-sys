<?php
 include "admin.php";
?>





<br>
<hr>



<section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="admin.php">Home</a></li>
                   <li><a href="pick.php">Manifest</a></li>

                  <li class="active">Add manifest </li>
                </ol>
            </div>




<?php

require_once 'dbconnection.php';
?>

    


     <h2 align="center" style="color: orange">Add Manifest</h2>
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <tr>
                          <th width="20%"> id</th>
               
                          <th width="20%">image</th>
                          
                            <th width="20%">name</th>
                          
                        </tr>


                      
                   
               
           
                                  






                    <?php
                    $id=$_GET['id'];
                    $query = "SELECT * FROM bid where id='$id'";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>






                        






                      <tr>
                                        <td> <?php echo $row["id"]; ?></td>
                               
                                        <td> <?php echo $row["pimage"]; ?></td> 

                                          <td> <?php echo $row["pname"]; ?></td> 
                                       
                                      
                                        
                                        
                                        
                                        
</tr>




                                       
                                
                 
                    
    <?php 
    $id=$row["id"];

$pimage = $row["pimage"];
$pname = $row["pname"];

// $expected_delivery_date=$row["expected_delivery_date"];

  }
} ?>
         
</table>
</div>
</div>
</div>




 
           



                      <form action="confirm.php" method="post">
<div class="box">



<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="hidden" name="pimage" value="<?php echo $pimage; ?>">
<input type="hidden" name="pname" value="<?php echo $pname; ?>">
 
  
  <tr>
    <td>
      <input type="text" name="bidamt">
    </td>
  </tr>
   
  
 <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
                        
        
         
                    </tr>


    




</div>

</form>

<?php
include "footer.php";
?>