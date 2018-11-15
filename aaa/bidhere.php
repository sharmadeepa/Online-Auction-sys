
<?php

session_start();
if ($_SESSION['status'] != 'logedin') {
    header('location:login.php');
}
?>


<?php
include "header.php";
?>
<?php
include"header2.php";
?>

<?php
include "dbconnection.php";
?>











<?php 
$id=$_GET['id'];
$query="SELECT * FROM bid where id='$id'";
$result=mysqli_query($connect, $query);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result))
{ ?>


<div class="col-sm-4">
                                <form method=" " action=" ">
                                    <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
                                        <img src="<?php echo $row["pimage"]; ?>" class="img-responsive" >
                                         <h5 class="text-info">Product id:<?php echo $row["id"]; ?></h5>
                                        <h5 class="text-info">Product Name:<?php echo $row["pname"]; ?></h5>
                                         <h5 class="text-info">Minimum Bid($):<?php echo $row["minbid"]; ?></h5>
                                          <h5 class="text-info">Bid End Time:<?php echo $row["bidendtime"]; ?></h5>
                                        
                                       
                                        
                                    </div>
                                </form>
                            </div>








<?php }
}
?>


 



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
   
  <div class="col-xs-2">
                     <input  class="form-control" name="bidtime" type="" value='<?php echo date("Y-m-d  H:i:s"); ?>' readonly>
                </div>
    
   


  
 <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
                        
        
         
                    </tr>


    




</div>

</form>