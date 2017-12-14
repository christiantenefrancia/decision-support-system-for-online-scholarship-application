<?php
    include('../connect.php');

    $val = $_POST['postvalue'];

    $query = mysql_query("select scholarship_id from scholarship where name = '$val'");
     $row = mysql_fetch_array($query);

    echo $row['scholarship_id'];

    session_start();
    $_SESSION['id'] = $row['scholarship_id'];

?>




