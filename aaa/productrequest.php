<?php
include "admin.php";
?>


 

<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "onlineauction");
?>



<div style="margin-left:25%" align="center">
<div class="grid_10">
    <div class="box round first" align="center">
        <h2>
            Request</h2><hr>

        <div class="block" >

            <?php
            $res = mysqli_query($link, "select * from bid");
            echo "<table border='2' >";
            echo "<tr>";


echo "<th>"; echo "No.  "; echo "</th>";
echo "<th>"; echo   "   Product Image   "; echo "</th>";
echo "<th>"; echo   "   Product Category   "; echo "</th>";
echo "<th>"; echo   "    Product Name    "; echo "</th>";
echo "<th>"; echo   "    Minimum Price($)  "; echo "</th>";
echo "<th>"; echo   "    Bid Ending Time  "; echo "</th>";
echo "<th>"; echo   "    Costumer Details"; echo "</th>";
echo "<th>"; echo   "    Action"; echo "</th>";




           

            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                



                echo "<td>"; echo $row["id"]; echo "</td>";
  echo "<td>";?> <img src="<?php echo $row["pimage"];?>" height="100" width="100"> <?php echo "</td>";
echo "<td>"; echo $row["pcat"]; echo "</td>";
                echo "<td>"; echo $row["pname"]; echo "</td>";
              echo "<td>"; echo $row["minbid"]; echo "</td>";
                echo "<td>"; echo $row["bidendtime"]; echo "</td>";
                 echo "<td>"; ?> <a style="color: Red" href="#">View Information</a><?php echo "</td>";
 echo "<td>"; ?> <a href="delete.php ?id= <?php echo $row["id"]; ?>">Delete <br>
                                <a href="addbid.php ?id= <?php echo $row["id"]; ?>">add</a></a><?php echo "</td>";




                echo "</tr>";



                
              



                echo "</tr>";
            }
            echo "</table>";

            ?>