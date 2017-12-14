<?php
    include('../connect.php');

    $filename = $_POST['file_name'];
    $myfile = fopen($filename, "r") or die("Unable to open file!");
    // Output one character until end-of-file
    $string;

    while(!feof($myfile)) {
        $string = fgets($myfile);

        $parse = explode("--",$string);
        //print_r($parse);
//            echo $parse[6]." ".$parse[11]." ".$parse[12]."<br>";

        $idNumber = $parse[0];
        $fname = $parse[1];
        $mname = $parse[2];
        $lname = $parse[3];
        $age = $parse[4];
        $sex = $parse[5];
        $dob = $parse[6];
        $address = $parse[7];
        $religion = $parse[8];
        $civil_status = $parse[9];
        $citizenship = $parse[10];
        $cn = $parse[11];
        $ea = $parse[12];
        $fn = $parse[13];
        $fc = $parse[14];
        $fo = $parse[15];
        $fi = $parse[16];
        $mn = $parse[17];
        $mc = $parse[18];
        $mo = $parse[19];
        $mi = $parse[20];
        $image = $parse[21];
        $year_level = $parse[22];
        $cgpa = $parse[23];
        $prev = $parse[24];
        $current = $parse[25];
        $skill = $parse[26];
        //echo $cgpa." ".$prev." ".$current;  
        
        mysql_query("insert into applicant values('','$idNumber','$fname','$mname','$lname',$age,'$sex','$dob','$address','$religion','$civil_status','$citizenship','$cn','$ea','$fn','$fc','$fo',$fi,'$mn','$mc','$mo',$mi,'$image','$year_level','$cgpa',$prev,$current)");
    
        
    $query = mysql_query("select applicant_id from applicant where id_number='$idNumber'");
    $row = mysql_fetch_array($query);
    $applicantID = $row['applicant_id'];

    mysql_query("insert into skills values('','$skill',$applicantID)");
    }

    fclose($myfile);

?> 