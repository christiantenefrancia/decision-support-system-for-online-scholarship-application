<html lang="en" ng-app="angularTable">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/datepicker.min.css">
<link rel="stylesheet" type="text/css" href="css/datepicker.css">
<script type=text/javascript src="js/datepicker.js"></script>
<script type="text/javascript" src="js/datepicker.min.js"></script>
<script type="text/javascript" src="js/i18n/datepicker.en.js"></script>
</head> 
<title>DSS Scholarship</title>
    
<style>
    .datepicker { 
        z-index:1151 !important; 
    }
</style>    

<?php include('connect.php'); ?>
<?php include('session.php'); ?>
    
<body>
    <?php include('topbar.php'); ?>
    <?php
        $query = mysql_query("select * from scholarship where scholarship_id = $id");
        $row = mysql_fetch_array($query);
    ?>
    
     <div class="ui grid">
        <div class="three wide column"></div>
        <div class="eight wide column">
            <br>
            <img src="../images/thesis-logo.png" height="15%"></img>
        </div>
         <div class="sixteen wide column">
            <div class="ui blue inverted segment" style="padding-left: 19%; font-size: 18px;">
                 <?php echo $row['name']; ?> Applicants
            </div>
         </div>
    </div>
    
    <!--    sidebar-menu-->
    
     <div class="ui left fixed vertical menu" style="width: 17%;">
		<div class="ui large floating message">
			<div class="item" style="background: teal;">
		    	<img class="ui small circular image" src="images/45589_tokyo_ghoul.jpg">
		    	<br>
		    	<label style="color: white;">Administrator</label>
		    	<br>
		    	<label style="color: white; font-size: 11px;">admin@gmail.com</label>
		  	</div>
		</div>

<!--
	  	<a class="item active" href="index.php">
	  		<h4 class="ui header">
			  <i class="blue users icon"></i>
			  <div class="content">
                  <p>Applicants</p>
			  </div>
			</h4>
            </a>    
-->
         <a class="ui vertical menu" id="hybrid">
            <div class="ui dropdown item">
                <h4 class="ui header">
                    <i class="blue users icon"></i>
                    <div class="content">
                        <p>Applicants</p>
                    </div>
                </h4> 
                <select onChange="window.location.href=this.value">
                    <option value="ajax/applicants_list.php">Applicants List</option>
                    <option value="ajax/query_applicant_approved.php">Approve Applicants</option>
                </select>
            </div>
        </a>

	  	<a class="item" href="scholarship.php">
	  		<h4 class="ui header">
			  <i class="blue file text outline icon"></i>
			  <div class="content">
			    <p>Scholarship</p>
			  </div>
			</h4>
            </a>

         <a class="item" href="ajax/search_applicant.php">
	  		<h4 class="ui header">
			  <i class="blue search icon"></i>
			  <div class="content">
			    <p>Search Scholar</p>
			  </div>
			</h4>
	  	</a>     
         
         
	  	<a class="item" href="ajax/get_article.php">
	  		<h4 class="ui header">
			  <i class="blue archive icon"></i>
			  <div class="content">
			   <p>Articles</p>
			  </div>
			</h4>
	  	</a>
    
         <a class="item" id="sidebar">
             <h4 class="ui header">
			  <i class="blue settings icon"></i>
			  <div class="content">
			    <p>Account Settings</p>
			  </div>
			</h4>
	  	</a>
    </div>
    
<!--    end sidebar-menu-->
    
    
    <div class="ui grid">
        <div class="three wide column"></div>
        <div class="thirteen wide column">
    <div role="main" class="ui segment">
			<div class="bs-component" ng-controller="listdata">
<!--
				<div class="alert alert-info">
					<p>Sort key: {{sortKey}}</p>
					<p>Reverse: {{reverse}}</p>
					<p>Search String : {{search}}</p>
				</div>
-->
				<form class="form-inline">
<!--
                    <label>Search: &nbsp;</label>
					<div class="ui input">
						<input type="text" ng-model="search" class="form-control" placeholder="Search">
					</div>
-->
                    <div class="ui form">
                        <div class="fields">
                            <div class="seven wide field">
<!--
                                <button class="ui small primary labeled icon button" onclick="showAddApplicantModal()">
                                  <i class="add user icon"></i> Add Applicant
                                </button>
