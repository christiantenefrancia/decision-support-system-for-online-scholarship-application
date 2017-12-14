<div class="ui large modal" id="scho_details_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Scholarship Details
                </div>
              </h2>
                <?php
                    include('connect.php');
                    session_start();
                    $s_id = $_SESSION['id'];
                    $query = mysql_query("select * from scholarship where scholarship_id = $s_id") or die(mysql_error());
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
    
<div class="ui grid" id="details" style="display: block;">
    <div class="two wide column"></div>
    <div class="thirteen wide column">
        <div class="ui segment">
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
                            $query2 = mysql_query("select privileges from privilege where scholarship_id = $s_id") or die(mysql_error());
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
                            $query2 = mysql_query("select requirements from requirement where scholarship_id = $s_id") or die(mysql_error());
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
    
     <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit">
                            <i class="checkmark icon"></i>
                                OK
                        </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>