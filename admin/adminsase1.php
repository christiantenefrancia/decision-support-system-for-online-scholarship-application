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
<script type="text/javascript" src="js/i18n/datepicker.en.js"></script>
</head> 
<title>DSS Scholarship</title>

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
                 SASE Scholars
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

         <a class="ui vertical menu" id="hybrid">
            <div class="ui dropdown item">
                <h4 class="ui header">
                    <i class="blue users icon"></i>
                    <div class="content">
                        <p>SASE Scholars</p>
                    </div>
                </h4> 
                <select onChange="window.location.href=this.value">
                    <option>Scholars List</option>
                    <option value="ajax/query_sase_approved.php">Approve Scholars</option>
                </select>
            </div>
        </a>
<!--
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
                  </div>
-->

	  	<a class="item" href="admin_sase_scholarship.php">
	  		<h4 class="ui header">
			  <i class="blue file text outline icon"></i>
			  <div class="content">
			    <p>Scholarship</p>
			  </div>
			</h4>
            </a>
         
         <a class="item" href="ajax/search_sase_applicant.php">
	  		<h4 class="ui header">
			  <i class="blue search icon"></i>
			  <div class="content">
			    <p>Search Scholar</p>
			  </div>
			</h4>
	  	</a>     
         
<!--
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
-->

	  	<a class="item" href="sase_article.php">
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
                    
<!--
                    <label>Search : &nbsp;</label>
                    <div class="ui left icon input" style="width: 100%;">
                      <input type="text" ng-model="search" class="form-control" placeholder="Search Passer..." style="height: 40px;">
                      <i class="blue users icon"></i>
                    </div>
-->
                     <div class="ui form">
                        <div class="fields">
                            <?php 
                                $query = mysql_query("select status from sase_scholars_list where status = 'Approve'");
                                $count = 0;
                            
                                while($row = mysql_fetch_array($query)){
                                    $count++;
                                    break;
                                }
                                if($count == 0){
                            ?>
                            <div class="three wide field" id="generateScho">
                               <button class="ui small blue labeled icon button" onclick="generateScholars()">
                                    <i class="check icon"></i>
                                    Generate SASE Scholars
                                </button>
                            </div>
                            <?php } ?>
                            <div class="thirteen wide field" style="padding-left: 40%;">
                                <label>Search : &nbsp;</label>
                                    <div class="ui left icon input" style="width: 100%;">
                                      <input type="text" ng-model="search" class="form-control" placeholder="Search Passer..." style="height: 40px;">
                                      <i class="blue users icon"></i>
                                    </div>
                            </div>
                        </div>
                    </div>
				</form>
                
                <div class="ui error message">Click the column name to sort data.! ! !</div>
				<table class="blue ui celled table" id="scholarTable">
					<thead>
						<tr>
<!--                            <th>Status</th>-->
                            <th ng-click="sort('sase_passers_list_id')">Action
								<span class="glyphicon sort-icon" ng-show="sortKey=='sase_passers_list_id'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
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
                            <th ng-click="sort('score')">Score
								<span class="glyphicon sort-icon" ng-show="sortKey=='score'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
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
                            <td><button class="tiny ui circular facebook icon button" id="{{user.sase_passers_list_id}}" onclick="approve(this.id,this)" data-content="Approve Scholar" data-variation="wide">
                                Approve
                            </button></td>
                            <td>{{user.firstname}}</td>
                            <td>{{user.middlename}}</td>
							<td>{{user.lastname}}</td>
							<td>{{user.address}}</td>
                            <td>{{user.school}}</td>
                            <td>{{user.religion}}</td>
                            <td>{{user.tribe}}</td>
                            <td>{{user.year_passed}}</td>
                             <td>{{user.score}}</td>
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



        <?php include('picture_modal.php'); 
              include('account_modal.php');
              include('cut_off_score_modal.php');
              include('reminder_modal.php');
        ?>
        
            
        <script src="lib/angular/angular.js"></script>
		<script src="lib/dirPagination.js"></script>
		<script src="app/query_sase.js"></script>
    
    
    <script type="text/javascript">
        
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
        
       document.getElementById('sase_scholars').onchange = function() {
    window.location.href = this.children[this.selectedIndex].getAttribute('href');
}
       
       function approve(id,row){
            set(id,row);
           $('#reminder_modal').modal('show');
//            $.ajax({
//              type: "POST",
//               url: "ajax/approve_sase_status.php",
//               data: {
//                  scho_id: id
//               },
//               success: function(data){
//                  // window.location.reload();
//                var i = row.parentNode.parentNode.rowIndex;
//                document.getElementById("scholarTable").deleteRow(i);
//                } 
//           });
       }
        
       var schoID;
       var row;
        
       function set(id,r ){
           schoID = id;
           row = r;
       }
        
        function getID( ){
            return schoID;
        }
        
        function getRow( ){
            return row;
        }
        
        function generateScholars(){
            $('#cut_off_score_modal').modal('show');
        }
        
    </script>
    
</body>
</html>