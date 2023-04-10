<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="flex.js"></script>

        <style>
            #footer {
                position: fixed;padding: 10px 10px 0px 10px;
                bottom: 0;width: 100%;
                /* Height of the footer*/height: 50px;  
            }
        </style>
        <style>
        body {margin:0;}
        .icon-bar {width: auto;background-color: rgb(117, 116, 116);overflow: auto;}
        .icon-bar a {float: left;width: 20%;text-align: center;padding: 5px 0;transition: all 0.3s ease;color: white;font-size: 25px;}
        .icon-bar a:hover {background-color: #000;}
        .active {background-color: green;
        /* Main content */
        .main {
        margin-top: 10px; /* Add a top margin to avoid content overlay */}
        }
        </style>
    </head>

    <body style="background-color: #E0FFFF">

        <center>
            <div style="color:white"></div>
            <img src="logoo.png" style="width: 50px; height: 50px;float: left">
            <h1 style="color: blue; background-color: white;font-family: 'Times New Roman', Times, serif;font-size: xxx-large;">Electronix, Inc.</h1>
            <p style="color: green">World-class engineering solutions @YOUR FINGERTIPS</p>
        </center>

            <div class="icon-bar">
                <a href="./electronixloginpage.php">Home</a> 
                <!--<a href="./electronixselect.php"><i class="fa fa-bookmark"></i></a>-->
                <a class="active" href="./electronixregisterpage.php">Register</i></a> 
                <a href="./Contact Us.html"><i class="fa fa-address-card"></i></a>
            </div>

            <div class="div1">
            </div>
            <div class="main">
            
                <center class="login" >
                    <h1>Enter your details to register</h1>
                        <form method="POST" action="electronixregisterpage.php">
                            <?php include('errors.php'); ?>
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
        
            
            <div>...</div>
            <footer>
                <div style="background-color: #2868c7;" id="foooter">
                <marquee><p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: medium;color: white;">ELECTRONIX 2021</p></marquee>

                </div>
            </footer> 
        
    </body>
</html>