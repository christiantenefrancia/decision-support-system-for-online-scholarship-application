<?php
    include('../connect.php');
    include('../session.php');
    
    if(isset($_POST['postvalue']))
        $year = $_POST['postvalue'];
    else
        $year = 2015;


    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

                    $sql ="select sase_passers_list.sase_passers_list_id,firstname,middlename,lastname,school,address,religion,tribe,year_passed,score from sase_passers_list
                    inner join sase_scholars_list on sase_passers_list.sase_passers_list_id = sase_scholars_list.sase_passers_list_id
                    and sase_scholars_list.status='Approve' and year_passed = $year and scholarship_id = $id;";
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('../JSON/search_sase_applicant_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);


                    header("location:../search_sase_scholar.php");

?>