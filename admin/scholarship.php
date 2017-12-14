<html lang="en" ng-app="angularTable">
<head>
    <meta charset="utf-8">
<!--    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
</head>
<?php include('header.php'); ?>
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
        <div class="ui blue inverted segment" style="padding-left: 19%;">
          <div class="ui text menu">
              <a class="browse item" style="color: white; font-size: 18px;">
                  <label id="scholarship_name"><?php echo $row['name']; ?></label>
                <i class="dropdown icon"></i>
              </a>
              <div class="ui fluid popup" style="width: 50%;">
                <div class="ui three column divided grid">
                  <div class="column">
                    <a onclick="changeDisplay('details')"><h4 class="ui header">Scholarship</h4></a>
                    <div class="ui link list">
                      <a class="item" onclick="changeDisplay('details')">Description</a>
                      <a class="item" onclick="changeDisplay('details')">Details</a>
                      <a class="item" onclick="changeDisplay('details')">Updates</a>
                    </div>
                  </div>
                  <div class="column">
                      <a onclick="changeDisplay('edit')"><h4 class="ui header">Edit</h4></a>
                    <div class="ui link list">
                      <a class="item" onclick="changeDisplay('edit')">Name</a>
                      <a class="item" onclick="changeDisplay('edit')">Privileges</a>
                      <a class="item" onclick="changeDisplay('edit')">Requirements</a>
                      <a class="item" onclick="changeDisplay('edit')">Scholarship Reccomendation Basis</a>
                    </div>
                  </div>
                  <div class="column">
                    <a onclick="changeDisplay('form')"><h4 class="ui header">Form</h4></a>
                    <div class="ui link list">
                      <a class="item" onclick="changeDisplay('form')">View</a>
                      <a class="item" onclick="changeDisplay('form')">Download</a>
                      <a class="item" onclick="changeDisplay('form')">Print</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
        </div>
     </div>
    </div>
    
    
<!--    sidebar-menu-->
    
     <div class="ui left fixed vertical menu" style="width: 17%; display: block;">
		<div class="ui large floating message">
			<div class="item" style="background: teal;">
		    	<img class="ui small circular image" src="../images/baded.jpg">
		    	<br>
		    	<label style="color: white;">Administrator</label>
		    	<br>
		    	<label style="color: white; font-size: 11px;">admin@gmail.com</label>
		  	</div>
		</div>

	  	<a class="item" href="ajax/applicants_list.php">
	  		<h4 class="ui header">
			  <i class="blue users icon"></i>
			  <div class="content">
                  <p>Applicants</p>
			  </div>
			</h4>
            </a>    

	  	<a class="item active" href="scholarship.php">
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
    
    <?php include('details.php'); ?>
    <?php include('edit.php'); ?> 
    <?php include('form.php'); ?>
    
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
    <script src="app/app.js"></script>
    
    
    <script type="text/javascript">
        $('#checkbox').checkbox();
        
//        $('#modal').click(function(){
//           $('.ui.modal').modal('show');
//            
//        });
        
        $('#sidebar').click(function(){
            $('.ui.labeled.icon.sidebar').sidebar('setting', 'transition', 'scale down')
              .sidebar('toggle'); 
        
        });
        
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
        
        
        function changeDisplay(id)
        {
            document.getElementById("details").style.display="none";
            document.getElementById("edit").style.display="none";
            document.getElementById("form").style.display="none";
            
            document.getElementById(id).style.display="block";
        }
        
        function changeDiv(id){
        document.getElementById("nameDiv").style.display = "none";
        document.getElementById("slotDiv").style.display = "none";
        document.getElementById("descriptionDiv").style.display = "none";
        document.getElementById("privilegeDiv").style.display = "none";
        document.getElementById("requirementDiv").style.display = "none";
        document.getElementById("companyDiv").style.display = "none";
        
        document.getElementById(id).style.display = "block";
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