<?php include('header.php'); ?> 
<?php include('session.php'); 
?>
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <script type="text/javascript" src="js/exporting.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <title>DSS Scholarship</title>

<?php
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
            
            
            $(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container1').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Scholarship Distribution Percentage'
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
                    name: 'Academic Scholarship',
                    y: 56.33,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Science Scholarship',
                    y: 24.03
                }, {
                    name: 'Cultural Community Grant',
                    y: 10.38,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Special Muslim Grant',
                    y: 4.77
                }]
            }]
        });
    });
});
            
            
            
            
            $(document).ready(function() {
			var options = {
				chart: {
	                renderTo: 'container2',
	                plotBackgroundColor: null,
	                plotBorderWidth: null,
	                plotShadow: false
	            },
	            title: {
	                text: 'Scholarship Basis Percentage'
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
	                type: 'pie',
	                name: 'Percentage',
                    colorByPoint: true,
	                data: []
	            }]
	        }
	        
	        $.getJSON("data.php", function(json) {
				options.series[0].data = json;
	        	chart = new Highcharts.Chart(options);
	        });
	        
	        
	        
      	}); 
            
            
            
//             $(function () {
//
//    $(document).ready(function () {
//
//        // Build the chart
//        $('#container2').highcharts({
//            chart: {
//                plotBackgroundColor: null,
//                plotBorderWidth: null,
//                plotShadow: false,
//                type: 'pie'
//            },
//            title: {
//                text: 'Scholarship Basis Percentage'
//            },
//            tooltip: {
//                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
//            },
//            plotOptions: {
//                pie: {
//                    allowPointSelect: true,
//                    cursor: 'pointer',
//                    dataLabels: {
//                        enabled: false
//                    },
//                    showInLegend: true
//                }
//            },
//            series: [{
//                name: 'Scholarship',
//                colorByPoint: true,
//                data: [
//                    {
//                    name: 'Academic Scholarship',
//                    y: 56.33,
//                    sliced: true,
//                    selected: true
//                }, {
//                    name: 'Science Scholarship',
//                    y: 24.03
//                }, {
//                    name: 'Cultural Community Grant',
//                    y: 10.38,
//                    sliced: true,
//                    selected: true
//                }, {
//                    name: 'Special Muslim Grant',
//                    y: 4.77
//                }
//                    
//                ]
//            }]
//        });
//    });
//});
            
            
            
		</script>

