<?php
    include('../connect.php');
    include('../session.php');

    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];   
    $scholarship = $_POST['scholarship'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo $id;
    mysql_query("insert into account values('','$username','$password')");
//    
    $query = mysql_query("select account_id from account where username = '$username' and password='$password'");
    $row = mysql_fetch_array($query);
    $accID = $row['account_id'];
    
    //echo $accID;
    
    $query = mysql_query("select scholarship_id from scholarship where name = '$scholarship'");
    $row = mysql_fetch_array($query);
    $schoID = $row['scholarship_id'];
    echo $schoID;

    mysql_query("insert into staff values('','$first_name','$middle_name','$last_name','$address','$contact','$email','$accID','$id','$schoID')") or die(mysql_error());


     $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));
                $sql = "SELECT staff_id,name,firstname,middlename,lastname,address,contact_number,email FROM staff INNER JOIN scholarship ON staff.scholarship_id = scholarship.scholarship_id;";
                $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                //create an array
                $emparray = array();
                while($row =mysqli_fetch_assoc($result))
                {
                    $emparray[] = $row;
                }
               //write to json file
                $fp = fopen('../JSON/data.json', 'w');
                fwrite($fp, json_encode($emparray));
                fclose($fp);

                //close the db connection
                mysqli_close($connection);

    

    //echo $date_of_birth;

?>