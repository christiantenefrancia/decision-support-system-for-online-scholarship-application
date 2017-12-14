 <?php
    include('../connect.php');
    include('../session.php');

    $description = $_POST['description_name'];

     mysql_query("update scholarship set details='$description' where scholarship_id = $id") or die(mysql_query());
    echo $description;                      
?>