<html>   
    <?php include('header.php'); ?>
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script type="text/javascript" src="js/exporting.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>

    
    <?php
         include('connect.php');

            $name = "";
            $idNumber = "";
            $age = "";
            $sex = "";
            $birthdate = "";
            $address = "";
            $religion = "";
            $civil_status = "";
            $citizenship = "";
            $contact = "";
            $email = "";
            $fname = "";
            $fcontact = "";
            $foccupation = "";
            $fincome = "";
            $mname = "";
            $mcontact = "";
            $moccupation = "";
            $mincome = "";
            $image = "";
            
            $year = "";
            $cgpa = "";
            $course = 1;
            $recc_scholarship = array();
            $auto_scholarship = array();
    
        if(isset($_POST["search"])){
            
            $un = $_POST['username'];
            $pw = $_POST['password'];
            
            $recc_scholarship = array();
            $auto_scholarship = array();
            
            $index = 0;
            $auto_index = 0;
            
            $query = mysql_query("select applicant_id from akan_account where username = '$un' and password = '$pw'");
            $row = mysql_fetch_array($query);
            $applicantID = $row['applicant_id'];
            
            $query = mysql_query("select id_number from applicant where applicant_id = $applicantID");
            $row = mysql_fetch_array($query);
            $idNumber = $row['id_number'];
            
            $query = mysql_query("select current_cgpa from applicant where applicant_id = $applicantID");
            $row = mysql_fetch_array($query);
            $cgpa = $row['current_cgpa'];
            
            
            $query = mysql_query("select tag_value from scholarship_tags where scholarship_id = 8;");
            $row = mysql_fetch_array($query);
            $president_tag = $row['tag_value'];
            
            if($cgpa <= $president_tag){
                $auto_scholarship[$auto_index] = 8;
                $auto_index++;
            }
            
            
            $query = mysql_query("select tag_value from scholarship_tags where scholarship_id = 7;");
            $row = mysql_fetch_array($query);
            $chancellor_tag = $row['tag_value'];
            
            if($cgpa <= $chancellor_tag){
                $auto_scholarship[$auto_index] = 7;
                $auto_index++;
            }
            
            
            $query = mysql_query("select tag_value from scholarship_tags where scholarship_id = 6;");
            $row = mysql_fetch_array($query);
            $deans_tag = $row['tag_value'];
            
            if($cgpa <= $deans_tag){
                $auto_scholarship[$auto_index] = 6;
                $auto_index++;
            }
            
            $check = 0;
            $skill_index = 0;
            
            $query = mysql_query("select skill from skills where applicant_id = $applicantID");
            
            while($row = mysql_fetch_array($query)){
                $applicant_skill[$skill_index] = $row['skill'];
                $skill_index++;
            }

//        for($p = 0; $p < count($applicant_skill); $p++){
//            for($i = 9; $i <= 14; $i++){
//                    $query = mysql_query("select tag_value from scholarship_tags where scholarship_id = $i");
//                    while($row = mysql_fetch_array($query)){
//                        $skill = $row['tag_value'];
                            
//                        if($applicant_skill[$p] == 'Playing Instruments'){
//                            for($k = 0; $k < count($recc_scholarship); $k++){
//                                if($recc_scholarship[$k] == $i)
//                                    $check = 1;
//                            }
//                            if($check == 1)
//                                $check = 0;
//                            else{
//                                $recc_scholarship[$index] = $i;
//                                $index++;
//                            }
//                                
//                        }
//                    //}
//                }
                 for($p = 0; $p < count($applicant_skill); $p++){
                     if($applicant_skill[$p] == 'Playing Instruments'){
                         $recc_scholarship[$index] = 12;
                                $index++;
                          $recc_scholarship[$index] = 13;
                         $index++;
                     }
                 }
        //}
            
             $query = mysql_query("select applicant_id, id_number,firstname,middlename,lastname,age,sex,date_of_birth,home_address,religion,civil_status,citizenship,contact_number,email_address,father_name,father_contact,father_occupation,father_income,mother_name,mother_contact,mother_occupation,mother_income,image,year_level,current_cgpa from applicant where id_number = $idNumber");
    $row = mysql_fetch_array($query);
    
    $applicant_id = $row['applicant_id'];
    $query1 = mysql_query("select name from applicant inner join course on course.applicant_id = applicant.applicant_id and applicant.applicant_id = $applicant_id");
    $row1 = mysql_fetch_array($query1);
            
            
            $name = $row['firstname']." ".$row['middlename']." ".$row['lastname']; 
            $idNumber = $row['id_number'];
            $age = $row['age'];
            $sex = $row['sex'];
            $birthdate = $row['date_of_birth'];
            $address = $row['home_address'];
            $religion = $row['religion'];
            $civil_status = $row['civil_status'];
            $citizenship = $row['citizenship'];
            $contact = $row['contact_number'];
            $email = $row['email_address'];
            $fname = $row['father_name'];
            $fcontact = $row['father_contact'];
            $foccupation = $row['father_occupation'];
            $fincome = $row['father_income'];
            $mname = $row['mother_name'];
            $mcontact = $row['mother_contact'];
            $moccupation = $row['mother_occupation'];
            $mincome = $row['mother_income'];
            $image = $row['image'];
            
            $year = $row['year_level'];
            $cgpa = $row['current_cgpa'];
            $course = $row1['name'];
            
            
        }
    ?>
    

