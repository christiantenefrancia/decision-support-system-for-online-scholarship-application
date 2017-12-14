<div class="ui fullscreen modal" id="addApplicant_modal">
    <div class="ui five top attached steps">
      <div class="active step" id="showProfile1" onclick="stepChange(this.id)">
        <i class="blue user icon" id="profile-icon"></i>
        <div class="content">
          <div class="title">Profile</div>
          <div class="description">Applicant Information</div>
        </div>
      </div>
      <div class="step" id="showFather1" onclick="stepChange(this.id)">
        <i class="male icon" id="father-icon"></i>
        <div class="content">
          <div class="title">Father</div>
          <div class="description">Father's information</div>
        </div>
      </div>
      <div class="step" id="showMother1" onclick="stepChange(this.id)">
        <i class="female icon" id="mother-icon"></i>
        <div class="content">
          <div class="title">Mother</div>
          <div class="description">Mother's Information</div>
        </div>
      </div>
      <div class="step" id="showEducation1" onclick="stepChange(this.id)">
        <i class="book icon" id="education-icon"></i>
        <div class="content">
          <div class="title">Education</div>
          <div class="description">Educational Background</div>
        </div>
      </div>
       <div class="step" id="showFile1" onclick="stepChange(this.id)">
        <i class="file icon" id="file-icon"></i>
        <div class="content">
          <div class="title">Attach Files</div>
          <div class="description">Verification of Applicant</div>
        </div>
      </div>
    </div>
    
    <div class="ui segment" id="user1" style="display: block;">
        <p>
        <hr>
            <div class="ui form">
            <div class="fields">
                <div class="two wide field">
                    <label>ID Number</label>
                    <div class="ui input">
                        <input type="text" placeholder="ID number. . ." id="id_number">
                    </div>
                </div>
            </div>
              <div class="three fields">
                <div class="field">
                  <label>First name</label>
                  <input type="text" placeholder="First Name" id="firstname">
                </div>
                <div class="field">
                  <label>Middle name</label>
                  <input type="text" placeholder="Middle Name" id="middlename">
                </div>
                <div class="field">
                  <label>Last name</label>
                  <input type="text" placeholder="Last Name" id="lastname">
                </div>
              </div>
                <div class="fields">
                    <div class="two wide field">
                    <label>Gender</label>
                    <select class="ui selection dropdown" id="gender">
                      <option value="">Gender</option>
                    <div class="menu">
                      <option value="male" class="item">
                          <i class="male icon"></i>
                          Male</option>
                      <option value="female">
                          <i class="female icon"></i>
                          Female</option>
                        </div>
                    </select>
                    </div>
                    <div class="two wide field">
                        <div class="ui input">
                            <label>Age</label>
                            <input type="text" placeholder="Age. . ." id="age">
                        </div>
                    </div>
                    <div class="four wide field">
                        <div class="ui input">
                            <label>Religion</label>
                            <input type="text" placeholder="Religion. . ." id="religion">
                        </div>
                    </div>
                    <div class="four wide field">
                        <div class="ui input">
                            <label>Citizensip</label>
                            <input type="text" placeholder="Citizenship. . ." id="citizenship">
                        </div>
                    </div>
                    <div class="four wide field">
                       <label>Civil Status</label>
                        <select class="ui labeled icon dropdown" id="civil_status">
                          <option value="">Civil Status</option>
                          <option value="0">
                              <i class="male icon"></i>
                              Single</option>
                          <option value="1">
                              <i class="male icon"></i>
                              Married</option>
                          <option value="2">
                              <i class="female icon"></i>
                              Widow</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="four wide field">
                        <label>Date Of Birth</label>
                        <div class="ui input">
                            <input type='text' placeholder="Date of Birth" class='datepicker-here' data-language='en' data-position="right top" id="date_of_birth">
                        </div>
                    </div>
                    <div class="eight wide field">
                        <div class="ui input">
                            <label>Home Address</label>
                            <input type="text" placeholder="Home Address. . ." id="home_address">
                        </div>
                    </div>
                    <div class="four wide field">
                        <div class="ui input">
                            <label>Tribe / Ethnic Origin</label>
                            <input type="text" placeholder="Tribe / Ethnic Origin. . ." id="tribe">
                        </div>
                    </div>
                </div>
                <div class="fields">
                    <div class="six wide field">
                        <div class="ui input">
                            <label>Contact Number</label>
                            <input type="text" placeholder="Contact #. . ." id="contact_number">
                        </div>
                    </div>
                    <div class="seven wide field">
                        <div class="ui input">
                            <label>Email Address</label>
                            <input type="text" placeholder="Email Address. . ." id="email_address">
                        </div>
                    </div>
                </div>
                <div class="fields">
                    <div class="fifteen wide field">
                        <label>Skills</label>
                        <select name="skills" multiple="" class="ui fluid dropdown" id="sportsDropdown">
                          <option value="">Skills</option>
                        <option value="angular">Dancing</option>
                        <option value="css">Sports</option>
                        <option value="design">Soccer</option>
                        <option value="ember">Softball</option>
                        <option value="html">Badminton</option>
                        <option value="ia">Lawn Tennis</option>
                        <option value="javascript">Table Tennis</option>
                        <option value="mech">Sepak Takraw</option>
                        <option value="meteor">Chess</option>
                        <option value="node">Track and Field</option>
                        <option value="ux">I'm not into sports</option>
                        </select>
                    </div>
                </div>
            </div>  
        </p>
    </div>
    


    
    <div class="ui segment" id="father1" style="display: none;">
        <p>
        <hr>
        <div class="ui form">
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Father's Complete Name</label>
                    <input type="text" placeholder="Father's Complete Name. . ." id="father_name">
                </div>
            </div>
            <div class="six wide field">
                <div class="ui input">
                    <label>Occupation</label>
                    <input type="text" placeholder="Occupation. . ." id="father_occupation">
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Contact Number</label>
                    <input type="text" placeholder="Contact Number. . ." id="father_contact">
                </div>
            </div>
            <div class="seven wide field">
                <div class="ui input">
                    <label>Ethnic Origin/Tribe</label>
                    <input type="text" placeholder="Ethnic Origin/Tribe. . ." id="father_tribe">
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Religion</label>
                    <input type="text" placeholder="Religion. . ." id="father_religion">
                </div>
            </div>
            <div class="eight wide field">
                <label>Gross Income per Year (Php)</label>
                    <select class="ui labeled icon dropdown" id="father_income">
                        <option value="">Gross Income Per Year</option>
                        <option value="10,000 - 20,000">10,000 - 20,000</option>
                        <option value="20,000 - 40,000">20,000 - 40,000</option>
                        <option value="40,000 - 60,000">40,000 - 60,000</option>
                        <option value="60,000 - 80,000">60,000 - 80,000</option>
                        <option value="80,000 - 100,000">80,000 - 100,000</option>
                        <option value="120,000 - 140,000">120,000 - 140,000</option>
                        <option value="140,000 - 160,000">140,000 - 160,000</option>
                        <option value="160,000 - 180,000">160,000 - 180,000</option>
                        <option value="180,000 - 200,000">180,000 - 200,000</option>
                        <option value="200,000 - 220,000">200,000 - 220,000</option>
                        <option value="220,000 - 240,000">220,000 - 240,000</option>
                        <option value="240,000 - 260,000">240,000 - 260,000</option>           
                        <option value="260,000 - 280,000">260,000 - 280,000</option>
                        <option value="280,000 - 300,000">280,000 - 300,000</option>
                        <option value="300,000 - 320,000">300,000 - 320,000</option>
                        <option value="320,000 - 340,000">320,000 - 340,000</option>
                        <option value="340,000 - 360,000">340,000 - 360,000</option>
                        <option value="360,000 - 380,000">360,000 - 380,000</option>
                        <option value="380,000 - 400,000">380,000 - 400,000</option>
                        <option value="400,000 - 420,000">400,000 - 420,000</option>
                        <option value="420,000 - 440,000">420,000 - 440,000</option>
                        <option value="440,000 - 460,000">440,000 - 460,000</option>
                        <option value="460,000 - 480,000">460,000 - 480,000</option>
                        <option value="480,000 - 500,000">480,000 - 500,000</option>
                        <option value="500,000 - 1,000,000">500,000 - 1,000,000</option>
                    </select>
            </div>
        </div>
        </div>
    </div>



        
    <div class="ui segment" id="mother1" style="display: none;">
        <p>
        <hr>
        <div class="ui form">
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Mother's Complete Name</label>
                    <input type="text" placeholder="Mother's Complete Name. . ." id="mother_name">
                </div>
            </div>
            <div class="six wide field">
                <div class="ui input">
                    <label>Occupation</label>
                    <input type="text" placeholder="Occupation. . ." id="mother_occupation">
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Contact Number</label>
                    <input type="text" placeholder="Contact Number. . ." id="mother_contact">
                </div>
            </div>
            <div class="seven wide field">
                <div class="ui input">
                    <label>Ethnic Origin/Tribe</label>
                    <input type="text" placeholder="Ethnic Origin/Tribe. . ." id="mother_tribe">
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Religion</label>
                    <input type="text" placeholder="Religion. . ." id="mother_religion">
                </div>
            </div>
            <div class="eight wide field">
                <label>Gross Income per Year (Php)</label>
                    <select class="ui labeled icon dropdown" id="mother_income">
                        <option value="">Gross Income Per Year</option>
                        <option value="10,000 - 20,000">10,000 - 20,000</option>
                        <option value="20,000 - 40,000">20,000 - 40,000</option>
                        <option value="40,000 - 60,000">40,000 - 60,000</option>
                        <option value="60,000 - 80,000">60,000 - 80,000</option>
                        <option value="80,000 - 100,000">80,000 - 100,000</option>
                        <option value="120,000 - 140,000">120,000 - 140,000</option>
                        <option value="140,000 - 160,000">140,000 - 160,000</option>
                        <option value="160,000 - 180,000">160,000 - 180,000</option>
                        <option value="180,000 - 200,000">180,000 - 200,000</option>
                        <option value="200,000 - 220,000">200,000 - 220,000</option>
                        <option value="220,000 - 240,000">220,000 - 240,000</option>
                        <option value="240,000 - 260,000">240,000 - 260,000</option>           
                        <option value="260,000 - 280,000">260,000 - 280,000</option>
                        <option value="280,000 - 300,000">280,000 - 300,000</option>
                        <option value="300,000 - 320,000">300,000 - 320,000</option>
                        <option value="320,000 - 340,000">320,000 - 340,000</option>
                        <option value="340,000 - 360,000">340,000 - 360,000</option>
                        <option value="360,000 - 380,000">360,000 - 380,000</option>
                        <option value="380,000 - 400,000">380,000 - 400,000</option>
                        <option value="400,000 - 420,000">400,000 - 420,000</option>
                        <option value="420,000 - 440,000">420,000 - 440,000</option>
                        <option value="440,000 - 460,000">440,000 - 460,000</option>
                        <option value="460,000 - 480,000">460,000 - 480,000</option>
                        <option value="480,000 - 500,000">480,000 - 500,000</option>
                        <option value="500,000 - 1,000,000">500,000 - 1,000,000</option>
                    </select>
            </div>
        </div>
        </div>
    </div>
    


    <div class="ui segment" id="education1" style="display: none;">
        <p>
        <hr>
        <div class="ui form">
        <div class="fields">
            <div class="eight wide field">
                <label>College Name</label>
                    <select class="ui dropdown" id="college">
                          <option value="">Select Your College Name</option>
                          <option value="CHARM">College of Hotel and Restaurant Management</option>
                          <option value="CIT">College of Information Technology</option>
                          <option value="CHS">College of Health Science</option>
                          <option value="CNSM">College of Natural Sciences and Mathematics</option>
                          <option value="CSSH">College of Social Sciences and Humanities</option>
                          <option value="CPA">College of Public Affairs</option>
                          <option value="CBAA">College of Business Administration and Accountancy</option>
                          <option value="COA">College of Agriculture</option>
                          <option value="CED">College of Education</option>
                          <option value="COE">College of Engineering</option>
                          <option value="CSPEAR">College of Sports Physical Education and Recreation</option>
                          <option value="CFES">College of Forestry and Environmental Science</option>
                          <option value="KFCIAAS">College of King Faisal Center for Islamic and Asian Studies</option>
                          <option value="COF">College of Fisheries and Aquatic Resources</option>
                    </select>
            </div>
            <div class="six wide field">
                <div class="ui input">
                    <label>Course/Degree</label>
                    <input type="text" placeholder="Course/Degree. . ." id="course">
                </div>
            </div>
        </div>
        <div class="fields">
             <div class="five wide field">
