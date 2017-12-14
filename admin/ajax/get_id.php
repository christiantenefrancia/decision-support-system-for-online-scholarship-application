<?php
     include('../connect.php');

    $applicant_id = $_POST['app_id'];

    $query = mysql_query("select id_number,firstname,middlename,lastname,age,sex,date_of_birth,home_address,religion,civil_status,citizenship,contact_number,email_address,father_name,father_contact,father_occupation,father_income,mother_name,mother_contact,mother_occupation,mother_income,image,year_level,current_cgpa,passed_prev_units,current_units from applicant where applicant_id = $applicant_id");
    $row = mysql_fetch_array($query);
    
    $string = "";
//    $name;
    

    $string .= $row['id_number']."=";
//    $name = $row['firstname']." ".$row['middlename']." ".$row['lastname']; 
    $string .= $row['firstname']."=";
    $string .= $row['middlename']."=";
    $string .= $row['lastname']."=";
//    $string .= $name."=";
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
    $string .= $row['year_level']."=";
    $string .= $row['current_cgpa']."=";
    $string .= $row['passed_prev_units']."=";
    $string .= $row['current_units']."=";

    echo ($string);

?>