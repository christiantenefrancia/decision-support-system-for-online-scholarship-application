<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","thesisdb") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from staff";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
   //write to json file
    $fp = fopen('JSON/data.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

    //close the db connection
    mysqli_close($connection);
?>