<div class="ui grid" id="details" style="display: block;">
    <div class="three wide column"></div>
    <div class="twelve wide column">
        <div class="ui segment">
            <?php
                if($status == 'true'){
            ?>
                <a>
                <button class="small ui google plus left floated labeled icon button" onclick="showDeleteModal()">
                    <i class="minus icon"></i>
                    Delete Scholarship
                </button>
            </a>
             <a>
                <button class="small ui facebook right floated labeled icon button" onclick="showScholarshipModal()">
                    <i class="plus icon"></i>
                    Add Scholarship
                </button>
            </a>
            <div style="padding-top: 1%;">
                <hr>
            </div>
            <?php } 
                else {
            ?>
            
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
            <?php } ?>
            
             <?php
                $query5 = mysql_query("select name from scholarship where scholarship_id = $id");
                $row5 = mysql_fetch_array($query5);   
                $scho_name = $row5['name'];
                if(($scho_name == "Academic Scholarship") || ($scho_name == "Science Scholarship") || ($scho_name == "Special Muslim Grant") || ($scho_name == "Cultural Community Grant (CCG)")){
            ?>
            
             <h3 class="blue ui top attached header" id="details_name">
                SASE Scholarships Percentage
            </h3>
            <div class="ui attached segment">
                <div class="ui items">
                    <div class="item">
                        <center>
                        <div class="image">
<!--                            <img src="../images/thesis-logo.png">-->
                            <div id="container1" style="min-width: 390px; height: 380px; max-width: 600px; margin: 0 auto"></div>
                        </div>
                            </center>
<!--
                        <div class="content">
                            <p style="padding-left: 20%; font-size: 16px;" id="details_details"><?php echo $row['details']; ?></p>
                        </div>
-->
                    </div>
                </div>
            </div>
            
            <?php } ?>
            
            
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
                            <p style="padding-left: 20%; font-size: 16px; padding-top: 8%;" id="details_details"><?php echo $row['details']; ?></p>
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
                <ul id="pList">
               <?php
                    $query2 = mysql_query("select privileges from privilege where scholarship_id = $id") or die(mysql_error());
                    while ($row2 = mysql_fetch_array($query2)) {
                    ?> <li style="padding-left: 3%; font-size: 16px;"> <?php echo $row2['privileges']; ?></li>
                <?php } ?>
                </ul>
            </div>
            <h4 class="blue ui attached header">
              Requirements 
            </h4>
            <div class="ui attached segment">
                <ul id="rList">
                 <?php
                    $query1 = mysql_query("select requirements from requirement where scholarship_id = $id") or die(mysql_error());
                    while ($row1 = mysql_fetch_array($query1)) {
                    ?> <li style="padding-left: 3%; font-size: 16px;"> <?php echo $row1['requirements']; ?></li>
                <?php } ?>
                </ul>
            </div>
            
            <?php
                $query = mysql_query("select name from scholarship where scholarship_id = $id");
                $row = mysql_fetch_array($query);   
                $scho_name = $row['name'];
                if(($scho_name == "Academic Scholarship") || ($scho_name == "Science Scholarship") || ($scho_name == "Special Muslim Grant") || ($scho_name == "Cultural Community Grant (CCG)")){
                    $show = "none";
                }
                else
                    $show = "block";
            ?>
            
            <h4 class="blue ui attached header" style="display: <?php echo $show; ?>">
              Scholarship Recommendation Basis 
            </h4>
             <div class="ui attached segment">
                <div class="ui items">
                    <div class="item">
                        <center>
                        <div class="image">
<!--                            <img src="../images/thesis-logo.png">-->
                            <div id="container2" style="min-width: 390px; height: 380px; max-width: 600px; margin: 0 auto"></div>
                        </div>
                            </center>
<!--
                        <div class="content">
                            <p style="padding-left: 20%; font-size: 16px;" id="details_details"><?php echo $row['details']; ?></p>
                        </div>
-->
                    </div>
                </div>
            </div>
            <div class="ui attached segment" style="display: <?php echo $show; ?>">
                <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="bList">
                                <thead>
                                    <tr><th style="padding-left: 2%;">Basis</th>
                                        <th style="padding-left: 2%;">Value</th>
                                        <th style="padding-left: 2%;">Percentage</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <ul>
                                <?php
                                    $query = mysql_query("select tag_column,tag_value,percentage from scholarship_tags where scholarship_id = $id") or die(mysql_error());
                                     while ($row = mysql_fetch_array($query)) {
                                         ?> <tr>
                                                <td style="padding-left: 3%;"><li> <?php echo $row['tag_column']; ?></li></td> 
                                                <td style="padding-left: 3%;"> <?php echo $row['tag_value']; ?></td>
                                                <td style="padding-left: 3%;"> <?php echo $row['percentage']; ?></td>
                                        </tr>
                                     <?php } ?>
                                    </ul>
                                </tbody>
                            </table>
            </div>
<!--
            <div class="ui attached segment">
              <p> -> <?php //echo $row3['name']; ?>
                  -> <?php //echo $row3['address']; ?>
                  -> <?php //echo $row3['contactNo']; ?>
                  -> <?php //echo $row3['email']; ?>
              </p>
            </div>
-->         
        </div>
    </div>
    
    
    <?php include('addScholarship_modal.php'); 
          include('delete_modal.php');
    ?>
    
    
    <script type="text/javascript">
        function showScholarshipModal(){
        $('#add_scholarship_modal')
            .modal('show');
    }
    
         function showDeleteModal(){
        $('#delete_modal')
            .modal('show');
    }
        
    </script>

</div>




