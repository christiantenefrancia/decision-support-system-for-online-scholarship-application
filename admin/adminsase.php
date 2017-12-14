<html lang="en" ng-app="angularTable">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="lib/angular/angular.js"></script>
    <script src="lib/dirPagination.js"></script>
    <script src="app/query_sase.js"></script>
</head>

<?php include('header.php'); ?>
<?php include('connect.php'); ?>
<?php include('session.php'); ?>
    
    
    <script type="text/javascript">
        
    </script>
    
    
<body>
    <?php include('topbar.php'); ?>
    <?php
        $query = mysql_query("select * from scholarship where scholarship_id = $id");
        $row = mysql_fetch_array($query);
    ?>
    
    <?php //include('topbar.php'); ?>
<!--
   <div class="ui grid">
        <div class="seven wide column">
            &emsp;
            <img src="../images/thesis-logo.png"></img>
        </div>
        <div class="eight wide column">
            <br>
            <div class="big blue large four item ui secondary pointing menu">
                <a class="item active" href="adminsase.php" style="font-size: 18px;">
				    Applicants
				</a>
                <a>
				    <div class="ui dropdown item" id="item">
                        <strong style="font-size: 18px; color: #0066FF;">Scholarship</strong> <i class="dropdown icon" style="color: #0066FF;"></i>
						  <div class="menu">
						      <a class="item" id="internal">View Scholarships</a>
						      <a class="item" id="external" href="scholarship.php">Get Recommendation</a>
						  </div>
				    </div>
                </a>
				<a class="item" href="article.php" style="font-size: 18px;">
				    Articles
                </a>
                <a class="item" style="font-size: 18px;" id="sidebar">
                    Account Settings
                </a>
            </div>
        </div>
    </div>
-->
    
    
    
     <div class="ui grid">
        <div class="three wide column"></div>
        <div class="eight wide column">
            <br>
            <img src="../images/thesis-logo.png" height="15%"></img>
         <div class="ui vertical menu" id="hybrid">
  <div class="ui dropdown item">
    <i class="dropdown icon"></i>
    Colors
    <select>
      <option>Red</option>
      <option>Black</option>
      <option>Blue</option>
      <option>Green</option>
    </select>
  </div>
  <div class="ui dropdown item">
    <i class="dropdown icon"></i>
    Sizes
    <select>
      <option>Small</option>
      <option>Medium</option>
      <option>Large</option>
      <option>Huge</option>
    </select>
  </div>
</div>
        </div>
         <div class="sixteen wide column">
            <div class="ui blue inverted segment" style="padding-left: 19%; font-size: 18px;">
                 <?php //echo $row['name']; ?> SASE Scholarship Passers
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
	  	<a class="item active" href="adminsase.php">
	  		<h4 class="ui header">
			  <i class="blue users icon"></i>
			  <div class="content">
                  <p>Applicants</p>
			  </div>
			</h4>
            </a>    
-->

	  	<a class="item" href="scholarship.php">
	  		<h4 class="ui header">
			  <i class="blue file text outline icon"></i>
			  <div class="content">
			    <p>Scholarship</p>
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
         
        <a class="item" href="logout.php">
	  		<h4 class="ui header">
			  <i class="blue sign out icon"></i>
			  <div class="content">
			    <p>Logout</p>
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
				<form class="form-inline" style="padding-left: 66%;">
<!--
                    <label>Search: &nbsp;</label>
					<div class="ui input">
						<input type="text" ng-model="search" class="form-control" placeholder="Search">
					</div>
-->
                    
                    <label>Search : &nbsp;</label>
                    <div class="ui left icon input" style="width: 100%;">
                      <input type="text" ng-model="search" class="form-control" placeholder="Search Passer..." style="height: 40px;">
                      <i class="blue users icon"></i>
                    </div>
				</form>
                <div class="ui error message">Click the column came to sort data.! ! !</div>
				<table class="blue ui celled table">
					<thead>
						<tr>
<!--                            <th>Status</th>-->
                            <th ng-click="sort('sase_passers_list_id')">Action
								<span class="glyphicon sort-icon" ng-show="sortKey=='firstname'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
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
							<th ng-click="sort('school')">School
								<span class="glyphicon sort-icon" ng-show="sortKey=='school'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('address')">Address
								<span class="glyphicon sort-icon" ng-show="sortKey=='address'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('religion')">Religion
								<span class="glyphicon sort-icon" ng-show="sortKey=='religion'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('tribe')">Tribe
								<span class="glyphicon sort-icon" ng-show="sortKey=='tribe'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('year_passed')">Year Passed
								<span class="glyphicon sort-icon" ng-show="sortKey=='year_passed'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('name')">Scholarship
								<span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
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
                            <td><button class="tniy ui circular facebook icon button" id="{{user.sase_passers_list_id}}" onclick="approve(this.id)">
                                <i class="check icon"></i>
                            </button></td>
                            <td>{{user.firstname}}</td>
                            <td>{{user.middlename}}</td>
							<td>{{user.lastname}}</td>
							<td>{{user.address}}</td>
                            <td>{{user.school}}</td>
                            <td>{{user.religion}}</td>
                            <td>{{user.tribe}}</td>
                            <td>{{user.year_passed}}</td>
                            <td>{{user.name}}</td>
						</tr>
					</tbody>
				</table> 
                      
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



        <?php //include('picture_modal.php'); 
              //include('account_modal.php');
        ?>
        
    <script type="text/javascript">
        
        $('#item').dropdown({
          on: 'hover'
        });
        
        
        $('#hybrid select')
          .dropdown({
            on: 'hover'
          })
        ;
        
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
        
        function showPictureModal(){
            $('#picture_modal').modal('show');
        }
        
        function showAccountModal(){
            $('#account_modal').modal('show');
        }
        
        function approve(id){
            alert(id);
        }
        
    </script>
    
    
</body>
</html>