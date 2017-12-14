<div class="ui fullscreen modal" id="info_modal">
    <div class="ui four top attached steps">
      <div class="active step" id="showProfile" onclick="stepChange(this.id)">
        <i class="user icon"></i>
        <div class="content">
          <div class="title">Profile</div>
          <div class="description">Applicant Information</div>
        </div>
      </div>
      <div class="step" id="showFather" onclick="stepChange(this.id)">
        <i class="male icon"></i>
        <div class="content">
          <div class="title">Father</div>
          <div class="description">Father's information</div>
        </div>
      </div>
      <div class="step" id="showMother" onclick="stepChange(this.id)">
        <i class="female icon"></i>
        <div class="content">
          <div class="title">Mother</div>
          <div class="description">Mother's Information</div>
        </div>
      </div>
      <div class="step" id="showEducation" onclick="stepChange(this.id)">
        <i class="file icon"></i>
        <div class="content">
          <div class="title">Education</div>
          <div class="description">Educational Background</div>
        </div>
      </div>
    </div>
    
    <div class="ui segment" id="user" style="display: block;">
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
                     <label>Last name</label>
                  <input type="text" placeholder="Last Name" id="gender">
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
                        <label>Last name</label>
                            <input type="text" placeholder="Last Name" id="civil_status">
                        </div>
                </div>
                <div class="fields">
                    <div class="four wide field">
                         <label>Last name</label>
                            <input type="text" placeholder="Last Name" id="dob">
                        </div>
                    <div class="eight wide field">
                        <div class="ui input">
                            <label>Home Address</label>
                            <input type="text" placeholder="Home Address. . ." id="home_address">
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
            </div>  
        </p>
    </div>
    


    
    <div class="ui segment" id="father" style="display: none;">
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
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Religion</label>
                    <input type="text" placeholder="Religion. . ." id="father_religion">
                </div>
            </div>
            <div class="eight wide field">
                 <label>Last name</label>
                  <input type="text" placeholder="Last Name" id="father_income">
            </div>
        </div>
        </div>
    </div>



        
    <div class="ui segment" id="mother" style="display: none;">
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
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Religion</label>
                    <input type="text" placeholder="Religion. . ." id="mother_religion">
                </div>
            </div>
            <div class="eight wide field">
                 <label>Last name</label>
                  <input type="text" placeholder="Last Name" id="mother_income">
            </div>
        </div>
        </div>
    </div>
    


    <div class="ui segment" id="education" style="display: none;">
        <p>
        <hr>
        <div class="ui form">
        <div class="fields">
            <div class="eight wide field">
                 <label>Last name</label>
                  <input type="text" placeholder="Last Name" id="college">
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
                <div class="ui input">
                    <label>Current CGPA</label>
                    <input type="text" placeholder="Current CGPA. . ." id="cgpa">
                </div>
            </div>
        </div>
        <div class="fields">
              <div class="six wide field">
                 <label>Last name</label>
                  <input type="text" placeholder="Last Name" id="year_level">
            </div>
        </div>
        </div>
    </div>

    
    <div class="footer">
        <div class="actions">
            <button class="ui negative labeled icon button">
                <i class="remove icon"></i>
                Close
            </button>
        </div>
    </div>

</div>

    <script type="text/javascript">
        $('select.dropdown')
          .dropdown()
        ;

        var active = "showProfile";
        
        function stepChange(id){
            
            if(active == id){
                document.getElementById(id).className = "active step";
            }
            else{
                document.getElementById(id).className = "active step";
                document.getElementById(active).className = "step";
            }
            active = id;
            
            if(id == "showProfile"){
                document.getElementById("user").style.display = "block";
                
                document.getElementById("mother").style.display = "none";
                document.getElementById("father").style.display = "none";
                document.getElementById("education").style.display = "none";
                document.getElementById("file").style.display = "none";
            }
            
            else if(id == "showFather"){
                document.getElementById("father").style.display = "block";
                
                document.getElementById("mother").style.display = "none";
                document.getElementById("user").style.display = "none";
                document.getElementById("education").style.display = "none";
                document.getElementById("file").style.display = "none";
            }
            
            else if(id == "showMother"){
                document.getElementById("mother").style.display = "block";
                
                document.getElementById("user").style.display = "none";
                document.getElementById("father").style.display = "none";
                document.getElementById("education").style.display = "none";
                document.getElementById("file").style.display = "none";
            }
            
            else if(id == "showEducation"){
                document.getElementById("education").style.display = "block";
                
                document.getElementById("mother").style.display = "none";
                document.getElementById("father").style.display = "none";
                document.getElementById("user").style.display = "none";
                document.getElementById("file").style.display = "none";
            }
            else{
                document.getElementById("file").style.display = "block";
                
                document.getElementById("mother").style.display = "none";
                document.getElementById("father").style.display = "none";
                document.getElementById("education").style.display = "none";
                document.getElementById("user").style.display = "none";
            }
        }
    </script>
