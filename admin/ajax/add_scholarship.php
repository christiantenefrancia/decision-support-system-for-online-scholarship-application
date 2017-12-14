<?php
    include('../connect.php');
    
    $name = $_POST['name'];
    $slot = $_POST['slot'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    
    $sizeP = $_POST['sizeP'];
    $arrayP = json_decode($_POST['arrayP']);
    $sizeR = $_POST['sizeR'];
    $arrayR = json_decode($_POST['arrayR']);

    mysql_query("insert into scholarship values ('','$name','$description','$slot','$date')");

    $query = mysql_query("select scholarship_id from scholarship where name = '$name'");
    $row = mysql_fetch_array($query);
    $schoID = $row['scholarship_id'];
    

    for($i = 0; $i < $sizeP; $i++){
        mysql_query("insert into privilege values('','$arrayP[$i]',$schoID)");
    }

    for($i = 0; $i < $sizeR; $i++){
        mysql_query("insert into requirement values('','$arrayR[$i]',$schoID)");
    }

    session_start();
    $_SESSION['id'] = $schoID;
?>