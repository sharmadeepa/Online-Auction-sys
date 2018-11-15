

<?php
include "user.php";
?>




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


            if (mysqli_query($link, "insert into product values('','$dst1','$_POST[pcat]','$_POST[pname]'  , '$_POST[minbid]','$_POST[bidendtime]')") == true)
            {
                echo"<script>alert('Product added successfully!');</script>";
                echo"<script>window.location='index.php'</script>";
            }else{
                echo"<script>alert('couldn't add product.');</script>";
                echo"<script>window.location='add_product.php'</script>";
            }
        }
        ?> 
<form  name="form1" action="" method="post" enctype="multipart/form-data">
                <table align="center" border="1" width="100%">
                   
                   <tr>
                        <td width="30%">Product image</td>
                      <td><input type="file" required name="pimage" required></td>
                    </tr>
                   
                    
                    <tr>
                        <td width="30%">Product Name</td>
                        <td><input type="text" required name="pname" size="55"  value="" required></td>
                    </tr>
        
                      



        <td width="10%">catagory</td>
                        <td>
                            <select id="id" name="pcat" required o>
                                <option value="" disabled selected>Please Select</option>
<?php
require_once 'dbconnection.php';
$query = "SELECT * FROM cat";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
                                        <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
                                    <?php }
                                } ?>
                            </select>
                        </td>


                    <tr>
                        <td width="30%">Minimum Price To Start Bidding($)</td>
                        <td><input type="text" required name="minbid"   size="55"   value="" required></td>
                    </tr>
                    <tr>
                        <td width="30%">Bid Ending Time</td>
                        <td><input style="color: Black" type="Date" required name="bidendtime"   size="55"   value="" required></td>
                    </tr>
                   
                    
                
                    
                        <td colspan="2" align="center"><input style="color: BLACK" type="submit" name="submit1" value="upload"></td>
                    </tr>


                </table>


            </form>         

