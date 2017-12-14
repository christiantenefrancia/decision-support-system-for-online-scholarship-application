<html>

<?php
	include('header.php');
?>

	<script type="text/javascript" src="js/functions.js"></script>

	<body>
        <?php 
            include('connect.php');
            include('topbar.php'); 
        ?>
			<div class="ui grid">
				<div class="seven wide column">
					&emsp;
					<img src="images/thesis-logo.png"></img>
				</div>
				<div class="eight wide column">
					<br>
					<div class="big blue large four item ui secondary pointing menu">
						<a class="item active" href="index.php" style="font-size: 18px;">
					    	Home
						</a>
						<a class="item" href="view_scholarship.php" style="font-size: 18px;">
						    Scholarship
						</a>
						<a class="item" href="convertJSON.php" style="font-size: 18px;">
							SASE
						</a>
						<a class="item" href="about.php" style="font-size: 18px;">
						    About
						</a>
					</div>
				</div>
				<div class="sixteen wide column" id="imageSlider"><?php include('slider1.html');?></div>
			</div>

			<div style="width: 100%; background-color: #191919; height: 20%;">
				<div class="ui grid ">
					<div class="eleven wide column"></div>
					<div class="five wide column">
						<div class="ui search">
							<h3 style="color: #E6E6E6;">Search Scholarship :</h3>
							<div class="ui icon input" style="width: 90%;">
								<input class="prompt" type="text" placeholder="Scholarship. . ." id="scholarship" style="background-color: white;">
							    <i class="blue large search icon" onclick="search()"></i>
						  	</div>
						  	<div class="results" style="width: 90%;"></div>
						</div>
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>
			<br>

			<div class="ui grid">
				<div class="one wide column"></div>
				<div class="five wide column">
					<h1 class="blue ui header">
					  <i class="blue lab icon"></i>
					  <div class="content">
					    Research
					    <div class="sub header"><b>WORLD-LEADING</b></div>
					  </div>
					</h1>
					<br>
					<p>One of the top 20 research-led universities in the country, Mindanao State University is renowned for the relevance of its work, driven by society's need for solutions to real-life issues.</p>
				</div>
				<div class="five wide column">
					<h1 class="blue ui header">
					  <i class="blue student icon"></i>
					  <div class="content">
					    Education
					    <div class="sub header"><b>WORLD-CLASS</b></div>
					  </div>
					</h1>
					<br>
					<p>Develop your organization by partnering us in research, consultancy, new technologies and services and recruiting high calibre students and graduates for placements or employment.</p>
				</div>
				<div class="five wide column">
					<h1 class="blue ui header">
					  <i class="blue trophy icon"></i>
					  <div class="content">
					    Sport
					    <div class="sub header"><b>BEST OF</b></div>
					  </div>
					</h1>
					<br>
					<p>Unrivalled sporting reputation offering excellence in research and teaching, and opportunities from recreational activities up to the highest levels of elite performance.</p>
				</div>
			</div>
            <br>
			<br>
			<br>
            <div class="ui grid">
                <div class="sixteen wide column" style="padding-left: 3%; padding-right: 3%;">
                    <div class="ui raised segment">
                        <h3>Mindanao State University offers variety of scholarship programs<br>
                            Follow the steps to apply:
                        </h3>
                        <div class="ui stackable two column grid">
                            <div class="column">
                                <div class="ui segment">
                                    <p style="font-size: 16px;">1. Browse the list of scholarship programs</p>
                                    <p style="font-size: 16px;">2. Click on a particular scholarship program</p>
                                    <p style="font-size: 16px;"> 3. Complete and fill-out all asked information</p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment">
                                    <p style="font-size: 16px;">4. Submit the application</p>
                                    <p style="font-size: 16px;">5. Visit the website to view the list of approved applicants</p> 
                                    <p style="font-size: 16px;">6. Visit the website for further updates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <br>
                <br>
                <div class="ui grid">
                    <div class="nine wide column" style="padding-left: 3%;">
                        <div class="ui raised segment"><?php include('slider2.php'); ?></div>
                    </div>
                    <div class="seven wide column" style="padding-right: 3%;">
                        <div class="ui raised segment" style="height: 35%;">
                            <h2 class="blue ui header">
                                <i class="feed icon"></i>
                                <div class="content">
                                    News Feeds!
                                </div>
                            </h2>
                            <p>
                                <br>
                                <strong style="font-size: 18px;">MSU Invites You!</strong><br><br>
                                &emsp;&emsp;There will be a general orientation concerning the newly innovated online scholarship application to be held or conducted on the 25th of January, 2015 at Academic Complex, College of Law, MSU Marawi.<br>
                                Hope to see you there! :D
                            </p>
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
	</body>


<script>
    var content = [
  { title: 'Academic Scholarship' },
  { title: 'Science Scholarship' },
  { title: 'College Bound Program' },
  { title: 'CHED Student Financial Assistance Program (STUFAP)' },
  { title: 'CHED Iskolar ng Bayan' },
  { title: 'Cultural Community Grant (CCG)' },
  { title: 'Darangen Cultural Troupe Grants' },
  { title: 'Deans Honors List' },
  { title: 'Chancellors List' },
  { title: 'Presidents List' },
  { title: 'Department of Science and Technology (DOST)' },
  { title: 'Expanded Students Grants-in-Aid Program for Poverty Alleviation (ESGP-PA)' },
  { title: 'Sajahatra Bangsamoro Study Grant' },
  { title: 'Sining Kambayoka Grant' },
  { title: 'Sining Pananadem Grant' },
  { title: 'Special Muslim Study Grant' },
  { title: 'Sports Development Study Grant' },
  { title: 'Entrance Scholarship' },
  { title: 'Tuition Privilege Scholarship' },
  { title: 'University Band Grant' },
  { title: 'University Combo Grant' },
];
    
    $('.ui.search')
      .search({
        source: content
      });
    
    function search( ){
        var value = $('#scholarship').val();        
        $.ajax({
            type: "POST",
            url: "ajax/function.php",
            data:{ postvalue: value }, 
            success: function(data){
            window.location = "view_scholarship.php"; 
//                        alert(data);
            }
        });
    }
    
</script>


</html>