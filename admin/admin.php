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
    <script src="lib/angular/angular.js"></script>
	<script src="lib/dirPagination.js"></script>
	<script src="app/query.js"></script>
    
</head> 
    
<style>
    .datepicker { 
        z-index:1151 !important; 
    }
</style>    

<body>
    <?php include('topbar.php'); ?>
    <!--    sidebar-menu-->
    <?php
        include('connect.php');
        include('session.php');
    
        $query = mysql_query("select firstname,lastname,email from admin where admin_id = $id");
        $row = mysql_fetch_array($query);
    ?>
    
     <div class="ui left fixed vertical menu" style="width: 17%;">
		<div class="ui large floating message">
			<div class="item" style="background: teal;">
		    	<img class="ui small circular image" src="images/45589_tokyo_ghoul.jpg">
		    	<br>
		    	<label style="color: white;"><?php echo $row['firstname']." ".$row['lastname']; ?></label>
		    	<br>
		    	<label style="color: white; font-size: 11px;"><?php echo $row['email']; ?></label>
		  	</div>
		</div>

	  	<a class="item active" href="admin.php">
	  		<h4 class="ui header">
			  <i class="blue users icon"></i>
			  <div class="content">
                  <p>Accounts</p>
			  </div>
			</h4>
            </a>    

	  	<a class="item" href="adminScholarship.php">
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
         
	  	<a class="item" href="article.php">
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
        <div class="eight wide column">
            <br>
            <img src="../images/thesis-logo.png" height="15%"></img>
        </div>
         <div class="sixteen wide column">
            <div class="ui blue inverted segment" style="padding-left: 19%; font-size: 18px;">
                 Manage Accounts
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
				<form class="form-inline" style="padding-left: 66%;">
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
				<table class="blue ui celled table">
					<thead>
						<tr>
<!--                            <th>Status</th>-->
							<th ng-click="sort('staff_id')">Action
								<span class="glyphicon sort-icon" ng-show="sortKey=='id'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('name')">Scholarship
								<span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('firstname')">First Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='firstname'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('middlename')">Middle Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='middlename'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('lastname')">Last Name
								<span class="glyphicon sort-icon" ng-show="sortKey=='lastname'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('address')">Address
								<span class="glyphicon sort-icon" ng-show="sortKey=='address'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('contact_number')">Contact Number
								<span class="glyphicon sort-icon" ng-show="sortKey=='contact_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('email')">Email
								<span class="glyphicon sort-icon" ng-show="sortKey=='email'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
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
							<td><input type="checkbox" id="{{user.staff_id}}" value="{{user.staff_id}}" ng-checked="selection.indexOf(user.staff_id) > -1" ng-click="toggleSelection(user.staff_id)" /><label for ="{{user.staff_id}}"</label></td>
							<td>{{user.name}}</td>
                            <td>{{user.firstname}}</td>
                            <td>{{user.middlename}}</td>
							<td>{{user.lastname}}</td>
							<td>{{user.address}}</td>
                            <td>{{user.contact_number}}</td>
                            <td>{{user.email}}</td>
						</tr>
					</tbody>
                    <tfoot class="full-width">
                        <tr>
                          <th></th>
                          <th colspan="7">
                            <button class="ui right floated small primary labeled icon button" onclick="showAddAccountModal()">
                              <i class="add user icon"></i> Assign Account
                            </button>
                            <button class="ui small negative labeled icon button" onclick="deleteAccount()">
                                <i class="remove circle icon"></i>
                              Delete
                            </button>
<!--
                            <button class="ui small negative labeled icon disabled button">
                                <i class="remove icon"></i>
                              Delete All
                            </button>
-->
                          </th>
                        </tr>   
                      </tfoot>
				</table> 
                
                
                <?php include('addAccount_modal.php');
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
        
            
    <script type="text/javascript">
        $('#checkbox').checkbox();
        
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
        
        function showAddAccountModal(){
            $('#addAccount_modal')
                .modal('show');
        }
        
        function showPictureModal(){
            $('#picture_modal').modal('show');
        }
        
        function showAccountModal(){
            $('#account_modal').modal('show');
        }
        
    </script>
    
</body>
</html>