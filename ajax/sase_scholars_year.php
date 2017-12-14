<?php
    include('../connect.php');

    $year = $_POST['year'];
    $scholarship = $_POST['scholarship'];
    $query = mysql_query("select scholarship_id from scholarship where name='$scholarship'");
    $row = mysql_fetch_array($query);
    $id = $row['scholarship_id'];

    
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

    $sql = "SELECT xnum, firstname, middlename, lastname, score, school, address, religion, tribe, year_passed,
STATUS FROM sase_passers_list
INNER JOIN sase_scholars_list ON sase_passers_list.sase_passers_list_id = sase_scholars_list.sase_passers_list_id
AND sase_scholars_list.scholarship_id = $id
AND STATUS = 'Approve' and year_passed = $year";


    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
   //write to json file
    $fp = fopen('../JSON/scholars_list.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

    //close the db connection
    mysqli_close($connection);
    
?>