

<?php
include "header.php";
?>


<?php

require_once 'dbconnection.php';
?>



                    <table class="table table-bordered">
                        <tr>
                          <th width="20%">Product Image</th>
                            <th width="20%">Product Category</th>
                            <th width="20%">Product Name</th>
                            <th width="20%">Minimum Price</th>
                            <th width="20%">Bid Ending Date</th>
                        </tr>
<?php
                    $id=$_GET['id'];
                    $query = "SELECT * FROM product where id='$id'";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>






                        






                      <tr>
                                        
                                        <td> <?php echo $row["pimage"]; ?></td> 
                                       <td> <?php echo $row["pcat"]; ?></td>
                                       <td> <?php echo $row["pname"]; ?></td>
                                       <td> <?php echo $row["minbid"]; ?></td>
                                        <td><?php echo $row["bidendtime"]; ?></td>
                                     
                                        
                                        
                                        
                                        
</tr>




                                       
                                
                 
                    
    <?php 
    $pimage=$row["pimage"];
$pcat = $row["pcat"];
$pname = $row["pname"];
$minbid = $row["minbid"];
$bidendtime=$row["bidendtime"];

  }
} ?>
         
</table>
</div>
</div>
</div>
<form action="bid.php" method="post">
<div class="box">



<input type="hidden" name="pimage" value="<?php echo $pimage; ?>">
<input type="hidden" name="pcat" value="<?php echo $pcat; ?>">
<input type="hidden" name="pname" value="<?php echo $pname; ?>">
 <input type="hidden" name="minbid" value="<?php echo $minbid; ?>">
<input type="hidden" name="bidendtime" value="<?php echo $bidendtime;?>">

<tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
                         
                    </tr>
                    </div>
                    </form>
                    
