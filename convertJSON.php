<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select xnum,firstname,middlename,lastname,score,school,address,religion,tribe,year_passed,name,status from sase_passers_list
    inner join sase_scholars_list on sase_passers_list.sase_passers_list_id = sase_scholars_list.sase_passers_list_id
    inner join scholarship on sase_scholars_list.scholarship_id = scholarship.scholarship_id and year_passed=2015";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
   //write to json file
    $fp = fopen('JSON/scholars_list.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

    //close the db connection
    mysqli_close($connection);
    
    header('location:sase1.php');
?>