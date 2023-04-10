<!DOCTYPE html>
<html>
    <head>
        <title>Pending calls</title>
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
            .icon-bar a {float: left;width: 20%;text-align: center;padding: 5px 0;transition: all 0.3s ease;color: white;font-size: 25px;}
            .icon-bar a:hover {background-color: #000;}
            .active {background-color: green;}
        </style>
        <style>
            table {
            border-collapse: collapse;width: 100%;
            color: #033E3E;font-family: monospace;
            padding-top: 10px; padding-bottom: 10px;
            font-size: 30px;text-align: left;
            }
            #customers td, #customers th{
                border: 1px solid #ddd;
                padding: 8px;
            }
            th {
            background-color: #588c7e;color: white;
            padding-left: 0.2em;
            }
            tr:nth-child(even) {background-color: white}


        </style>
    </head>

    <body style="background-color: #E0FFFF">

        <div style="color:white"></div>
        <img src="logoo.png" style="width: 50px; height: 50px;float: left">
        <h1 style="color: blue; background-color: white;font-family: 'Times New Roman', Times, serif;font-size: xxx-large;">Electronix, Inc.</h1>
        <p style="color: green">World-class engineering solutions @YOUR FINGERTIPS</p>

        <div class="icon-bar">
                <a class="active" href="./electronixloginpage.php">Home</a> 
                <!--<a href="./electronixselect.php"><i class="fa fa-bookmark"></i></a>-->
                <a href="./electronixregisterpage.php">Register</i></a> 
                <a href="./Contact Us.html"><i class="fa fa-address-card"></i></a>
        </div>

        <center><h1 style="color: blue;font-size:xx-large">PENDING CALLS</h1></center>
       
        <form method="POST">
            <table id='customers'>
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Complaint</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th class="table-head">
                        <label
                            for="select_all_checkboxes"
                            class="visuallyhidden"
                            >select</label>
                        <!-- <input type="checkbox" id="select_all_checkboxes" /> -->
                    </th>
                </tr>

                <?php
                    $dbname = "electronix";
                    $conn = new mysqli("localhost", "root", "", $dbname); 

                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);}
                    $sql = "SELECT id,client,complaint,date,location,status  FROM calls  WHERE status='pending'";
                    $result = $conn->query($sql);
                    $i = 0;
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            /*echo "<tr>
                            <td>" . $row["id"]. "</td> 
                            <td>" . $row["client"] . "</td> 
                            <td>". $row["complaint"]. "</td> 
                            <td>". $row["date"]. "</td> 
                            <td>". $row["location"]. "</td> 
                            <td>". $row["status"]. "</td>
                            td><input type="checkbox" value='echo "$row['userid']"; name="id[]"></td>
                            </tr>";*/
                            ?>
                            
                            <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['client']; ?></td>
                            <td><?php echo $row['complaint']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <!-- <td><select name="datafield">
                                <option value="0">...</option>
                                <option value="1">First Name</option>   
                                <option value="2">Last Name</option>
                                <?php
                                ?>
                            </select><input type="submit" name="submit"/></td> -->
                            <td><input type="checkbox" value="<?php echo $row['id']; ?>" name="id[]" id="ferranMessage" type="checkbox" class="delete_checkbox"></td>
                            </tr>
                            
                        <?php
                        }
                            echo "</table>";
                    }
                    else { echo "0 results"; }
                    

                ?>
                </table>

                <br>
                <center>
                <input type="submit" name="submit" value="Mark checked as complete">
                </center>
	        </form>

            <?php
            
			if (isset($_POST['submit'])){
                echo "<div style=\"text-align:center\">";
                echo "<p style=\"color: blue\">Changes made, refresh page...</p>";
                echo "<h5 style=\"color: blue;font-size:x-large; text-decoration:underline\">Recently completed calls:</h5>";
                echo "</div>";
				foreach ($_POST['id'] as $id):
				
                    $sq=mysqli_query($conn,"select * from `calls` where id='$id'");
                    $srow=mysqli_fetch_array($sq);

                    echo "<div style=\"text-align:center\">";
                    echo $srow['client']. " - ". $srow['complaint']. "<br>";
                    echo "<br/>";
                    echo "</div>";
                    
                    $sql = mysqli_query($conn, "update `calls` set status='complete' where id='$id'");
                    // $sql = mysqli_query($conn, "UPDATE 'calls' SET status='complete' WHERE id='$id'");
                    // $srow=mysqli_fetch_array($sql);
				
				endforeach;
                //echo "Please reload page to effect changes";
			}
            ?>
            <div ></div>

            
            <div ></div>
            
            <center><h1><a style="color: blue;font-size:large;" href= "http://localhost/ELECTRONIX/electronixselect.php">Back</a></h1></center>
            <div style="background-color: white;height: 1000 px;"></div>
            
            
            <h3><a style="color: blue;font-size:large;" href= "http://localhost/ELECTRONIX/logout.php">LOGOUT</a></h3>
            <div ></div>
            <div ></div>
            <footer>
                <div style="background-color: #2868c7;" id="footer">
                <marquee><p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: medium;color: white;">ELECTRONIX 2021</p></marquee>
                 </div>
            </footer> 
        

    </body>
</html>



