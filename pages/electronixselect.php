<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="flex.js"></script>

        <style>
            #footer {
                position: fixed;
                padding: 10px 10px 0px 10px;
                bottom: 0;
                width: 100%;
                /* Height of the footer*/ 
                height: 50px;
                
            }
        </style>
        <style>
        body {margin:0;}
        .icon-bar {width: auto;background-color: rgb(117, 116, 116);overflow: auto;}
        .icon-bar a {float: left;width: 20%;text-align: center;padding: 12px 0;transition: all 0.3s ease;color: white;font-size: 25px;}
        .icon-bar a:hover {background-color: #000;}
        .active {background-color: green;}
        </style>
    </head>

    <body style="background-color: #E0FFFF">

            <center>
                <img src="logoo.png" style="width: 50px; height: 50px;float: center">
                <h1 style="color: blue; background-color: white;font-family: 'Times New Roman', Times, serif;font-size: xxx-large;">Electronix, Inc.</h1>
                <p style="color: green;">World-class engineering solutions @YOUR FINGERTIPS</p>
               
            </center>

            <div class="icon-bar">
                <a class="active" href="./electronixloginpage.php">Home</a> 
                <a href="./">About Us</a>
                <a href="./Contact Us.html"><i class="fa fa-address-card"></i></a>
            </div>

            <center>
            <div >
                
                <h2 style="font-size: x-large; color:green">Welcome to Electronix, Inc. complaint management system!</h2>
            </div>
            <h1>Please select an action</h1>
            <form method="POST" action="electronixselect_process.php">
                <select name="view">
                <option value="0" >select dropdown option</option>
                
                <option value="1">VIEW PENDING CALLS</option>   
                <option value="2">SHOW UNATTENDED CALLS</option>
                </select><input type="submit" name="submit"/>
            </form>
          
            <?php
                //session_start();
                //if(!isset($_SESSION["username"])){
                 //   header("Location: http://localhost/ELECTRONIX/electronixloginpage.php");
                //}
            ?> 
            
            </center>

            <div style="background-color: white;height: 500 px;">
                <h1></h1>
            </div>
            <h2><a style="color: blue;font-size:large;"href= "http://localhost/ELECTRONIX/logout.php">LOGOUT</a></h2>
  
            <footer>
                <div style="background-color: blue;" id="footer">
                <marquee><p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: medium;color: white;">ELECTRONIX 2021</p></marquee>

            </div>
            </footer> 
        
    </body>
</html>