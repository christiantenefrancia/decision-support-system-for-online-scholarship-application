<?php
    include('../connect.php');
    include('../session.php');

    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));
                    $sql = "select applicant.applicant_id, firstname,middlename,lastname,year_level,current_cgpa,passed_prev_units,current_units,contact_number,email_address
        from applicant inner join scholarship_applicant on applicant.applicant_id = scholarship_applicant.applicant_id and scholarship_id = $id and approval_status='Approve'; ";
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('../JSON/applicant_approve_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);


                    header("location:../approve_applicant.php");

?>