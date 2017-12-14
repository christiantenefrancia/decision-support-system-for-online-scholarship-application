<?php

     $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

                    //fetch table rows from mysql db
                    $sql = "select sase_passers_list.sase_passers_list_id,firstname,middlename,lastname,school,address,religion,tribe,year_passed,score,name from sase_passers_list
                    inner join sase_scholars_list on sase_passers_list.sase_passers_list_id = sase_scholars_list.sase_passers_list_id
                    inner join scholarship on sase_scholars_list.scholarship_id = scholarship.scholarship_id and sase_scholars_list.status='Pending' and year_passed=2015";
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('../JSON/sase_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);

                    header('location:../adminsase1.php');


?>