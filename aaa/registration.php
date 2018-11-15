
<?php

include "header.php";
?>

<?php
include "header2.php"

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
            $v1 = rand(1111, 9999);
            $v2 = rand(1111, 9999);

            $v3 = $v1 . $v2;

            $v3 = md5($v3);
            $fnm = $_FILES["pimage"]["name"];
            $dst = "./product_image/" . $v3 . $fnm;
            $dst1 = "product_image/" . $v3 . $fnm;
            move_uploaded_file($_FILES["pimage"]["tmp_name"], $dst);


            if (mysqli_query($link, "insert into user values('','$_POST[citizenship_no]','$dst1','$_POST[firstname]'  , '$_POST[lastname]','$_POST[address]','$_POST[contact_no]','$_POST[email]','$_POST[username]','$_POST[password]',' ')") == true)
            {
                echo"<script>alert('Register  successfully thankyou for registration with us ');</script>";
                echo"<script>window.location='index.php'</script>";
            }else{
                echo"<script>alert('couldn't register');</script>";
    echo"<script>window.location='registration.php'</script>";
            }
        }
        ?> 
</head>
<body>
    <div class="header">
        <h1>Please register here</h1>
    </div>

 <form name="form1" action="" method="post" enctype="multipart/form-data">
    <table border="1" width="20%">
            
                    <tr>
                        <td width="30%">Citizenship Number</td>
                        <td width="70%"><input type="text" required name="citizenship_no" size="55" value="" required></td>
                    </tr>
                    <tr>
                        <td width="30%">Citizenship image</td>
                      <td><input type="file" required name="pimage" required></td>
                    </tr>
                    <tr>
                        <td width="30%">First Name</td>
                        <td><input type="text" required name="firstname" size="55"  value="" required></td>
                    </tr>
                    <tr>
                        <td width="30%">Last Name</td>
                        <td><input type="text" required name="lastname"   size="55"   value="" required></td>
                    </tr>
                    <tr>
                        <td width="30%">Address</td>
                        <td><input type="text" required name="address"   size="55"   value="" required></td>
                    </tr>
                    <tr>
                        <td width="30%">Contact Number</td>
                        <td><input type="tel" required name="contact_no"   size="55"   value="" required></td>
                    </tr>
                <tr>
                        <td width="30%">Email</td>
                        <td><input type="email" required name="email"   size="55"   value="" required></td>
                    </tr>
                    <tr>
                        <td width="30%">Username</td>
                        <td><input type="text" required name="username"   size="55"   value="" required></td>
                    </tr>
                    <tr>
                        <td width="30%">Password</td>
                        <td><input type="password" required name="password"   size="55"   value="" required></td>
                    </tr>
                    
                
                    
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit1" value="Submit"></td>
                    </tr>


                </table>


            </form>         
</body>
</html>