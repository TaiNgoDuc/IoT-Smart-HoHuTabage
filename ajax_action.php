<?php

    $serverName = "fdb28.awardspace.net";
    $userName = "4230494_postdata";
    $password = "(-oN8:jr2**#Q*,g";
    $dbName = "4230494_postdata";

    $trashHigh = 22;

    $con = new mysqli($serverName, $userName, $password, $dbName);

    $query_select_status = mysqli_query($con, "SELECT * FROM tbl_data WHERE id = 1");

    if(mysqli_num_rows($query_select_status)){
        while ($rows = mysqli_fetch_array($query_select_status)){
            $status = (int)$rows['status'];
            $trashLevel = $trashHigh - $status;
            $trashLevelPercent = round(($trashLevel / $trashHigh) * 100);
            echo $trashLevelPercent;
        }
    }
    
?>