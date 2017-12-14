<?php
    include('../connect.php');

    $size = $_POST['size'];
    $index = json_decode($_POST['array']);

    for($i = 0; $i < $size; $i++){
        $hold = $index[0];
        $query = mysql_query("select accountID from staff where staffID = $index[$i]");
        $row = mysql_fetch_array($query);
        
        $accID = $row['accountID'];
        mysql_query("delete from account where accountID = $accID");
        mysql_query("delete from staff where staffID = $index[$i]");
    }

     $connection = mysqli_connect("localhost","root","","thesisdb") or die("Error " . mysqli_error($connection));
                $sql = "SELECT staffID,name,firstname,middlename,lastname,address,contact_number,email FROM staff INNER JOIN scholarship ON staff.scholarshipID = scholarship.scholarshipID;";
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

?>