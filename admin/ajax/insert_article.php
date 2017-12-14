<?php
    include('../connect.php');
    include('../session.php');

    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $message = $_POST['message'];
    $image = $_POST['image'];

    $query = mysql_query("select staff_id from staff where scholarship_id = $id");
    $row = mysql_fetch_array($query);
    $staff_id = $row['staff_id'];

    mysql_query("insert into articles(title,sub_title,body,image,staff_id) values('$title','$sub_title','$message','$image',$staff_id)");

    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

                    //fetch table rows from mysql db
                    $sql = "select article_id,title, sub_title, body,image,date_created from articles";
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('../JSON/article_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);
?>