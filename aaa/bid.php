<?php







include('dbconnection.php');
// $link = mysqli_connect("localhost", "root", "");
//         mysqli_select_db($link, "cms");

        if (isset($_POST["submit1"])) {
           // $add = $_POST['address'];

 $pimage = $_POST['pimage'];
$pcat= $_POST['pcat'];
$pname = $_POST['pname'];
$minbid = $_POST['minbid'];
$bidendtime = $_POST['bidendtime'];








            

  
    
 




 $iquery = "INSERT INTO bid VALUES('','$pimage','$pcat','$pname','$minbid','$bidendtime')";
        if(mysqli_query($connect,$iquery)==true)
        {
            
                echo"<script>alert('successfully added to bid');</script>";
                include 'productrequest.php';
               
              
               }
  //              else{
  //               echo"<script>alert('There is some problem');</script>";
    // echo"<script>window.location='index.php'</script>";
  //           }
            
        }
        


 ?>

