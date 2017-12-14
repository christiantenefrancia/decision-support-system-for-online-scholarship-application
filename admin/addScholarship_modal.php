
<link rel="stylesheet" type="text/css" href="css/wan-spinner.css">
<script type="text/javascript" src="js/wan-spinner.js"></script>


<div class="ui fullscreen modal" id="add_scholarship_modal">
    <div class="ui three top attached steps">
      <div class="active step" id="showProfile" onclick="stepChange(this.id)">
        <i class="user icon"></i>
        <div class="content">
          <div class="title">Scholarship</div>
          <div class="description">Scholarship Details</div>
        </div>
      </div>
      <div class="step" id="showFather" onclick="stepChange(this.id)">
        <i class="male icon"></i>
        <div class="content">
          <div class="title">Privileges</div>
          <div class="description">Scholarship Privileges</div>
        </div>
      </div>
      <div class="step" id="showMother" onclick="stepChange(this.id)">
        <i class="female icon"></i>
        <div class="content">
          <div class="title">Requirements</div>
          <div class="description">Scholarship Requirements</div>
        </div>
      </div>
<!--
      <div class="step" id="showEducation" onclick="stepChange(this.id)">
        <i class="file icon"></i>
        <div class="content">
          <div class="title">Company</div>
          <div class="description">Company Details</div>
        </div>
      </div>
-->
    </div>
    
    <div class="ui segment" id="user" style="display: block;">
        <p>
        <hr>
        <br>
            <div class="ui form">
              <div class="fields">
                <div class="ten wide field">
                  <label>Scholarship name</label>
                    <div class="ui input">
                        <input type="text" placeholder="Scholarship Name" id="add_name">
                    </div>
                </div>
                <div class="one wide field"></div>
                <div class="five wide field">
                    <label>Slots</label>
                    <div>
                        <div class="wan-spinner wan-spinner-3">
                                <a href="javascript:void(0)" class="minus">
                                    <label style="font-size: 35px;"><strong>-</strong></label>
                                </a>
                            <input type="text" value="0" style="font-size: 16px;" id="add_slot">
                                <a href="javascript:void(0)" class="plus">
                                    <label style="font-size: 20px;"><strong>+</strong></label>
                                </a>
                          </div> 
                    </div>
                </div>
              </div>
                <div class="fields">
                    <div class="ten wide field">
                        <label>Description Details</label>
                            <div class="ui input">
                                <textarea placeholder="Description. . ." cols="100" rows="8" id="add_description"></textarea>
                            </div>
                        </div>
                </div>
                <div class="fields">
                    <div class="five wide field">
                     <label style="font-size: 12px;">Date of Effectivity</label>
                        <select class="ui labeled icon dropdown" id="add_date">
                            <option value="">Choose. . .</option>
                            <option value="10,000 - 20,000">Semestral</option>
                            <option value="20,000 - 40,000">Yearly</option>
                            <option value="40,000 - 60,000">Until Graduated</option>
                    </select>
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
            <div class="fourteen wide field">
                <div class="ui input">
                <textarea placeholder="Additional Privilege" id="privilege" style="height: 40%;"></textarea>
            </div>
            <br>
            <br>
            <button class="blue ui right floated labeled icon button" onclick="AddPrivilegeRow()">
              <i class="plus icon"></i>
              Add
            </button>
            <br>
            <br>
            <br>
            <br>
            <div class="ui segment">
               <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="myPrivTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Privileges</th>
                            <th style="padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <ul>
                    </ul>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>



        
    <div class="ui segment" id="mother" style="display: none;">
        <p>
        <hr>
        <div class="ui form">
        <div class="fields">
            <div class="fourteen wide field">
                <div class="ui input">
                <textarea placeholder="Additional Requirement" id="requirement" style="height: 40%;"></textarea>
            </div>
            <br>
            <br>
            <button class="blue ui right floated labeled icon button" onclick="AddRequirementRow()">
              <i class="plus icon"></i>
              Add
            </button>
            <br>
            <br>
            <br>
            <br>
            <div class="ui segment">
               <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="myRequireTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Requirements</th>
                            <th style="padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <ul>
                    </ul>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    


    <div class="ui segment" id="education" style="display: none;">
        <p>
        <hr>
        <br>
        <div class="ui form">
        <div class="fields">
            <div class="eight wide field">
                 <label>Company Name</label>
                <div class="ui input">
                    <input type="text" placeholder="Company Name. . ." id="course">
                </div>
            </div>
            <div class="six wide field">
                <label>Address</label>
                <div class="ui input">
                    <input type="text" placeholder="Address. . ." id="course">
                </div>
            </div>
        </div>
        <div class="fields">
             <div class="six wide field">
                 <label>Contact Number</label>
                <div class="ui input">
                    <input type="text" placeholder="Contact Number. . ." id="gpa">
                </div>
            </div>
            <div class="six wide field">
                <label>Email</label>
                <div class="ui input">
                    <input type="text" placeholder="Email. . ." id="cgpa">
                </div>
            </div>
        </div>
        </div>
    </div>

    
    <div class="footer">
        <div class="actions">
             <button class="ui blue labeled icon button" id="submitApplicant" onclick="saveScholarship()">
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
        
