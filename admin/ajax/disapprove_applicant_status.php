<?php
    include('../connect.php');
    include('../session.php');
    
    $app_id = $_POST['app_id'];

    $query = mysql_query("select staff_id from staff where scholarship_id = $id");
    $row = mysql_fetch_array($query);
    $staff_id = $row['staff_id'];

    mysql_query("update scholarship_applicant set approval_status = 'Pending', academic_year='2015-2016 1st Semester', staff_id = $staff_id where applicant_id = $app_id");


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


         $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

                    //fetch table rows from mysql db
                    $sql = "select applicant.applicant_id, firstname,middlename,lastname,year_level,current_cgpa,passed_prev_units,current_units,contact_number,email_address
        from applicant inner join scholarship_applicant on applicant.applicant_id = scholarship_applicant.applicant_id and scholarship_id = $id and approval_status='Pending'; ";
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('../JSON/applicant_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);

?>