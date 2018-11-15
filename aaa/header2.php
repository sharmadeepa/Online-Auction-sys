



<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>online auction </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
          
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<style>
  .img {
    border: 0;
    width: 150px;
    height: 150px;
}
</style>
<body>
  <header id="header">
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



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
                                    <span class="r"></span>Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span>
                                </a>                            
                                
                                    <ul role="menu" class="sub-menu">
                                    <li><a href="logout.php"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            
                            </ul>
                            </li>
                            <?php } }else{ ?>
                            <li><a href="login.php" >Login</a></li>
                            <?php } ?>
                                                        <!-- <li class="dropdown">
                                <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span>Welcome &nbsp;&nbsp;admin <span class="caret"></span>
                                </a>                            
                                
                                    <ul role="menu" class="sub-menu">
                                    <li><a href="logout.php"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            
                            </ul>
                            </li> -->
                            
                    
 


                            <li><a href="index.php" >Home</a></li>
                             <li><a href="registration.php" >Register</a></li> 
                              <li><a href="aboutus.php" >About us</a></li>


 


                            
                            

<!-- <li><a href="" >Tracking</a></li>
 -->

                              







                           
                            
                        </ul>
                    </div>
                </div>
                

                <hr>