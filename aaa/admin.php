

<?php

session_start();
if ($_SESSION['status'] != 'logedin') {
    header('location:login.php');
}
?>


<?php
include "header.php";
?>
<?php
include "header1.php";
?>

         <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
               <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <?php
                            if(isset($_SESSION['status'])){
                                
                            if($_SESSION['status']=='logedin'){
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class=" "></span>Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span>
                                </a>                            
                                
                                    <ul role="menu" class="sub-menu">
                                    <li><a href="logout.php"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            
                            </ul>

                            </li>

                            <?php } }else{ ?>
                            <li><a href="login.php" >Login</a></li>
                            <?php } ?>

                    


                            <li><a href="admin.php" >Home</a></li>
                              <li><a href="productrequest.php" >Product Requested</a></li>
                              <li><a href="catadd.php">Add Category</a></li>
                              <li><a href="adminedit.php">Edit Profile</a></li>

<!-- 
                              <li class="dropdown"><a href="catadd.php"> Add Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="catadd.php"></a></li>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li> 
                                         -->
                                        
                                    </ul>
                                </li> 










                           
                            
                        </ul>
                    </div>
                </div>
                