<?php
 include "header.php";

?>
<?php
include "header2.php";

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<form class="form" method="POST" action="process.php" enctype="multipart/form-data">
        
                <h3 class="header">
                    Login to your Account
                </h3>


 <div class="uname">
                            <label>User name</label>
                            <input type="text"  size="45"  name="username" placeholder="User Name" required><br><br>
                        

                            <label>Password</label>
                            <input type="password"  size="45"  name="password" placeholder="Password" required><br><br>
                       <a href="forgot_password.php">Forget your password</a>
                        <input type="submit" name="submit" class="login" vlaue="Sign-in"><br>
                

                 
                
                </div>
                <p>Not a member? You must register first. <a href="registration.php">Register here</a>
                </p>
                
</form>

</body>
</html>