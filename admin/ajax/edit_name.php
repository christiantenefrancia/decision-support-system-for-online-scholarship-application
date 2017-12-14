 <?php
    include('../connect.php');
    include('../session.php');

    $name = $_POST['edit_name'];

     mysql_query("update scholarship set name='$name' where scholarship_id = $id") or die(mysql_query());
    echo $name;                      
?>