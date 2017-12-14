<?php
    include('../connect.php');
    include('../session.php');
    
    $acad = $_POST['postvalue'];

    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

                    $sql ="select applicant.applicant_id, firstname,middlename,lastname,sex,home_address,religion,citizenship,contact_number,email_address
        from applicant inner join scholarship_applicant on applicant.applicant_id = scholarship_applicant.applicant_id and scholarship_id = $id and approval_status='Approve' and academic_year = '$acad'; ";
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('../JSON/search_applicant_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);


                    header("location:../search_scholar.php");

?>