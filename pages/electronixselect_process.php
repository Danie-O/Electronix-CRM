<?php 
    if(isset($_POST['submit'])) 
    { 
        $part = $_POST['view'];
        switch ($part) 
        { 
            case "1" : header( "Location: http://localhost/ELECTRONIX/pendingview.php" );
                break;
            case "2" : header( "Location: http://localhost/ELECTRONIX/unattendedview.php" );
                break;
            
            default: echo "Select a valid option";
                break;    

        }
    }
?>