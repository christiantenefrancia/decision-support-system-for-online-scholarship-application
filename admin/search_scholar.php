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
                 <?php echo $row['name']; ?> Scholars
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

	  	<a class="item" href=<?php if($status == 'true')
                                            echo "adminsase1.php";
                                    else
                                        echo "ajax/applicants_list.php"; ?>>
	  		<h4 class="ui header">
			  <i class="blue users icon"></i>
			  <div class="content">
                  <p>Applicants</p>
			  </div>
			</h4>
            </a>    

	  	<a class="item" href=<?php if($status == 'true')
                                            echo "adminScholarship.php";
                                    else
                                        echo "scholarship.php"?>>
	  		<h4 class="ui header">
			  <i class="blue file text outline icon"></i>
			  <div class="content">
			    <p>Scholarship</p>
			  </div>
			</h4>
            </a>
         
         <a class="item active" href="search_scholar.php">
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
        <div class="ten wide column"></div>
        <div class="six wide column">
         <div class="ui form">
            <div class="fields">
                <div class="fifteen wide field">
                     <select class="ui labeled icon dropdown" id="scho_dropdown">
                        <option value="">Choose Academic Year. . .</option>
                        <option value="2015-2016 1st Semester">2015-2016 1st Semester</option> 
                        <option value="2015-2016 2nd Semester">2015-2016 2nd Semester</option> 
                        <option value="2014-2015 1st Semester">2014-2015 1st Semester</option> 
                        <option value="2014-2015 2nd Semester">2014-2015 2nd Semester</option> 
                        <option value="2013-2014 1st Semester">2013-2014 1st Semester</option> 
                        <option value="2013-2014 2nd Semester">2013-2014 2nd Semester</option> 
                    </select>
                </div>
            </div>
        </div>
        </div>    
    </div>
    
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
                            <div class="one wide field">
                                <a href="javascript:void(0);" onclick="printPage();"><button class="ui blue labeled icon button">
                                    <i class="print icon"></i>
                                    Print
                                    </button></a>
                            </div>
                            <div class="fifteen wide field" style="padding-left: 50%;">
                                <label>Search : &nbsp;</label>
                                <div class="ui left icon input" style="width: 100%;">
                                  <input type="text" ng-model="search" class="form-control" placeholder="Search Applicant..." style="height: 40px;">
                                  <i class="blue users icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
				</form>
				<table class="blue ui celled table" border="2">
					<thead>
						<tr>
<!--                            <th>Status</th>-->
							<th ng-click="sort('firstname')">First Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('middlename')">Middle Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('lastname')">Last Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='last_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('lastname')">Sex
								<span class="glyphicon sort-icon" ng-show="sortKey=='last_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('lastname')">Home Address
								<span class="glyphicon sort-icon" ng-show="sortKey=='last_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('lastname')">Religion
								<span class="glyphicon sort-icon" ng-show="sortKey=='last_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('lastname')">Citizenship
								<span class="glyphicon sort-icon" ng-show="sortKey=='last_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('contact_number')">Contact Number
								<span class="glyphicon sort-icon" ng-show="sortKey=='first_name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('email_address')">Email Address
								<span class="glyphicon sort-icon" ng-show="sortKey=='hobby'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
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
							<td>{{user.firstname}}</td>
                            <td>{{user.middlename}}</td>
							<td>{{user.lastname}}</td>
                            <td>{{user.sex}}</td>
                            <td>{{user.home_address}}</td>
                            <td>{{user.religion}}</td>
                            <td>{{user.citizenship}}</td>
                            <td>{{user.contact_number}}</td>
							<td>{{user.email_address}}</td>
<!--
                            <td><button class="blue ui small labeled icon button" id="{{user.applicant_id}}" onclick="showAppInfo(this.id)">
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
                            <button class="ui right floated small primary labeled icon button" onclick="showAddApplicantModal()">
                              <i class="add user icon"></i> Add Applicant
                            </button>
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
                
                
                <?php //include('addApplicant_modal.php');
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
		<script src="app/search_applicant.js"></script>
    
    
    <script type="text/javascript">
        
        $('#scho_dropdown')
          .dropdown({
            action: 'hide',
            onChange: function(value,text) {
                $.ajax({
                    type: "POST",
                    url: "ajax/search_applicant.php",
                    data:{ postvalue: text }, 
                    success: function(data){
                        window.location.reload(); 
//                        alert(data);
                    }
                });
            }
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
        
        
        function showPictureModal(){
            $('#picture_modal').modal('show');
        }
        
        function showAccountModal(){
            $('#account_modal').modal('show');
        }
        
        
        function printPage(){
            var tableData = '<table border="2">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
            var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
            myWindow=window.open('','','width=800,height=600');
            myWindow.innerWidth = screen.width;
            myWindow.innerHeight = screen.height;
            myWindow.screenX = 0;
            myWindow.screenY = 0;
            myWindow.document.write(data);
            myWindow.focus();
        };
        
    </script>
    
</body>
</html>