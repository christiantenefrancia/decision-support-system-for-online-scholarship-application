<?php
    include('../connect.php');
    include('../session.php');

    $size = $_POST['size'];
    $array = json_decode($_POST['array']);
    $array1 = json_decode($_POST['array1']);
    $array2 = json_decode($_POST['array2']);

//    for($i = 0; $i < $size; $i++){
//        $hold = $index[0];
//        $query = mysql_query("select accountID from staff where staffID = $index[$i]");
//        $row = mysql_fetch_array($query);
//        
//        $accID = $row['accountID'];
//        mysql_query("delete from account where accountID = $accID");
//        mysql_query("delete from staff where staffID = $index[$i]");
//    }

    mysql_query("delete from scholarship_tags where scholarship_id = $id");

    for($i = 0; $i < $size; $i++){
        mysql_query("insert into scholarship_tags values('','$array[$i]','$array1[$i]',$id,$array2[$i])");
    }


?>