<!--
                <label>Current GPA</label>
                     <select class="ui dropdown" id="current_gpa">
                      <option value="">GPA</option>
                      <option value="1.00 - 1.25">1.00 - 1.25</option>
                      <option value="1.25 - 1.50">1.25 - 1.50</option>
                      <option value="1.50 - 1.75">1.50 - 1.75</option>
                      <option value="1.75 - 2.00">1.75 - 2.00</option>
                      <option value="2.00 - 2.25">2.00 - 2.25</option>
                      <option value="2.25 - 2.50">2.25 - 2.50</option>
                      <option value="2.50 - 2.75">2.50 - 2.75</option>
                      <option value="2.75 - 3.00">2.75 - 3.00</option>
                    </select>
-->
                <div class="ui input">
                    <label>Current GPA</label>
                    <input type="text" placeholder="Current GPA. . ." id="gpa">
                </div>
            </div>
            <div class="five wide field">
<!--
                <label>Current CGPA</label>
                    <select class="ui dropdown" id="current_cgpa">
                      <option value="">CGPA</option>
                      <option value="1.00 - 1.25">1.00 - 1.25</option>
                      <option value="1.25 - 1.50">1.25 - 1.50</option>
                      <option value="1.50 - 1.75">1.50 - 1.75</option>
                      <option value="1.75 - 2.00">1.75 - 2.00</option>
                      <option value="2.00 - 2.25">2.00 - 2.25</option>
                      <option value="2.25 - 2.50">2.25 - 2.50</option>
                      <option value="2.50 - 2.75">2.50 - 2.75</option>
                      <option value="2.75 - 3.00">2.75 - 3.00</option>
                    </select>
