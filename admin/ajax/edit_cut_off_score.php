<?php

    include('../connect.php');
    include('../session.php');

    $Sfirst = $_POST['Sfrom'];
    $Send = $_POST['Sto'];
    $Afirst = $_POST['Afrom'];
    $Aend = $_POST['Ato'];
    $Cfirst = $_POST['Cfrom'];
    $Cend = $_POST['Cto'];
    $Mfirst = $_POST['Mfrom'];
    $Mend = $_POST['Mto'];
    $year = $_POST['year'];
    $val = "";
    

    $query = mysql_query("select scholarship_id from scholarship where name='Science Scholarship'");
    $row = mysql_fetch_array($query);
    $sid = $row['scholarship_id'];
  
    $science = $Sfirst."-".$Send;
    if($id == $sid)
       $val = $science;

//    mysql_query("update scholarship_tags set tag_value = '$science' where scholarship_id = $sid");
    mysql_query("insert into cut_off_score values('','$science',$year,$sid)");


    $query = mysql_query("select scholarship_id from scholarship where name='Academic Scholarship'");
    $row = mysql_fetch_array($query);
    $aid = $row['scholarship_id'];

    $academic = $Afirst."-".$Aend;
    if($id == $aid)
        $val = $academic;

//    mysql_query("update scholarship_tags set tag_value = '$academic' where scholarship_id = $aid");
    mysql_query("insert into cut_off_score values('','$academic',$year,$aid)");

    
    $query = mysql_query("select scholarship_id from scholarship where name='Cultural Community Grant (CCG)'");
    $row = mysql_fetch_array($query);
    $cid = $row['scholarship_id'];

    $ccg = $Cfirst."-".$Cend;
    if($id == $cid)
        $val = $ccg;

//    mysql_query("update scholarship_tags set tag_value = '$ccg' where scholarship_id = $cid");
    mysql_query("insert into cut_off_score values('','$ccg',$year,$cid)");


    
    $query = mysql_query("select scholarship_id from scholarship where name='Special Muslim Grant'");
    $row = mysql_fetch_array($query);
    $mid = $row['scholarship_id'];

    $spl = $Mfirst."-".$Mend;
    if($id == $mid)
        $val = $spl;

//    mysql_query("update scholarship_tags set tag_value = '$spl' where scholarship_id = $mid");
    mysql_query("insert into cut_off_score values('','$spl',$year,$mid)");
    
    
    mysql_query("delete from sase_scholars_list");
    $query = mysql_query("select sase_passers_list_id, score from sase_passers_list where score >= $Mfirst and score <= $Send");
    while($row = mysql_fetch_array($query)){
        $score = $row['score'];
        $saseID = $row['sase_passers_list_id'];
        
        if(($score >= $Sfirst) && ($score <= $Send))
            $sc_id = $sid;
        
        if(($score >= $Afirst) && ($score <= $Aend))
            $sc_id = $aid;
        
        if(($score >= $Cfirst) && ($score <= $Cend))
            $sc_id = $cid;
        
        if(($score >= $Mfirst) && ($score <= $Mend))
            $sc_id = $mid;
        
        mysql_query("insert into sase_scholars_list values ('',$saseID,$sc_id,'Pending')");
        
    }

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

//    mysql_query("select sase_passers_list_id,score from sase_passers_list where score <= $Send and score >= $Mfirst");
//    while($row = mysql_fetch-array($query)){
//        $score = $row['score'];
//        
//    }
//    echo $val;
    

    
//    echo $score;
//    mysql_query("update scholarship_tags set tag_value='$score' where scholarship_id = $id");
//    
//    $query = mysql_query("select sase_passers_list_id from sase_passers_list where score >= $first and score <= $end");
//    while($row = mysql_fetch_array($query)){
//        $sase_id = $row['sase_passers_list_id'];
//        mysql_query("update sase_scholars_list set scholarship_id = $id where sase_passers_list_id = $sase_id");
//    }

?>