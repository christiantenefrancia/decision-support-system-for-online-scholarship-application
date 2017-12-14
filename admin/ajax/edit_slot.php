 <?php
    include('../connect.php');
    include('../session.php');

    $slots = $_POST['slot_name'];

     mysql_query("update scholarship set slots='$slots' where scholarship_id = $id") or die(mysql_query());
    echo $slots;                      
?>