-->
                <div class="ui input">
                    <label>Current CGPA</label>
                    <input type="text" placeholder="Current CGPA. . ." id="cgpa">
                </div>
            </div>
        </div>
        <div class="fields">
              <div class="six wide field">
                <label>Year Level</label>
                    <select class="ui dropdown" id="year_level">
                          <option value="">Year Level</option>
                          <option value="1">First Year</option>
                          <option value="2">Second Year</option>
                          <option value="3">Third Year</option>
                          <option value="4">Fourth Year</option>
                          <option value="5">Fifth Year</option>
                    </select>
            </div>
        </div>
        </div>
    </div>
    

    <div class="ui segment" id="file1" style="display: none;">
        <p>
        <hr>
        <div class="ui form">
<!--
            <p style="color: red;">Required!</p>
            <p>To prove us your identity, please upload your current and latest credentials.</p> 
            <p>(Evaluation Sheets, Enrollment and Billing Form(EBF), and Grade Card).</p> 
            <p>Failure to submit those required credentials may forfeit and disqualify your application.</p>
-->         
        <div class="ui negative message">
          <div class="header">
            Required!!
          </div>
          <p>To prove us your identity, please upload your current and latest credentials.
            (Evaluation Sheets, Enrollment and Billing Form(EBF), and Grade Card).</p> 
            <p>Failure to submit those required credentials may forfeit and disqualify your application.</p>
        </div>
        <br>    
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Evaluation Sheet</label>
                    <input type="file" id="evaluation_sheet">
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Enrollment and Billing Form</label>
                    <input type="file" id="ebf">
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Grade Card</label>
                    <input type="file" id="grade_card">
                </div>
            </div>
        </div>
        </div>
    </div>

    
    <div class="footer">
        <div class="actions">
            <button class="ui blue labeled icon button" id="submitApplicant">
