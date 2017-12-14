 <?php
    include('../connect.php');
    include('../session.php');

    $date = $_POST['date_name'];

     mysql_query("update scholarship set date_of_effectivity='$date' where scholarship_id = $id") or die(mysql_query());
    echo $date;                      
?>