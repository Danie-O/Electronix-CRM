<?php include('../includes/server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

        <style>
        /* Main content */
        .main {
            margin-top: 10px; /* Add a top margin to avoid content overlay */
        }
        </style>
    </head>

    <body>

        <center>
            <div style="color:white"></div>
            <img src="../assets/images/logo2.png" class="logo">
            <h1 class="heading">Electronix, Inc.</h1>
            <p class="sub-heading">World-class engineering solutions @YOUR FINGERTIPS</p>
        </center>

        <div class="icon-bar">
            <a href="./electronixloginpage.php">Home</a> 
            <a class="active" href="./electronixregisterpage.php">Register</i></a> 
            <a href="./Contact Us.html"><i class="fa fa-address-card"></i></a>
        </div>

        <div class="div1">
        </div>
        <div class="main">
            <center class="login" >
                <h1>Enter your details to register</h1>
                <form method="POST" action="electronixregisterpage.php">
                    <?php include('../includes/errors.php'); ?>
                    <input type="text" name="Firstname" placeholder="First name" >
                    <br><br>                        
                    <input type="text" name="Lastname" placeholder="Last name">
                    <br><br>
                    <input type="text" name="email" placeholder="Email address">
                    <br><br>
                    <input type="password" name="password" placeholder="Password">
                    <br><br>            
                    <?php
                    ?>
                    </select><input type="submit" name="submit"/>
                    <p>Already have an account? <a href="electronixloginpage.php">Click to login</a>.</p>
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