<!--                <i class="chevron right icon"></i>-->
                    <i class="check icon"></i>
                    Finish
                </button>
            <button class="ui negative labeled icon button">
                <i class="remove icon"></i>
                Cancel
            </button>
        </div>
    </div>



    <script type="text/javascript">
        $('select.dropdown')
          .dropdown()
        ;
        
//        $('#sportsDropdown')
//          .dropdown({
//            allowAdditions: true
//          })
//        ;
        
        
        function stepChange(id){
            
            document.getElementById("showProfile1").className = "step";
            document.getElementById("showFather1").className = "step";
            document.getElementById("showMother1").className = "step";
            document.getElementById("showEducation1").className = "step";
            document.getElementById("showFile1").className = "step";
            
            document.getElementById("profile-icon").className = "user icon";
            document.getElementById("father-icon").className = "male icon";
            document.getElementById("mother-icon").className = "female icon";
            document.getElementById("education-icon").className = "book icon";
            document.getElementById("file-icon").className = "file icon";
            
            document.getElementById(id).className = "active step";

            if(id == "showProfile1"){
                document.getElementById("profile-icon").className = "blue user icon";
                document.getElementById("user1").style.display = "block";
                
                document.getElementById("mother1").style.display = "none";
                document.getElementById("father1").style.display = "none";
                document.getElementById("education1").style.display = "none";
                document.getElementById("file1").style.display = "none";
            }
            
            else if(id == "showFather1"){
                document.getElementById("father-icon").className = "blue male icon";
                document.getElementById("father1").style.display = "block";
                
                document.getElementById("mother1").style.display = "none";
                document.getElementById("user1").style.display = "none";
                document.getElementById("education1").style.display = "none";
                document.getElementById("file1").style.display = "none";
            }
            
            else if(id == "showMother1"){
                document.getElementById("mother-icon").className = "blue female icon";
                document.getElementById("mother1").style.display = "block";
                
                document.getElementById("user1").style.display = "none";
                document.getElementById("father1").style.display = "none";
                document.getElementById("education1").style.display = "none";
                document.getElementById("file1").style.display = "none";
            }
            
            else if(id == "showEducation1"){
                 document.getElementById("education-icon").className = "blue book icon";
                document.getElementById("education1").style.display = "block";
                
                document.getElementById("mother1").style.display = "none";
                document.getElementById("father1").style.display = "none";
                document.getElementById("user1").style.display = "none";
                document.getElementById("file1").style.display = "none";
            }
            else{
                document.getElementById("file-icon").className = "blue file icon";
                document.getElementById("file1").style.display = "block";
                
                document.getElementById("mother1").style.display = "none";
                document.getElementById("father1").style.display = "none";
                document.getElementById("education1").style.display = "none";
                document.getElementById("user1").style.display = "none";
            }
        }
        
        $('#submitApplicant').click(function(){
            var id = $('#id_number').val();
            var fn = $('#firstname').val();
            var mn = $('#middlename').val();
            var ln = $('#lastname').val();
            var sex = $("#gender").val();
            var dob = $("#date_of_birth").val();
            
            var month = dob[0] + "" + dob[1];
            var day = dob[3] + "" + dob[4];
            var year = dob[6] + "" + dob[7];
                if(dob[6] < 6){
                    year = "20" + dob[6] + "" + dob[7];
                }else{
                    year = "19" + dob[6] + "" + dob[7];
                }
            dob = year + "-" + month + "-" + day;
            
            var home_add = $('#home_address').val();
            var tribe = $('#tribe').val();
            var contact = $('#contact_number').val();
            var email = $('#email_address').val();
            
            var father_name = $('#father_name').val();
            var father_occupation = $('#father_occupation').val();
            var father_contact = $('#father_contact').val();
            var father_tribe = $('#father_tribe').val();
            var father_religion = $('#father_religion').val();
            var father_income = $('#father_income').val();
            
            var mother_name = $('#mother_name').val();
            var mother_occupation = $('#mother_occupation').val();
            var mother_contact = $('#mother_contact').val();
            var mother_tribe = $('#mother_tribe').val();
            var mother_religion = $('#mother_religion').val();
            var mother_income = $('#mother_income').val();
          
            var college = $('#college').val();
            var course = $('#course').val();
            var cgpa = $('#cgpa').val();
            var gpa = $('#gpa').val();
            var evaluation_sheet = $('#evaluation_sheet').val();
            var ebf = $('#ebf').val();
            var grade_card = $('#grade_card').val();
            
            
            $.ajax({
                    type: "POST",
                    url: "ajax/insert_applicant.php",
                    data:{ 
                        id_number:id,
                        firstname: fn,
                        middlename: mn,
                        lastname: ln,
                        gender: sex,
                        date_birth: dob,
                        home_address: home_add,
                        tribe: tribe,
                        contact: contact,
                        email: email,
                        father_name: father_name,
                        father_occupation: father_occupation,
                        father_contact: father_contact,
                        father_tribe: father_tribe,
                        father_religion: father_religion,
                        father_income: father_income,
                        mother_name: mother_name,
                        mother_occupation: mother_occupation,
                        mother_contact: mother_contact,
                        mother_tribe: mother_tribe,
                        mother_religion: mother_religion,
                        mother_income: mother_income,
                        college: college,
                        course: course,
                        cgpa: cgpa,
                        gpa: gpa,
                        evaluation_sheet: evaluation_sheet,
                        ebf: ebf,
                        grade_card: grade_card
                         
                    }, 
                    success: function(data){
                        window.location.reload(); 
                        //alert(data);
                    }
                });
        });
        
    </script>



</div>