<?php
    include "header.php";
    ?>

<?php
    include "header2.php";
    ?>




<style>
.box{
    width: 90%;
    border: 0px solid gray;
    padding: 25px;
    margin: 25px;
    margin-left: 20px;
    
}

</style>


    
 

<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "onlineauction");
?>

<hr>




<div class="grid_10">
    <div class="box round first">
       

        <div class="block">

 




<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "onlineauction");
?>

<div class="grid_10">
    ;
        <div class="block">

            <?php
            $res = mysqli_query($link, "select * from bid where pcat='watch' ");
            echo "<table border='1'>";
            echo "<tr>";


echo "<th>"; echo "Image"; echo "</th>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "Minimum Bid($)"; echo "</th>";
 echo "<th>"; echo "Action"; echo "</th>";


           

            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                


echo "<td>";?> <img src="<?php echo $row["pimage"];?>" height="200px" width="200px"> <?php echo "</td>";
               
                echo "<td>"; echo $row["pname"]; echo "</td>";
  echo "<td>"; echo $row["minbid"]; echo "</td>";
  echo "<td>"; ?><a href="bidhere.php ?id= <?php echo $row["id"]; ?>">Click Here To Bid</a></a><?php echo "</td>";





                echo "</tr>";
            }
            echo "</table>";

            ?>


</div>
</div>
</div>


</div>
</div>
</div>



  
  