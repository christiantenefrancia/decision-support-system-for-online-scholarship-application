<?php
    include('../connect.php');
    $idNumber = $_POST['idnumber'];

    $query = mysql_query("select applicant_id, id_number,firstname,middlename,lastname,age,sex,date_of_birth,home_address,religion,civil_status,citizenship,contact_number,email_address,father_name,father_contact,father_occupation,father_income,mother_name,mother_contact,mother_occupation,mother_income from applicant where id_number = $idNumber");
    $row = mysql_fetch_array($query);
    
    $applicant_id = $row['applicant_id'];
    $query1 = mysql_query("select year_level,current_cgpa,name from scholarship_applicant inner join applicant on scholarship_applicant.applicant_id = applicant.applicant_id inner join course on course.applicant_id = applicant.applicant_id and applicant.applicant_id = $applicant_id");
    $row1 = mysql_fetch_array($query1);
    

    $string = "";
    $name;
    

    $string .= $row['id_number']."=";
    $name = $row['firstname']." ".$row['middlename']." ".$row['lastname']; 
//    $string .= $row['firstname']."=";
//    $string .= $row['middlename']."=";
//    $string .= $row['lastname']."=";
    $string .= $name."=";
    $string .= $row1['year_level']."=";
    $string .= $row1['current_cgpa']."=";
    $string .= $row1['name']."=";
    $string .= $row['age']."=";
    $string .= $row['sex']."=";
    $string .= $row['date_of_birth']."=";
    $string .= $row['home_address']."=";
    $string .= $row['religion']."=";
    $string .= $row['civil_status']."=";
    $string .= $row['citizenship']."=";
    $string .= $row['contact_number']."=";
    $string .= $row['email_address']."=";
    $string .= $row['father_name']."=";
    $string .= $row['father_contact']."=";
    $string .= $row['father_occupation']."=";
    $string .= $row['father_income']."=";
    $string .= $row['mother_name']."=";
    $string .= $row['mother_contact']."=";
    $string .= $row['mother_occupation']."=";
    $string .= $row['mother_income']."=";

    echo ($string);

?>