<body>
    <?php include('topbar.php'); ?>
     <?php include('akan_modal.php'); ?>
    <div class="ui grid">
        <div class="seven wide column">
            &emsp;
            <img src="images/thesis-logo.png"></img>
        </div>
        <div class="eight wide column">
            <br>
            <div class="blue large four item ui secondary pointing menu">
                <a class="item" href="index.php" style="font-size: 18px;">
				    Home
				</a>
                <a>
				    <div class="ui dropdown item" id="item">
                        <strong style="font-size: 18px; color: #0066FF;">Scholarship</strong> <i class="dropdown icon" style="color: #0066FF;"></i>
						  <div class="menu">
						      <a class="item" id="internal" href="view_scholarship.php">View Scholarships</a>
						      <a class="item" id="external">Get Recommendation</a>
						  </div>
				    </div>
                </a>
				<a class="item" href="convertJSON.php" style="font-size: 18px;">
				    SASE
                </a>
                <a class="item" href="about.php" style="font-size: 18px;">
                    About
                </a>
            </div>
        </div>
    </div>
    <hr>
    <br>
    
    <div class="ui grid">
        <div class="one wide column"></div>
        <div class="fourteen wide column">
            <div class="blue ui pointing menu">
              <a class="active item" id="prof" onclick="hide('profile')">
                Student Profile
              </a>
              <a class="item" id="curr" onclick="hide('current')">
                Current Scholarship
              </a>
              <a class="item" id="recc" onclick="hide('recommended')">
                Recommended Scholarship
              </a> 
              <a class="item" id="vw" onclick="hide('view')">
                Apply Scholarship
              </a> 
              <div class="right menu">
                <div class="item">
                    <button class="ui blue labeled icon button" onclick="logInAnotherAccount()">
                        <i class="user icon"></i>
                        Log in Another Account
                    </button>
                </div>
              </div>
            </div>
            
            
            <div class="ui segment tab" id="profile" style="display: block; min-height: 450px;">
                <p style="font-size: 15px;"><strong>Student ID: </strong> <label id="idNumber" style="font-size: 18px;"><strong><?php echo $idNumber; ?></strong></label></p>
                <p style="font-size: 15px;"><strong>CGPA: </strong><label id="cgpa" style="font-size: 18px;"><strong><?php echo $cgpa; ?></strong></label></p>
                <img class="ui small left floated image" src="images/<?php echo $image; ?>" alt="image">
                <div class="content" style="padding-left: 15%;">
                    <div class="ui form">
                        <label style="font-size: 18px;"><strong>Student  Information</strong></label>
                        <div class="fields">
                            <div class="eight wide field">
                                <div class="ui input">
                                    <strong style="padding-top: 8px;">Name: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="name" value="<?php echo $name; ?>" disabled>
                                </div> 
                            </div>
                            <div class="eight wide field">
                                <div class="ui input">
                                    <strong style="padding-top: 8px;">Course: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="course" value="<?php echo $course; ?>" disabled>
                                </div> 
                            </div>
                        </div>
                        <div class="fields">
                            <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Year Level: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="year_level" value=<?php echo $year; ?>"" disabled>
                                </div> 
                            </div>
                            <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Age: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="age" value="<?php echo $age; ?>" disabled>
                                </div> 
                            </div>
                        </div>
                        <div class="fields">
                            <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Gender: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="gender" value="<?php echo $sex; ?>" disabled>
                                </div> 
                            </div>
                            <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Date of Birth: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="birthdate" value="<?php echo $birthdate; ?>" disabled>
                                </div>
                            </div>
                        </div>
                       <div class="fields">
                           <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Address: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="address" value="<?php echo $address; ?>" disabled>
                                </div> 
                            </div>
                            <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Citizenship: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="citizenship" value="<?php echo $citizenship; ?>" disabled>
                                </div> 
                            </div>
                        </div>
                        <div class="fields">
                            <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Civil Status: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="civil_status" value="<?php echo $civil_status; ?>" disabled>
                                </div>
                            </div>
                             <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Religion </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="religion" value="<?php echo $religion; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Contact Number: </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="contact" value="<?php echo $contact; ?>" disabled>
                                </div>
                            </div>
                             <div class="eight wide field">
                                 <div class="ui input">
                                    <strong style="padding-top: 8px;">Email Address </strong>&nbsp;&nbsp;&nbsp;
                                    <input type="text" id="email" value="<?php echo $email; ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <br>
                    <div class="ui styled accordion" style="width: 100%;" id="acc">
                  <div class="title active">
                    <i class="dropdown icon"></i>
                      <label style="font-size: 18px;">Family Background</label>
                  </div>
                  <div class="content active">
                    <p class="transition visible" style="padding-left:25px;">
                        <div class="ui form">
                            <div class="fields">
                                <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Father's Name </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="fname" value="<?php echo $fname; ?>" disabled>
                                    </div>
                                </div>
                                 <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Mother's Name </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="mname" value="<?php echo $mname; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="fields">
                                <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Father's Occupation </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="foccupation" value="<?php echo $foccupation; ?>" disabled>
                                    </div>
                                </div>
                                 <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Mother's Occupation </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="moccupation" value="<?php echo $moccupation; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="fields">
                                <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Father's Contact Number </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="fcontact" value="<?php echo $fcontact; ?>" disabled>
                                    </div>
                                </div>
                                 <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Mother's Contact Number </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="mcontact" value="<?php echo $mcontact; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="fields">
                                <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Father's Income per Year </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="fincome" value="<?php echo $fincome; ?>" disabled>
                                    </div>
                                </div>
                                 <div class="eight wide field">
                                     <div class="ui input">
                                        <strong style="padding-top: 8px;">Mother's Income per Year </strong>&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="mincome" value="<?php echo $mincome; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </p>
                  </div>
                </div>
            </div>
        
        
            <div class="ui segment tab" id="current" style="min-height: 450px; display: none;">
               <div class="ui segment">
                   <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="pTable">
                        <thead>
                            <tr><th style="padding-left: 2%;">Acquired Scholarship</th>
