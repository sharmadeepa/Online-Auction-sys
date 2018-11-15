<h2>list of bidder for this product</h2>


<div class="table-responsive">

                    <table class="table table-bordered">
                        <tr>
                          <th width="20%"> id</th>
               
                          <th width="20%">price</th>
                          
       
                          
                        </tr>
<?php 
$id=$_GET['id'];
$query="SELECT * FROM newbid where id='$id'";
$result=mysqli_query($connect, $query);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result))
{ ?>




                      <tr>
                                        <td> <?php echo $row["userid"]; ?></td>
                               
                                        <td> <?php echo $row["bidamt"]; ?></td> 
 
                                       
                                      
                                        
                                        
                                        
                                        
</tr>
                  
    <?php 
    $userid=$row["userid"];

$bidamt = $row["bidamt"];


// $expected_delivery_date=$row["expected_delivery_date"];

  }
} ?>
         
</table>
</div>
</div>
</div>