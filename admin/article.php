<html lang="en" ng-app="angularTable">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
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
                 <?php echo $row['name']; ?> Articles
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

	  	<a class="item" href="index.php">
	  		<h4 class="ui header">
			  <i class="blue users icon"></i>
			  <div class="content">
                  <p>Applicants</p>
			  </div>
			</h4>
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
         
	  	<a class="item active">
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
        <div class="twelve wide column">
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
                      <input type="text" ng-model="search" class="form-control" placeholder="Search Applicant..." style="height: 40px;">
                      <i class="blue users icon"></i>
                    </div>
-->
                    <div class="ui form">
                        <div class="fields">
                            <div class="two wide field">
                                 <button class="ui right floated small primary labeled icon button" onclick="showAddArticleModal()">
                                  <i class="plus icon"></i> 
                                     Add Article
                                </button>
                            </div>
                            <div class="fourteen wide field" style="padding-left: 50%;">
                                <label>Search : &nbsp;</label>
                                <div class="ui left icon input" style="width: 100%;">
                                  <input type="text" ng-model="search" class="form-control" placeholder="Search Article..." style="height: 40px;">
                                  <i class="blue users icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
				</form>
				<table class="blue ui celled table" id="articleTable">
					<thead>
						<tr>
<!--                            <th>Status</th>-->
							<th ng-click="sort('article_id')">Action
								<span class="glyphicon sort-icon" ng-show="sortKey=='article_id'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('title')">Title
								<span class="glyphicon sort-icon" ng-show="sortKey=='title'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('sub_title')">Sub-title
								<span class="glyphicon sort-icon" ng-show="sortKey=='sub_title'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('body')">Body
								<span class="glyphicon sort-icon" ng-show="sortKey=='body'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
							<th ng-click="sort('image')">Image
								<span class="glyphicon sort-icon" ng-show="sortKey=='image'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
							</th>
                            <th ng-click="sort('date_created')">Date Created
								<span class="glyphicon sort-icon" ng-show="sortKey=='image'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
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
<!--							<td><input type="checkbox" id="{{user.id}}" value="{{user.id}}" ng-checked="selection.indexOf(user.id) > -1" ng-click="toggleSelection(user.id)" /><label for ="{{user.id}}"</label>{{user.id}}</td>-->
                            <td>
                                <button class="ui tiny negative labeled icon button" id="{{user.article_id}}" value="{{user.article_id}}" onclick="deleteArticle(this.id,this)">
                                    <i class="remove icon"></i>
                                    Delete
                                </button>
                            </td>
							<td>{{user.title}}</td>
							<td>{{user.sub_title}}</td>
							<td>{{user.body}}</td>
                            <td><img src="../images/{{user.image}}" width="80" height="80px" /></td>
                            <td>{{user.date_created}}</td>
						</tr>
					</tbody>
<!--
                    <tfoot class="full-width">
                        <tr>
                          <th></th>
                          <th colspan="4">
                            <button class="ui right floated small primary labeled icon button" onclick="showAddArticleModal()">
                              <i class="add user icon"></i> Add Article
                            </button>
                            <button class="ui small negative labeled icon button" onclick="showItem()">
                                <i class="remove circle icon"></i>
                              Delete
                            </button>
                          </th>
                        </tr>   
                      </tfoot>
-->
				</table> 
                
                
                <?php include('addArticle_modal.php');
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
        ?>
        
            
        <script src="lib/angular/angular.js"></script>
		<script src="lib/dirPagination.js"></script>
		<script src="app/article.js"></script>
    
    
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
        
        function showAddArticleModal(){
            $('#addArticle_modal')
                .modal('show');
        }
        
        function showPictureModal(){
            $('#picture_modal').modal('show');
        }
        
        function showAccountModal(){
            $('#account_modal').modal('show');
        }
        
        function deleteArticle(id,row){
            $.ajax({
              type: "POST",
               url: "ajax/delete_article.php",
               data: {
                  article_id: id
               },
               
               success: function(data){
                    var i = row.parentNode.parentNode.rowIndex;
                document.getElementById("articleTable").deleteRow(i);
                } 
           });
        }
        
    </script>
    
</body>
</html>