<!--                                <th style="padding-left: 2%;">Details</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <ul>
                            
                            <?php
                                $query = mysql_query("select name from scholarship inner join scholarship_applicant on scholarship.scholarship_id = scholarship_applicant.scholarship_id and applicant_id = $applicant_id and approval_status = 'Approve'");
                                while($row = mysql_fetch_array($query)){
                                    ?>
                                <tr><td style="padding-left: 3%;"><li><?php echo $row['name']; ?></li></td></tr>
                            <?php    }
                            ?>
                            
                            </ul>
                        </tbody>
                    </table>
                </div>
            </div>
        
        
            <div class="ui segment tab" id="recommended" style="min-height: 450px; display: none;">
              <div class="ui segment">
               <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="pTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Recommended Scholarship</th>
                            <th style="padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <ul>
                        <?php
                            for($i = 0; $i < count($recc_scholarship); $i++) {
                                $query = mysql_query("select name from scholarship where scholarship_id = $recc_scholarship[$i]");
                                $row = mysql_fetch_array($query);
                                
                                $query1 = mysql_query("select approval_status from scholarship_applicant where applicant_id = $applicant_id and scholarship_id = $recc_scholarship[$i]");
                                $row1 = mysql_fetch_array($query1);
                                $stat = $row1['approval_status'];
                                
                                if($stat != 'Approve'){
                                
                            ?> <tr><td style="padding-left: 3%;"><li><?php echo $row['name']; ?></li></td> 
<!--
                            <td style="padding-left: 3%;"><button class="ui tiny positive labeled icon button" id="<?php //echo $recc_scholarship[$i]; ?>" onclick="showDetailsModal(this.id)">
                                  <i class="file icon"></i>
                                    View Details
                                </button></td>
-->
                            <?php
                                }
                                if($stat == 'Pending'){
                            ?>
                            <td style="padding-left: 3%;"> <button class="ui tiny negative labeled icon button">
                                  <i class="wait icon"></i>
                                  Pending. . .
                                </button>
                            </td>
                            <?php } else {
                                        if($stat != 'Approve'){?>
                            <td style="padding-left: 3%;"> <button class="ui tiny blue labeled icon button" onclick="changeButton(this.id)" id=<?php echo $recc_scholarship[$i]; ?>>
                                  <i class="check icon"></i>
                                  Apply
                                </button>
                            </td>
                        </tr>
                        <?php       }
                                }
                            }
                        ?>
                        </ul>
                    </tbody>
                </table>
                <br>
                <br>
                <hr>
                <br>
                <br>
                  
                <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="pTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Automatically Acquired Scholarship</th>