-->
                                <button class="ui small primary labeled icon button" onclick="showRecommendModal()">
                                    <i class="list layout icon"></i>
                                    Generate Recommended Applicants
                                </button>
                            </div>
                            <div class="nine wide field" style="padding-left: 25%;">
                                <label>Search : &nbsp;</label>
                                <div class="ui left icon input" style="width: 100%;">
                                  <input type="text" ng-model="search" class="form-control" placeholder="Search Applicant..." style="height: 40px;">
                                  <i class="blue users icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
				</form>
                <div class="ui error message">
                    <p style="font-size: 16px;"><i class="large warning circle icon"></i>
                        Student Data must be updated from this semester. <a onclick="showUploadModal()"><em>Click here to upload file!</em></a></p>
                </div>
				<table class="blue ui celled table" id="applicantTable">
					<thead>
						<tr>
<!--                            <th>Status</th>-->
							<th ng-click="sort('applicant_id')">Action
								<span class="glyphicon sort-icon" ng-show="sortKey=='id'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('firstname')">First Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('middlename')">Middle Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('lastname')">Last Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='last_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('year_level')">Year Level
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('current_cgpa')">CGPA
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('passed_prev_units')">Previous Units Passed
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('current_units')">Enrolled Units
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('contact_number')">Contact Number
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('email_address')">Email Address
								<span class="glyphicon sort-icon" ng-show="sortKey=='hobby'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
<!--                            <th>View Info</th>-->
						</tr>
					</thead>
					<tbody>
						<tr dir-paginate="user in users|orderBy:sortKey:reverse|filter:search|itemsPerPage:10">
<!--
                            <td class="center aligned">
                                    <input type="checkbox" class="ui checkbox">
                            </td>
-->
<!--							<td><input type="checkbox" id="{{user.applicant_id}}" value="{{user.applicant_id}}" ng-checked="selection.indexOf(user.applicant_id) > -1" ng-click="toggleSelection(user.applicant_id)" /></td>-->
                            <td><button class="tiny ui circular facebook icon button" id="{{user.applicant_id}}" onclick="approve(this.id,this)" data-content="Approve Scholar" data-variation="wide">
                                Approve
                            </button></td>
							<td>{{user.firstname}}</td>
                            <td>{{user.middlename}}</td>
							<td>{{user.lastname}}</td>
                            <td>{{user.year_level}}</td>
                            <td>{{user.current_cgpa}}</td>
                            <td>{{user.passed_prev_units}} units</td>
                            <td>{{user.current_units}} units</td>
                            <td>{{user.contact_number}}</td>
							<td>{{user.email_address}}</td>
<!--
                            <td><button class="tiny ui facebook labeled icon button" id="{{user.applicant_id}}" onclick="showAppInfo(this.id)">
                               <i class="info icon"></i>
                                View
                            </button></td>
-->
						</tr>
					</tbody>
<!--
                    <tfoot class="full-width">
                        <tr>
                          <th></th>
                          <th colspan="10">
                            <button class="blue ui small labeled icon button" onclick="showItem()">
                                <i class="check circle icon"></i>
                              Approve
                            </button>
                            <button class="negative ui small labeled icon button">
                                <i class="remove icon"></i>
                              Delete
                            </button>
                          </th>
                        </tr>   
                      </tfoot>
-->
				</table> 
                
                
                <?php include('addApplicant_modal.php');
                      include('upload_modal.php');
                ?>
                
<!--
                <span style="color:black;" class="selected-item">Selected Items:<span>
                 <div ng-repeat="name in selection" class="selected-item">
                  {{name}}
                 </div>
-->
                      
<!--
                <tfoot>
                    <tr>
                        <th colspan="3">
                          <div class="ui right floated pagination menu">
                            <a class="icon item">
                              <i class="left chevron icon"></i>
                            </a>
                            <a class="item">1</a>
                            <a class="item">2</a>
                            <a class="item">3</a>
                            <a class="item">4</a>
                            <a class="icon item">
                              <i class="right chevron icon"></i>
                            </a>
                              
                          </div>
                        </th>
                      </tr>
                </tfoot>
-->
                        <dir-pagination-controls
                                max-size="10"
                                direction-links="true"
                                boundary-links="true" >
                            </dir-pagination-controls>
                </div>
            </div>
        </div>
    </div>
            
            
        
         <div class="ui left demo blue inverted vertical sidebar labeled icon menu">
          <a class="item" onclick="showPictureModal()">
            <i class="file image outline icon"></i>
            Change Account Picture
          </a>
          <a class="item" onclick="showAccountModal()">
            <i class="write icon"></i>
            Change Username and Password
          </a>
        </div>



        <?php include('picture_modal.php'); 
              include('account_modal.php');
