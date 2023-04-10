<?php include('../includes/server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="header">
            <center>
            <img src="../assets/images/logo2.png" class="logo">
            <h1 class="heading">Electronix Inc.</h1>
            <p class="sub-heading">World-class engineering solutions @YOUR FINGERTIPS</p>
            </center>  
        </div>    

        <div class="icon-bar">
            <a class="active" href="./electronixloginpage.php">Home</a> 
            <a href="./electronixregisterpage.php">Register</i></a> 
            <a href="./Contact Us.html"><i class="fa fa-address-card"></i></a>
        </div>

        <div class="div1">
        </div>
            
        <div>
            <center class="login" >
                <h1>Please enter your login details</h1>
                    <form method="POST" action="electronixloginpage.php">
                        <?php include('../includes/errors.php'); ?>
                        
				        <input type="text" name="email" placeholder="Email" >
                        <br><br>
                        
                        <input type="password" name="password" placeholder="Password">
                        <br><br>
                        
                        <input type="submit" name="login_user">
                        <p>Don't have an account? <a href="electronixregisterpage.php">Sign up now</a>.</p>
                    </form>  
            </center>
        </div>
            
            

        <footer>
            <div>
                <marquee><p>ELECTRONIX 2021</p></marquee>
            </div>
        </footer> 
        
    </body>
</html>