<!--                            <th style="padding-left: 2%;">Details</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <ul>
                        <?php
                            for($i = 0; $i < count($auto_scholarship); $i++) {
                                $query = mysql_query("select name from scholarship where scholarship_id = $auto_scholarship[$i]");
                                $row = mysql_fetch_array($query);
//                                
//                                $query1 = mysql_query("select approval_status from scholarship_applicant where applicant_id = $applicant_id and scholarship_id = $auto_scholarship[$i]");
//                                $row1 = mysql_fetch_array($query1);
                                
                            ?> <tr><td style="padding-left: 3%;"><li><?php echo $row['name']; ?></li></td> 
<!--
                            <td style="padding-left: 3%;"><button class="ui tiny positive labeled icon button" id="<?php// echo $auto_scholarship[$i]; ?>" onclick="showDetailsModal(this.id)">
                                  <i class="file icon"></i>
                                    View Details
                                </button></td>
-->
                            <?php
//                                $stat = $row1['approval_status'];
//                                if($stat == 'Pending'){
                            ?>
<!--
                            <td style="padding-left: 3%;"> <button class="ui tiny negative labeled icon button">
                                  <i class="wait icon"></i>
                                  Pending. . .
                                </button>
                            </td>
                            <?php //} else { ?>
-->
<!--
                            <td style="padding-left: 3%;"> <button class="ui tiny blue labeled icon button" onclick="changeButton(this.id)" id = <?php //echo $auto_scholarship[$i]; ?>>
                                  <i class="check icon"></i>
                                  Apply
                                </button>
                            </td>
-->
                        </tr>
                        <?php }
                        //    }
                        ?>
                        </ul>
                    </tbody>
                </table>
                  
                  
                  
            </div>
            </div>
        
        
            <div class="ui segment tab" id="view" style="min-height: 450px; display: none;">
               <div class="ui segment">
                   <table class="ui very basic collapsing celled table" style="min-width: 80%;" id="pTable">
                        <thead>
                            <tr><th style="padding-left: 2%;">Scholarship</th>
