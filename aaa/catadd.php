

<?php

include "admin.php";
?>
<!DOCTYPE html>
<html>
<head>
 
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">


    <?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "onlineauction");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
           
            if (mysqli_query($link, "insert into cat values('','$_POST[type]')") == true)
            {
                echo"<script>alert('Register  successfully  ');</script>";
                echo"<script>window.location='index.php'</script>";
            }else{
                echo"<script>alert('couldn't register');</script>";
    echo"<script>window.location='registration.php'</script>";
            }
        }
        ?> 
</head>

<body>
  
  
 

 <form name="form1" action="" method="post" enctype="multipart/form-data">
    <table border="1" width="20%">
          
                    <tr>
                    <br>
                    <br>
                    
                        <td width="30%">catagory</td>
                        <td width="70%"><input type="text" required name="type" size="55" value="" required></td>
                    </tr>
                    <tr>
                       
                    
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="Submit"></td>
                    </tr>


                </table>


            </form>         
</body>
</html>