//        $('#sportsDropdown')
//          .dropdown({
//            allowAdditions: true
//          })
//        ;
        
        $('#add_date')
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
        
        function AddPrivilegeRow()
        {
            var textP = $('#privilege').val();
            $('#myPrivTable').append('<tr><td>'+textP+'</td><td style="padding-left: 3%"><button class="ui tiny negative labeled icon button"><i class="remove icon"></i>Remove</button></td></tr>');
            
            $('#privilege').val('');
        }
        
         function AddRequirementRow()
        {
            var textR = $('#requirement').val();
            $('#myRequireTable').append('<tr><td>'+textR+'</td><td style="padding-left: 3%"><button class="ui tiny negative labeled icon button"><i class="remove icon"></i>Remove</button></td></tr>');
            
            $('#requirement').val('');
        }
        
        var arrayR = [];
        var indexR = 0;
        
        function saveRequire() 
        {
           var table = document.getElementById('myRequireTable');
            for (var r = 1, n = table.rows.length; r < n; r++) {
                for (var c = 0, m = table.rows[r].cells.length; c < m; c=c+2) {
                    arrayR[indexR] = table.rows[r].cells[c].innerHTML;
                    indexR++;
                }
            }
        }
        
        var arrayP = [];
        var indexP = 0;
        
        function savePriv() 
        {
            var table = document.getElementById('myPrivTable');
            for (var r = 1, n = table.rows.length; r < n; r++) {
                for (var c = 0, m = table.rows[r].cells.length; c < m; c=c+2) {
                    arrayP[indexP] = table.rows[r].cells[c].innerHTML;
                    indexP++;
                }
            }
        }
        
        function saveScholarship(){
            var name = $('#add_name').val();
            var slot = $('#add_slot').val();
            var description = $('#add_description').val();
            var date = $('#add_date option:selected').text();
            
           saveRequire();
//            for(var i = 0; i < indexR; i++){
//                alert(arrayR[i]);
//            }
//            
            savePriv();
//            for(var j = 0; j < indexP; j++){
//                alert(arrayP[j]);
//            }
            
             $.ajax({
                type: "POST",
                url: "ajax/add_scholarship.php",
                data:{ 
                    name: name,
                    slot: slot,
                    description: description,
                    date: date,
                    arrayP:JSON.stringify(arrayP),
                    arrayR:JSON.stringify(arrayR),
                    sizeP: indexP,
                    sizeR: indexR
                }, 
                 success: function(data){
                    window.location.reload(); 
                   // alert(data);
                }
            });
        }
        
    </script>



</div>