<!--                                <th style="padding-left: 2%;">Details</th>-->
                                <th style="padding-left: 2%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = mysql_query("select scholarship_id, name from scholarship");
                                while($row = mysql_fetch_array($query)){
                                    $name = $row['name'];
                                    if(($name == 'Darangen Cultural Troupe Grants') || ($name == 'Sining Kambayoka Grant') || ($name == 'Sining Pananadem Grant') || ($name == 'University Band Grant') || ($name == 'University Combo Grant') || ($name == 'Sports Development Study Grant')){
                                        $scid = $row['scholarship_id'];
                                        $query1 = mysql_query("select approval_status from scholarship_applicant where applicant_id = $applicant_id and scholarship_id = $scid");
                                $row1 = mysql_fetch_array($query1);
                                $stat = $row1['approval_status'];
                                        
                                        if($stat != 'Approve'){
                            ?>
                                <tr>
                                    <td style="padding-left: 3%;"><?php echo $name; ?></td>
                            <?php } 
                                } ?>
<!--
                                    <td style="padding-left: 3%;">
                                        <button class="ui tiny positive labeled icon button" onclick="showDetails(this.id)" id=<?php //echo $row['scholarship_id']; ?>>
                                            <i class="info icon"></i>
                                            View Details
                                        </button>
                                    </td>
-->
                                    <?php 
                                        if(($name == 'Darangen Cultural Troupe Grants') || ($name == 'Sining Kambayoka Grant') || ($name == 'Sining Pananadem Grant') || ($name == 'University Band Grant') || ($name == 'University Combo Grant') || ($name == 'Sports Development Study Grant')){
                            $query1 = mysql_query("select scholarship_id from scholarship where name = '$name'");
                            $row1 = mysql_fetch_array($query1);
                            $sid = $row1['scholarship_id'];
                                            
                            $query2 = mysql_query("select approval_status from scholarship_applicant where scholarship_id = $sid and applicant_id = $applicant_id");
                            $row2 = mysql_fetch_array($query2);
                            $stats = $row2['approval_status'];                
                                
                                if($stats == 'Pending'){
                                    ?>
                                    <td style="padding-left: 3%;">
                                        <button class="ui tiny negative labeled icon button">
                                            <i class="wait icon"></i>
                                            Pending. . .
                                        </button>
                                    </td>
                            <?php } else {
                                        if($stat != 'Approve'){ ?>
                                    <td style="padding-left: 3%;">
                                        <button class="ui blue tiny labeled icon button" onclick="changeButton(this.id)" id = <?php echo $row['scholarship_id'] ?>>
                                            <i class="check icon"></i>
                                            Apply
                                        </button>
                                    </td>
                                    <?php } 
                                }?>
                                </tr>
                            
                            <?php  } ?>
                                   
                            <?php    
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        
        
        </div>
    </div>

            <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
    <?php
       // include('scho_details_modal.php');
        include('footer.php'); ?>
</div>

    <script type="text/javascript">
        
         $('#drop').dropdown({
              on: 'hover',
              action: 'hide'
            });
        
//        function showAkanModal(){
//            $('#akan_modal').modal('show');
//        }
        
         $(window).load(function(){
             
             var check = <?php echo $course; ?>
            
            if(check == 1){
                $('#akan_modal').modal('show');
            }
        });
        
    </script>
    
    
    </body>

    <script type="text/javascript">
        $('#acc').accordion();
        
         $('#item').dropdown({
          on: 'hover',
          action: 'hide'
        });
        
        
        function logInAnotherAccount(){
            $('#akan_modal').modal('show');
        }
        
        function hide(id){
            document.getElementById('profile').style.display = "none";
            document.getElementById('current').style.display = "none";
            document.getElementById('recommended').style.display = "none";
            document.getElementById('view').style.display = "none";
            
            document.getElementById(id).style.display = "block";
            
            document.getElementById('prof').className = "item";
            document.getElementById('curr').className = "item";
            document.getElementById('recc').className = "item";
            document.getElementById('vw').className = "item";
            
            if(id == 'profile')
                document.getElementById('prof').className = "item active";
            else if(id == 'current')
                document.getElementById('curr').className = "item active";
            else if(id == 'recommended')
                document.getElementById('recc').className = "item active";
            else
                document.getElementById('vw').className = "item active";
        }
        
        function changeButton(id){
            var appID = "<?php echo $applicantID; ?>";
            $.ajax({
              type: "POST",
               url: "ajax/apply_scholarship.php",
               data: {
                    app_id: appID,
                   scho_id: id
               },
               
               success: function(data){
                   document.getElementById(id).className = "ui tiny negative labeled icon button";
                   document.getElementById(id).innerHTML = "<i class='wait icon'></i>Pending. . .";
                   //alert(data);
                } 
           });
        }
        
//        function showDetails(id){
//             $.ajax({
//              type: "POST",
//               url: "ajax/session_id.php",
//               data: {
//                   scho_id: id
//               },
//               
//               success: function(data){
//                  // window.location.reload();
//                  $('#scho_details_modal').modal('show');
//                   //alert(data);
//                } 
//           });
//        }
        
    </script>

</html>




