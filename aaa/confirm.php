


<?php

session_start();
if ($_SESSION['status'] != 'logedin') {
    header('location:login.php');
}
?>





<?php
include('dbconnection.php');
        if (isset($_POST["submit1"]))
{
     

$user_id=$_SESSION['userid'];
$productid=$_POST['id'];

$bidamt=$_POST['bidamt'];
$bidtime=$_POST['bidtime'];

$iquery = "INSERT INTO newbid VALUES('','$user_id','$productid','$bidamt','$bidtime')";
       
            

        if(mysqli_query($connect,$iquery)==true)
        {
            
                echo"<script>alert('Your bidding has been successfull ');</script>";
                 echo "<td>"; ?><a href="bidder.php ?id= <?php echo $row["id"]; ?>">see list</a></a><?php echo "</td>";

               
              
        }
}
?>

