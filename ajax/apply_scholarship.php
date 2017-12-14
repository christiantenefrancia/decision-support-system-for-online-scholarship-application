<?php
    include('../connect.php');

    $applicant_id = $_POST['app_id'];
    $scholarship_id = $_POST['scho_id'];

    mysql_query("insert into scholarship_applicant values('','Pending',$applicant_id,'2015-2016 1st Semester',$scholarship_id,NULL);");
?>