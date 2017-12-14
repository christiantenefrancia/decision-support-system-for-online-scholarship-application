<html>   
    <?php include('header.php'); ?>
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <script type="text/javascript" src="js/exporting.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">

<?php
    include('connect.php');
    include('scholarship_session.php');
    $query = mysql_query("select * from scholarship where scholarship_id = $id") or die(mysql_error());
    $row = mysql_fetch_array($query);
    $slot = $row['slots'];
//    $query3 = mysql_query("select & from company where scholarshipID = 1") or die(mysql_error());
//    $row3 = mysql_fetch_array($query3);
?>


		<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Scholarship Slot Percentage',
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Scholarship',
                colorByPoint: true,
                data: [{
                    name: 'Available Slots',
                    y: <?php echo $slot; ?>
                }, {
                    name: 'Slots Taken',
                    y: 24.03,
                    sliced: true,
                    selected: true
                }]
            }]
        });
    });
});
		</script>
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
                <a>
				    <div class="ui dropdown item" id="item">
                        <strong style="font-size: 18px; color: #0066FF;">Scholarship</strong> <i class="dropdown icon" style="color: #0066FF;"></i>
						  <div class="menu">
						      <a class="item" id="internal">View Scholarships</a>
						      <a class="item" id="external" href="scholarship.php">Get Recommendation</a>
						  </div>
				    </div>
                </a>
				<a class="item" href="convertJSON.php" style="font-size: 18px;">
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
    
<div class="ui grid" id="details" style="display: block;">
    <div class="two wide column"></div>
    <div class="thirteen wide column">
        <div class="ui segment">
            <a style="display: none;">
                <button class="large ui circular google plus left floated icon button">
                    <i class="large minus icon"></i>
                </button>
            </a>
             <a style="display: none;">
                <button class="large ui circular facebook right floated icon button" onclick="showScholarshipModal()">
                    <i class="large plus icon"></i>
                </button>
            </a>
            <div style="padding-top: 2%; display: none;">
                <hr>
            </div>
            
            
            <h3 class="blue ui top attached header" id="details_name">
              <?php echo $row['name']; ?>
            </h3>
            <div class="ui attached segment">
                <div class="ui items">
                    <div class="item">
                        <div class="image">
<!--                            <img src="../images/thesis-logo.png">-->
                            <div id="container" style="min-width: 310px; height: 300px; max-width: 600px; margin: 0 auto"></div>
                        </div>
                        <div class="content">
                            <p style="padding-left: 20%; font-size: 16px;" id="details_details"><?php echo $row['details']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="blue ui attached header">
              Slots
            </h4>
            <div class="ui attached segment">
              <p style="padding-left: 3%; font-size: 16px;" id="details_slots"><?php echo $row['slots']; ?></p>
            </div>
<!--
            <h3 class="ui bottom attached header">
              Bottom Attached
            </h3>
-->
            <h4 class="blue ui attached header">
              Date of Effectivity
            </h4>
            <div class="ui attached segment">
              <p style="padding-left: 3%; font-size: 16px;" id="details_date"><?php echo $row['date_of_effectivity']; ?></p>
            </div>
            <h4 class="blue ui attached header">
              Privileges
            </h4>
            <div class="ui attached segment">
<!--
                <ul id="pList">
               <?php
//                    $query2 = mysql_query("select privileges from privilege where scholarship_id = $id") or die(mysql_error());
//                    while ($row2 = mysql_fetch_array($query2)) {
                    ?> <li style="padding-left: 3%; font-size: 16px;"> <?php //echo $row2['privileges']; ?></li>
                <?php //} ?>
                </ul>
-->
                <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="pTable">
                    <thead>
                        <tr><th style="padding-left: 2%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <ul>
                        <?php
                            $query2 = mysql_query("select privileges from privilege where scholarship_id = $id") or die(mysql_error());
                            while ($row2 = mysql_fetch_array($query2)) {
                            ?> <tr><td style="padding-left: 3%;"><li><?php echo $row2['privileges']; ?></li></td> 
                        </tr>
                        <?php } ?>
                        </ul>
                    </tbody>
                </table>
            </div>
            <h4 class="blue ui attached header">
              Requirements 
            </h4>
            <div class="ui attached segment">
                <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="pTable">
                    <thead>
                        <tr><th style="padding-left: 2%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <ul>
                        <?php
                            $query2 = mysql_query("select requirements from requirement where scholarship_id = $id") or die(mysql_error());
                            while ($row2 = mysql_fetch_array($query2)) {
                            ?> <tr><td style="padding-left: 3%;"><li><?php echo $row2['requirements']; ?></li></td> 
                        </tr>
                        <?php } ?>
                        </ul>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
    <script type="text/javascript">
        
         $('#item')
      .dropdown({
      on: 'hover',
      action: 'hide'
    });
        
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