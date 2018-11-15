<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "onlineauction");
$id=$_GET ["id"];

$res = mysqli_query($link, "select * from product where id=$id");

mysqli_query($link,"delete  from product   where id=$id");
?>
<script type="text/javascript">
	window.location="productrequest.php";
</script>