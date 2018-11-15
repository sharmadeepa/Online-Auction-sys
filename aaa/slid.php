<div class="menu_header_right"> </div>
<div id="Menu_content"> <!--<a class="menu_item" href="?page=home"><span>--><!-- Start of Page Search -->
              <!--   <h5>&nbsp;</h5>
                <form action="search.php" method="POST" enctype="multipart/form-data">

                    <input type="text" name="search_this"  onfocus=
                           "if (this.value == 'search')
                                   {
                                       this.value = '';
                                   }
                           "
                           onBlur=
                           "if (this.value == '')
                                   {
                                       this.value = '';
                                   }
                           "/>
                    <input name="submit" type="submit" class="button" id="sub" value="Search" />
                </form>
                <h5>&nbsp;</h5> -->
                <!--</form>-->
                <!-- End of Page Search --></span></a><br>
            </div>
            <style>
.mySlides {
  padding: 0;
        width: 800px;
        height: 350px;
        display: block;
        margin: 0 auto;
        position: relative;
</style>
<body>



<div class="w3-content w3-section" >
  <img class="mySlides" src="11.jpg" >
  <img class="mySlides" src="2.jpg" >
  <img class="mySlides" src="3.jpg" >
  <img class="mySlides" src="1.jpg">
<!--   <img class="mySlides" src="five.jpg" >
  <img class="mySlides" src="six.jpg" >
  <img class="mySlides" src="seven.jpg" >
  <img class="mySlides" src="eight.jpg">
  <img class="mySlides" src="nine.jpg" >
  <img class="mySlides" src="ten.jpg" > -->
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
