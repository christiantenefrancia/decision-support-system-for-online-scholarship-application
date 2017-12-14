<?php
    include('../connect.php');
    include('../session.php');


//$connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));
//                    $sql = "select firstname,middlename,lastname,contact_number,email_address,year_level,current_cgpa,passed_prev_units,current_units from applicant inner join scholarship_applicant on applicant.applicant_id = scholarship_applicant.applicant_id and scholarship_applicant.scholarship_id = $id order by current_cgpa limit 2;";
//
//        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//
//                    //create an array
//                    $emparray = array();
//                    while($row =mysqli_fetch_assoc($result))
//                    {
//                        $emparray[] = $row;
//                    }
//                   //write to json file
//                    $fp = fopen('../JSON/applicant_data.json', 'w');
//                    fwrite($fp, json_encode($emparray));
//                    fclose($fp);
//
//                    //close the db connection
//                    mysqli_close($connection);

    $column = array(0);
    $value = array();
$emparray = array();
$index = 0;

$query = mysql_query("select tag_column, tag_value from scholarship_tags where scholarship_id = $id");
    while($row = mysql_fetch_array($query)){
        $column[$index] = $row['tag_column'];
        $value[$index] = $row['tag_value'];
   
        $query1 = mysql_query("select * from applicant inner join scholarship_applicant on applicant.applicant_id = scholarship_applicant.applicant_id and $column[$index] = '$value[$index]'");
        $row1 = mysql_fetch_array($query1);
             $index++;
        echo $row1['applicant_id'];
    }

    $query1 = mysql_query("select * from applicant inner join scholarship_applicant on applicant.applicant_id = scholarship_applicant.applicant_id and $column[0] = '$value[0]'");
    
    while($row = mysql_fetch_array($query1)){
       
            $emparray[] = $row;
        
    $ap_id = $row['applicant_id'];
    $id_num = $row['id_number'];
    $f = $row['firstname'];
    $m = $row['middlename'];
    $l = $row['lastname'];
    $age = $row['age'];
    $sex = $row['sex'];
    $dob = $row['date_of_birth'];
    $address = $row['home_address'];
    $religion = $row['religion'];
    $cv = $row['civil_status'];
    $citizenship = $row['citizenship'];
    $contact = $row['contact_number'];
    $email = $row['email_address']; 
    $fn = $row['father_name'];
    $fc = $row['father_contact'];
    $fo = $row['father_occupation'];
    $fi = $row['father_income'];
    $mn = $row['mother_name'];
    $mc = $row['mother_contact'];
    $mo = $row['mother_occupation'];
    $mi = $row['mother_income'];
    $image = $row['image'];
    $year = $row['year_level'];
    $cgpa = $row['current_cgpa'];
    $passed = $row['passed_prev_units'];
    $current = $row['current_units'];
    

    mysql_query("insert into recommend values($ap_id,'$id_num','$f','$m','$l',$age,'$sex','$dob','$address','$religion','$cv','$citizenship','$contact','$email','$fn','$fc','$fo',$fi,'$mn','$mc','$mo',$mi,'$image','$year','$cgpa',$passed,$current)");
    }



    for($i = 1; $i < count($column); $i++){
        
         $query1 = mysql_query("select * from recommend where $column[$i] = '$value[$i]'");
    
        mysql_query("delete from recommend");
        
         $emparray = array();
    while($row = mysql_fetch_array($query1))
    {
         $emparray[] = $row;
        
        $ap_id = $row['applicant_id'];
        $id_num = $row['id_number'];
        $f = $row['firstname'];
        $m = $row['middlename'];
        $l = $row['lastname'];
        $age = $row['age'];
        $sex = $row['sex'];
        $dob = $row['date_of_birth'];
        $address = $row['home_address'];
        $religion = $row['religion'];
        $cv = $row['civil_status'];
        $citizenship = $row['citizenship'];
        $contact = $row['contact_number'];
        $email = $row['email_address']; 
        $fn = $row['father_name'];
        $fc = $row['father_contact'];
        $fo = $row['father_occupation'];
        $fi = $row['father_income'];
        $mn = $row['mother_name'];
        $mc = $row['mother_contact'];
        $mo = $row['mother_occupation'];
        $mi = $row['mother_income'];
        $image = $row['image'];
        $year = $row['year_level'];
        $cgpa = $row['current_cgpa'];
        $passed = $row['passed_prev_units'];
        $current = $row['current_units'];

        
        mysql_query("insert into recommend values($ap_id,'$id_num','$f','$m','$l',$age,'$sex','$dob','$address','$religion','$cv','$citizenship','$contact','$email','$fn','$fc','$fo',$fi,'$mn','$mc','$mo',$mi,'$image','$year','$cgpa',$passed,$current)");
    }
        
    }


    $query = mysql_query("select * from recommend order by current_cgpa");

    mysql_query("delete from recommend");
        
         $emparray = array();
    while($row = mysql_fetch_array($query))
    {
        $emparray[] = $row;
        
        $ap_id = $row['applicant_id'];
        $id_num = $row['id_number'];
        $f = $row['firstname'];
        $m = $row['middlename'];
        $l = $row['lastname'];
        $age = $row['age'];
        $sex = $row['sex'];
        $dob = $row['date_of_birth'];
        $address = $row['home_address'];
        $religion = $row['religion'];
        $cv = $row['civil_status'];
        $citizenship = $row['citizenship'];
        $contact = $row['contact_number'];
        $email = $row['email_address']; 
        $fn = $row['father_name'];
        $fc = $row['father_contact'];
        $fo = $row['father_occupation'];
        $fi = $row['father_income'];
        $mn = $row['mother_name'];
        $mc = $row['mother_contact'];
        $mo = $row['mother_occupation'];
        $mi = $row['mother_income'];
        $image = $row['image'];
        $year = $row['year_level'];
        $cgpa = $row['current_cgpa'];
        $passed = $row['passed_prev_units'];
        $current = $row['current_units'];

        
        mysql_query("insert into recommend values($ap_id,'$id_num','$f','$m','$l',$age,'$sex','$dob','$address','$religion','$cv','$citizenship','$contact','$email','$fn','$fc','$fo',$fi,'$mn','$mc','$mo',$mi,'$image','$year','$cgpa',$passed,$current)");
    }
 

                    //create an array
                    
                   //write to json file
                    $fp = fopen('../JSON/applicant_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);
            

?>