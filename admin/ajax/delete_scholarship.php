<?php
    include('../connect.php');
    include('../session.php');

    mysql_query("delete from requirement where scholarship_id = $id");
    mysql_query("delete from privilege where scholarship_id = $id");
    mysql_query("delete from scholarship_tags where scholarship_id = $id");
     mysql_query("delete from scholarship where scholarship_id = $id");
    

    $_SESSION['id'] = 1;

?>