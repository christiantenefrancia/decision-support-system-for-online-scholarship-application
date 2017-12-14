<html lang="en" ng-app="angularTable">
<head>
     <?php 
        include('header.php');
    ?>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="lib/angular/angular.js"></script>
	<script src="lib/dirPagination.js"></script>
	<script src="app/app.js"></script>
    
</head>
    
<body>
    <?php include('topbar.php'); ?>
    <div class="ui grid">
        <div class="seven wide column">
            &emsp;
            <img src="images/thesis-logo.png"></img>
        </div>
        <div class="eight wide column">
            <br>
            <div class="big blue large four item ui secondary pointing menu">
                <a class="item" href="index.php" style="font-size: 18px;">
				    Home
				</a>
				<a class="item" href="view_scholarship.php" style="font-size: 18px;">
				    Scholarship
				</a>
				<a class="item active" href="convertJSON.php" style="font-size: 18px;">
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
        <div class="eight wide column"></div>
        <div class="seven wide column">
         <div class="ui form">
            <div class="fields">
                <div class="sixteen wide field">
                     <select class="ui labeled icon dropdown" id="scho_d">
                        <option value="">Choose Scholarship. . .</option>
                        <?php 
                                include('connect.php');
                                $query1 = mysql_query("select name from scholarship") or die(mysql_error());
                                while($row1 = mysql_fetch_array($query1)){
                                    if($row1['name'] != 'SASE'){
                            ?>  
                                <option value=<?php echo $row1['name']; ?>><?php echo $row1['name']; ?></option> 
                              <?php  
                                    }
                                }
                            ?>
                    </select>
                </div>
            </div>
        </div>
        </div>   
    </div>
    
    <div class="ui grid">
        <div class="one wide column"></div>
        <div class="fourteen wide column">
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
				<table class="blue ui celled table">
					<thead>
						<tr>
<!--                            <th>Status</th>-->
                            <th ng-click="sort('xnum')">Examinee Number
								<span class="glyphicon sort-icon" ng-show="sortKey=='xnum'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
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
                            <th ng-click="sort('score')">Score
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
						</tr>
					</thead>
					<tbody>
						<tr dir-paginate="user in users|orderBy:sortKey:reverse|filter:search|itemsPerPage:10">
<!--
                            <td class="center aligned">
                                    <input type="checkbox" class="ui checkbox">
                            </td>
-->
                            <td>{{user.xnum}}</td>
                            <td>{{user.firstname}}</td>
                            <td>{{user.middlename}}</td>
							<td>{{user.lastname}}</td>
                            <td>{{user.score}}</td>
							<td>{{user.address}}</td>
                            <td>{{user.school}}</td>
                            <td>{{user.religion}}</td>
                            <td>{{user.tribe}}</td>
                            <td>{{user.year_passed}}</td>
						</tr>
					</tbody>
                    <tfoot class="full-width">
<!--
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
                            <button class="ui small negative labeled icon disabled button">
                                <i class="remove icon"></i>
                              Delete All
                            </button>
                          </th>
                        </tr>   
-->
                      </tfoot>
				</table> 
        
                
<!--
                <span style="color:black;" class="selected-item">Selected Items:<span>
                 <div ng-repeat="name in selection" class="selected-item">
                  {{name}}
                 </div>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <?php include('footer.php'); ?>
    
    <script type="text/javascript">
        
        $('#scho_d')
          .dropdown({
            onChange: function(value,text) {
                $.ajax({
                    type: "POST",
                    url: "ajax/function.php",
                    data:{ postvalue: text }, 
                    success: function(data){
                        window.location.reload(); 
//                        alert(data);
                    }
                });
            }
          });
    </script>
    
 
</body>
</html>