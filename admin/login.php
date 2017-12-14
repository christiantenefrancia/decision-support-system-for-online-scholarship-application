<!DOCTYPE html>
<html lang='en'>
<head>
   <?php include('header.php'); ?>
   <?php include('connect.php'); ?>
</head>
    
    
<body style="background-image: url('../images/Laptop-Keyboard-Hd-Screen-Background.jpg');">    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="ui grid">
<div class="five wide column"></div>
<div class="six wide column">
<form method = "post">
    <div class="ui segment">
        <a href="../index.php"><i class="big blue arrow left icon"></i></a>
      <h2 class="ui right floated header">Administrator Log in</h2>
        <div class="ui clearing divider"></div>
        <div class="field" style="padding-left: 50px;">
            <label>Username</label>
            <br>
            <div class="ui left icon input" style="width: 70%;">
              <input type="text" name="username" id="email" placeholder="Username">
              <i class="blue user icon"></i>
            </div>
          </div>
      <div class="field" style="padding-left: 50px;">
          <br>
        <label>Password</label>
        <br>
        <div class="ui left icon input" style="width: 70%;">
          <input type="password" name="password" id="password" placeholder="Password">
          <i class="blue lock icon"></i>
        </div>
      </div>
        <br>
        <div style="padding-left: 85px;">
            <button type="submit" class="ui blue submit button" name="login" style="width: 60%;">Login</button>
        </div>
    </div>   
</form>
</div>
</div>
<br>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
								
        $result = mysql_query("SELECT * FROM account WHERE username = '$username' AND password = '$password'") or die(mysql_error());	
        $row = mysql_fetch_array($result);
        $numberOfRows = mysql_num_rows($result);				
																
        if ($numberOfRows == 0) 
        {
            echo "<script>alert('Account not Existed!');</script>";
        } 
        else if ($numberOfRows > 0)
        {
            $query = mysql_query("select admin_id from admin inner join account on account.account_id = admin.account_id
	and account.username='$username' and account.password='$password'");
            $row = mysql_fetch_array($query);
            $number = mysql_num_rows($query);
            
            if($number > 0)
            {
                session_start();
                $_SESSION['id'] = $row['admin_id'];
                $_SESSION['status'] = 'true';
                
                $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));
                $sql = "SELECT staff_id,name,firstname,middlename,lastname,address,contact_number,email FROM staff INNER JOIN scholarship ON staff.scholarship_id = scholarship.scholarship_id;";
                $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                //create an array
                $emparray = array();
                while($row =mysqli_fetch_assoc($result))
                {
                    $emparray[] = $row;
                }
               //write to json file
                $fp = fopen('JSON/data.json', 'w');
                fwrite($fp, json_encode($emparray));
                fclose($fp);

                //close the db connection
                mysqli_close($connection);
                
                header("location:admin.php");	
            }
            
            else
            {
                $query = mysql_query("select scholarship_id from staff inner join account on staff.account_id = account.account_id and account.username='$username' and account.password='$password'");
                $row = mysql_fetch_array($query);
                
                session_start();
                $_SESSION['id'] = $row['scholarship_id'];
                $_SESSION['status'] = 'false';
                $scholarship_id = $row['scholarship_id'];
                
                $query = mysql_query("select name from scholarship where scholarship_id = $scholarship_id");
                $row = mysql_fetch_array($query);
                $scho_name = $row['name'];
                
                if(($scho_name == "Academic Scholarship") || ($scho_name == "Science Scholarship") || ($scho_name == "Special Muslim Grant") || ($scho_name == "Cultural Community Grant (CCG)")){
                   //open connection to mysql db
                    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));

                    //fetch table rows from mysql db
                    $query = mysql_query("select status from sase_scholars_list where status = 'Approve'");
                    $count = 0;
                            
                    while($row = mysql_fetch_array($query)){
                        $count++;
                        break;
                    }
                    if($count == 0){
                        $sql = "select sase_passers_list.sase_passers_list_id,firstname,middlename,lastname,school,address,religion,tribe,year_passed,score from sase_passers_list
                    inner join sase_scholars_list on sase_passers_list.sase_passers_list_id = sase_scholars_list.sase_passers_list_id
                    inner join scholarship on sase_scholars_list.scholarship_id = scholarship.scholarship_id and sase_scholars_list.status='Pending' and year_passed=2015";
                    }
                    else{
                        $sql = "select sase_passers_list.sase_passers_list_id,firstname,middlename,lastname,school,address,religion,tribe,year_passed,score,name from sase_passers_list
                    inner join sase_scholars_list on sase_passers_list.sase_passers_list_id = sase_scholars_list.sase_passers_list_id
                    inner join scholarship on sase_scholars_list.scholarship_id = scholarship.scholarship_id and sase_scholars_list.status='Pending' and year_passed=2015";
                    }
                    
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('JSON/sase_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);

                    header('location:adminsase1.php');
                    
                }
                else
                {
                    $connection = mysqli_connect("localhost","root","","final_db") or die("Error " . mysqli_error($connection));
                    $sql = "select applicant.applicant_id, firstname,middlename,lastname,year_level,current_cgpa,passed_prev_units,current_units,contact_number,email_address
        from applicant inner join scholarship_applicant on applicant.applicant_id = scholarship_applicant.applicant_id and scholarship_id = $scholarship_id and approval_status='Pending'; ";
                    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

                    //create an array
                    $emparray = array();
                    while($row =mysqli_fetch_assoc($result))
                    {
                        $emparray[] = $row;
                    }
                   //write to json file
                    $fp = fopen('JSON/applicant_data.json', 'w');
                    fwrite($fp, json_encode($emparray));
                    fclose($fp);

                    //close the db connection
                    mysqli_close($connection);


                    header("location:index.php");
                }
            }	
        }	
        
        
    }

?>
