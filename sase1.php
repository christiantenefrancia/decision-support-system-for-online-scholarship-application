<html lang="en" ng-app="angularTable"> 
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
<!--    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <script src="lib/angular/angular.js"></script>
	<script src="lib/dirPagination.js"></script>
	<script src="app/app.js"></script>
    <title>DSS Scholarship</title>

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
                        <option value="All Scholars">All Scholars</option> 
                        <option value="Science Scholarship">Science Scholarship</option> 
                        <option value="Academic Scholarship">Academic Scholarship</option> 
                        <option value="Cultural Community Grant (CCG)">Cultural Community Grant (CCG)</option> 
                        <option value="Special Muslim Grant">Special Muslim Grant</option> 
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
                            <div class="three wide field">
                                <label>Choose Year</label>
                                <select class="ui labeled icon dropdown" id="scho_dropdown">
                                    <option value="">Select Year. . .</option>
                                    <option value="2015">2015</option> 
                                    <option value="2014">2014</option> 
                                    <option value="2013">2013</option> 
                                    <option value="2012">2012</option> 
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                </select>
                            </div>
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
                    url: "ajax/sase_scholars.php",
                    data:{ 
                        scholarship: text 
                    }, 
                    success: function(data){
                        window.location.reload(); 
//                        alert(data);
                        $('#scho_d').val(text);
                    }
                });
            }
          });
        
            var scho = $('#scho_d').val();
            $('#scho_dropdown')
          .dropdown({
            onChange: function(value,text) {
                $.ajax({
                    type: "POST",
                    url: "ajax/sase_scholars_year.php",
                    data:{ 
                        year: text,
                        scholarship: scho
                    }, 
                    success: function(data){
                        window.location.reload(); 
//                        alert(data);
                        $('#scho_dropdown').val(text);
                    }
                });
            }
          });
    </script>
    
    
    </body>
</html>