//              include('applicant_info_modal.php');
              include('recommend_modal.php');
        ?>
        
    
    
    
    
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

    
    
            
        <script src="lib/angular/angular.js"></script>
		<script src="lib/dirPagination.js"></script>
		<script src="app/applicant.js"></script>
    
    
    <script type="text/javascript">
        $('#checkbox').checkbox();
        
        $('#hybrid select')
          .dropdown({
            on: 'hover'
          })
        ;
        
        $('.menu .browse')
          .popup({
            hoverable: true,
            position : 'top left',
            delay: {
              show: 300,
              hide: 50
            }
          });
        
        
        menu = {};

        // ready event
        menu.ready = function() {
          // selector cache
          var
            $menuItem = $('.menu a.item, .menu .link.item'),
            // alias
            handler = {
              activate: function() {
                $(this)
                .addClass('active')
                .closest('.ui.menu')
                .find('.item')
                .not($(this))
                .removeClass('active');
              }
            };
          $menuItem
            .on('click', handler.activate);
        };
        // attach ready event
        $(document).ready(menu.ready);
        
        $('#sidebar').click(function(){
            $('.ui.labeled.icon.sidebar').sidebar('setting', 'transition', 'scale down')
              .sidebar('toggle'); 
        
        });
        
        function showAddApplicantModal(){
            $('#addApplicant_modal')
                .modal('show');
        }
        
        function showPictureModal(){
            $('#picture_modal').modal('show');
        }
        
        function showAccountModal(){
            $('#account_modal').modal('show');
        }
        
        function showAppInfo(id){
             $.ajax({
              type: "POST",
               url: "ajax/get_id.php",
               data: {
                  app_id: id
               },
               
               success: function(data){
                   var parse = data.split("=");
                   var fn = parse[1];
                   $('#firstname').val('fn');
                   $('#info_modal').modal('show');
                } 
           });
        }
        
         function approve(id,row){
            $.ajax({
              type: "POST",
               url: "ajax/approve_applicant_status.php",
               data: {
                  app_id: id
               },
               success: function(data){
                  // window.location.reload();
                var i = row.parentNode.parentNode.rowIndex;
                document.getElementById("applicantTable").deleteRow(i);
                  // alert(data);
                } 
           });
       }
        
        function showUploadModal(){
            $('#upload_modal').modal('show');
        }
        
        function showRecommendModal(){
            $('#recommend_modal').modal('show');
        }
        
//        function recommend(){
//            $.ajax({
//              type: "POST",
//               url: "ajax/recommended.php",
//               data: {
//               },
//               success: function(data){
//                 window.location.reload();
//                } 
//           });
//        }
        
        
//         var active = "showProfile";
//        
//        function stepChange(id){
//            
//            if(active == id){
//                document.getElementById(id).className = "active step";
//            }
//            else{
//                document.getElementById(id).className = "active step";
//                document.getElementById(active).className = "step";
//            }
//            active = id;
//            
//            if(id == "showProfile"){
//                document.getElementById("user").style.display = "block";
//                
//                document.getElementById("mother").style.display = "none";
//                document.getElementById("father").style.display = "none";
//                document.getElementById("education").style.display = "none";
//                document.getElementById("file").style.display = "none";
//            }
//            
//            else if(id == "showFather"){
//                document.getElementById("father").style.display = "block";
//                
//                document.getElementById("mother").style.display = "none";
//                document.getElementById("user").style.display = "none";
//                document.getElementById("education").style.display = "none";
//                document.getElementById("file").style.display = "none";
//            }
//            
//            else if(id == "showMother"){
//                document.getElementById("mother").style.display = "block";
//                
//                document.getElementById("user").style.display = "none";
//                document.getElementById("father").style.display = "none";
//                document.getElementById("education").style.display = "none";
//                document.getElementById("file").style.display = "none";
//            }
//            
//            else if(id == "showEducation"){
//                document.getElementById("education").style.display = "block";
//                
//                document.getElementById("mother").style.display = "none";
//                document.getElementById("father").style.display = "none";
//                document.getElementById("user").style.display = "none";
//                document.getElementById("file").style.display = "none";
//            }
//            else{
//                document.getElementById("file").style.display = "block";
//                
//                document.getElementById("mother").style.display = "none";
//                document.getElementById("father").style.display = "none";
//                document.getElementById("education").style.display = "none";
//                document.getElementById("user").style.display = "none";
//            }
//        }
        
    </script>
    
</body>
</html>