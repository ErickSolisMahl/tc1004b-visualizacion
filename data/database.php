<?php
    // Database credentials
    $servername = "den1.mysql4.gear.host";
    $username   = "tc1004berick";
    $password   = "Fh07hXm?A8T_";
    $dbname     = "tc1004berick";
    $tbname     = "sensor";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>