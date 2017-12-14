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
                    <option value="index.php">Applicants List</option>
                    <option>Approve Applicants</option>
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

         <a class="item" href="search_scholar.php">
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
				<form class="form-inline" style="padding-left: 69%;">
<!--
                    <label>Search: &nbsp;</label>
					<div class="ui input">
						<input type="text" ng-model="search" class="form-control" placeholder="Search">
					</div>
-->
                                <label>Search : &nbsp;</label>
                                <div class="ui left icon input" style="width: 100%;">
                                  <input type="text" ng-model="search" class="form-control" placeholder="Search Applicant..." style="height: 40px;">
                                  <i class="blue users icon"></i>
                                </div>
				</form>
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
                            <th>View Info</th>
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
                            <td><button class="tiny ui circular google plus icon button" id="{{user.applicant_id}}" onclick="disapprove(this.id,this)" data-content="Approve Scholar" data-variation="wide">
                                Disapprove
                            </button></td>
							<td>{{user.firstname}}</td>
                            <td>{{user.middlename}}</td>
							<td>{{user.lastname}}</td>
                            <td>{{user.year_level}}</td>
                            <td>{{user.current_cgpa}}</td>
                            <td>{{user.passed_prev_units}}</td>
                            <td>{{user.current_units}}</td>
                            <td>{{user.contact_number}}</td>
							<td>{{user.email_address}}</td>
                            <td><button class="ui tiny facebook labeled icon button" id="{{user.applicant_id}}" onclick="showAppInfo(this.id)">
                                <i class="info icon"></i>
                              View
                            </button></td>
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
          <a class="item">
            <i class="smile icon"></i>
            Friends
          </a>
        </div>



        <?php include('picture_modal.php'); 
              include('account_modal.php');
        ?>
        
            
        <script src="lib/angular/angular.js"></script>
		<script src="lib/dirPagination.js"></script>
		<script src="app/applicant_approved.js"></script>
    
    
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
                   alert(data);
                } 
           });
        }
        
         function disapprove(id,row){
             $.ajax({
              type: "POST",
               url: "ajax/disapprove_applicant_status.php",
               data: {
                  app_id: id
               },
               success: function(data){
                  // window.location.reload();
                var i = row.parentNode.parentNode.rowIndex;
                document.getElementById("applicantTable").deleteRow(i);
                } 
           });
       }
        
    </script>
    
</body>
</html>