<link rel="stylesheet" type="text/css" href="css/datepicker.min.css">
<link rel="stylesheet" type="text/css" href="css/datepicker.css">
<script type=text/javascript src="js/datepicker.js"></script>
<script type="text/javascript" src="js/datepicker.min.js"></script>
<script type="text/javascript" src="js/i18n/datepicker.en.js"></script>
<link rel="stylesheet" type="text/css" href="css/wan-spinner.css">
<script type="text/javascript" src="js/wan-spinner.js"></script>

<style>
    .datepicker { 
        z-index:1151 !important; 
    }
</style>
<?php include('session.php'); 
      include('connect.php'); 
?>

<div class="ui grid" id="edit" style="display: none;">
        <div class="three wide column"></div>
        <div class="twelve wide column">
            <h3 class="blue ui top attached header" id="header">
              Scholarship
            </h3>
            <div class="ui bottom attached segment" id="nameDiv" style="min-height: 190px;">
                <div class="ui styled accordion" style="width: 100%;">
                  <div class="title active">
                    <i class="dropdown icon"></i>
                    Name
                  </div>
                  <div class="content active">
                    <p class="transition visible" style="padding-left:25px;">
                        <div class="ui bottom attached segment" id="div1">
                            <a>
                                <button class="large ui circular facebook right floated icon button" onclick="showNameModal()">
                                    <i class="large write icon"></i>
                                </button>
                            </a>
                            <div style="padding-top: 2%;">
                            <hr>
                            </div>
                            <?php
                                $query = mysql_query("select name from scholarship where scholarship_id = $id") or die(mysql_error());
                                $row = mysql_fetch_array($query);
                            ?>
                            <br>
                               <div class="ui input" style="width: 60%;">
                                     <input type="text" disabled value="<?php echo $row['name']; ?>" id="scholarship_input_name">
                                </div>
                            </p>
                        </div>
                    </p>
                  </div>
            
            
                  <div class="title">
                    <i class="dropdown icon"></i>
                    Slots
                  </div>
                  <div class="content">
                    <p  class="transition visible" style="padding-left:25px;">
                        <?php
                            $query = mysql_query("select slots from scholarship where scholarship_id = $id") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                        ?>

                        <div class="ui bottom attached segment" id="slotDiv">
                            <a><button class="large ui circular facebook right floated icon button" onclick="showSlotModal()">
                                    <i class="large write icon"></i>
                                     </button>
                                </a>
                            <div style="padding-top: 2%;">
                            <hr>
                            </div>
                            <br>
                            <label style="padding-left: 2%; font-size: 18px;">Number of Slots : &nbsp; <label id="slot_input_name"><?php echo $row['slots']; ?></label></label>
<!--
                            <div class="wan-spinner wan-spinner-3">
                                <a href="javascript:void(0)" class="minus">
                                    <label style="font-size: 45px;"><strong>-</strong></label>
                                </a>
                            <input type="text" value="5" style="font-size: 18px;">
                                <a href="javascript:void(0)" class="plus">
                                    <label style="font-size: 30px;"><strong>+</strong></label>
                                </a>
                          </div> 
-->

                        </div>  
                    </p>
                  </div>
    
    
                <div class="title">
                    <i class="dropdown icon"></i>
                    Description
                  </div>
                  <div class="content">
                    <p  class="transition visible" style="padding-left:25px;">
                        <?php
                            $query = mysql_query("select details from scholarship where scholarship_id = $id") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                        ?>
                        <div class="ui bottom attached segment" id="descriptionDiv">
                            <a><button class="large ui circular facebook right floated icon button" onclick="showDescriptionModal()">
                                    <i class="large write icon"></i>
                                     </button>
                                </a>
                            <div style="padding-top: 2%;">
                            <hr>
                            </div>
<!--
                            <div class=" fields">
                                <textarea disabled rows="6" cols="80">
                                    <?php //echo $row['details']; ?>
                                </textarea>
                            </div>
-->
                            <div class="field">
                                <textarea id="description_input_name" name="message" rows="6" cols="120" disabled>
                                    <?php echo $row['details']; ?>
                                </textarea>
                            </div>
                            
                        </div>  
                    </p>
                  </div>
    
    
                <div class="title">
                    <i class="dropdown icon"></i>
                    Date of Effectivity
                  </div>
                  <div class="content">
                    <p  class="transition visible" style="padding-left:25px;">
                         <?php
                            $query = mysql_query("select date_of_effectivity from scholarship where scholarship_id = $id") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                        ?>
                        <div class="ui bottom attached segment" id="dateDiv">
                            <a><button class="large ui circular facebook right floated icon button" onclick="showDateModal()">
                                    <i class="large write icon"></i>
                                     </button>
                                </a>
                            <div style="padding-top: 2%;">
                            <hr>
                            </div>
                            <br>
<!--
                            <p> 
                            <div class="ui input">
                                <input type='text' placeholder="Date Start" class='datepicker-here' data-language='en' data-position="right top"/>
                            </div>
                                    &nbsp;&nbsp;-&nbsp;&nbsp;
                            <div class="ui input">
                                <input type='text' placeholder="Date End" class='datepicker-here' data-language='en' data-position="right top" />
                            </div>
-->
                            <div class="ui input" style="width: 30%;">
                                     <input type="text" disabled value="<?php echo $row['date_of_effectivity']; ?>" id="date_input_name">
                                </div>
                            </p>
                        </div>  
                    </p>
                  </div>
    
    
                <div class="title">
                    <i class="dropdown icon"></i>
                    Privileges
                  </div>
                  <div class="content">
                    <p  class="transition visible" style="padding-left:25px;">
                        <div class="ui bottom attached segment" id="privilegeDiv">
                            <a>
                                <button class="large ui circular facebook right floated icon button" onclick="showPrivilegeModal()">
                                    <i class="large write icon"></i>
                                </button>
                            </a>
                            <div style="padding-top: 2%;">
                            <hr>
                            </div>
                            <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="priv_table">
                                <thead>
                                    <tr><th></th></tr>
                                </thead>
                                <tbody> 
                                    <ul>
                                <?php
                                    $query = mysql_query("select privileges from privilege where scholarship_id = $id") or die(mysql_error());
                                     while ($row = mysql_fetch_array($query)) {
                                        ?> <tr><td style="padding-left: 3%;"><li> <?php echo $row['privileges']; ?></li></td> </tr>
                                     <?php } ?>
                                    </ul>
                                </tbody>
                            </table>
                        </div>  
                    </p>
                  </div>
    
    
                <div class="title">
                    <i class="dropdown icon"></i>
                    Requirements
                  </div>
                  <div class="content">
                    <p  class="transition visible" style="padding-left:25px;">
                        <div class="ui bottom attached segment" id="requirementDiv">
                            <a>
                                <button class="large ui circular facebook right floated icon button" onclick="showRequirementModal()">
                                    <i class="large write icon"></i>
                                </button>
                            </a>
                           <div style="padding-top: 2%;">
                            <hr>
                            </div>
                            <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="req_table">
                                <thead>
                                    <tr><th></th></tr>
                                </thead>
                                <tbody> 
                                    <ul>
                                <?php
                                    $query = mysql_query("select requirements from requirement where scholarship_id = $id") or die(mysql_error());
                                     while ($row = mysql_fetch_array($query)) {
                                         ?> <tr><td style="padding-left: 3%;"><li> <?php echo $row['requirements']; ?></li></td> </tr>
                                     <?php } ?>
                                    </ul>
                                </tbody>
                            </table>
                        </div>
                        
                    </p>
                  </div>

                
             <?php
                $query4 = mysql_query("select name from scholarship where scholarship_id = $id");
                $row4 = mysql_fetch_array($query4);   
                $scho_name = $row4['name'];
                if(($scho_name == "Academic Scholarship") || ($scho_name == "Science Scholarship") || ($scho_name == "Special Muslim Grant") || ($scho_name == "Cultural Community Grant (CCG)")){
                    $show = "none";
                }
                else
                    $show = "block";
            ?>

                <div class="title" style="display: <?php echo $show; ?>">
                    <i class="dropdown icon"></i>
                    Scholarship Recommendation Basis
                  </div>
                  <div class="content">
                    <p  class="transition visible" style="padding-left:25px;">
                        <div class="ui bottom attached segment" id="requirementDiv">
                            <a>
                                <button class="large ui circular facebook right floated icon button" onclick="showBasisModal()">
                                    <i class="large write icon"></i>
                                </button>
                            </a>
                           <div style="padding-top: 2%;">
                            <hr>
                            </div>
                            <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="basis_table">
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
                                         ?> <tr><td style="padding-left: 3%;"><li> <?php echo $row['tag_column']; ?></li></td> 
                                                <td style="padding-left: 3%;"> <?php echo $row['tag_value']; ?></td>
                                                <td style="padding-left: 3%;"> <?php echo $row['percentage']; ?></td>
                                        </tr>
                                     <?php } ?>
                                    </ul>
                                </tbody>
                            </table>
                        </div>
                        
                    </p>
                  </div>


            <?php
//                $query = mysql_query("select name from scholarship where scholarship_id = $id");
//                $row = mysql_fetch_array($query);   
//                $scho_name = $row['name'];
//                if(($scho_name == "Academic Scholarship") || ($scho_name == "Science Scholarship") || ($scho_name == "Special Muslim Grant") || ($scho_name == "Cultural Community Grant (CCG)")){
            ?>
<!--
                <div class="title">
                    <i class="dropdown icon"></i>
                    Cut-off Score
                  </div>
                  <div class="content">
                    <p  class="transition visible" style="padding-left:25px;">
                        <div class="ui bottom attached segment" id="companyDiv">
                            <a><button class="large ui circular facebook right floated icon button" onclick="showCutOffModal()">
                                    <i class="large write icon"></i>
                                     </button>
                                </a>
                            <div style="padding-top: 2%;">
                            <hr>
                            </div>
                            <?php
//                                    $query = mysql_query("select tag_value from scholarship_tags where scholarship_id = $id") or die(mysql_error());
//                                    $row = mysql_fetch_array($query);
                            ?>
                            <p>
                                <div class="ui input">
                                    <input type="text" placeholder="Cut-off Score" id="score" value="<?php echo $row['tag_value']; ?>" disabled>
                                </div>
                            </p>
                        </div> 
                    </p>
                  </div>
-->
                <?php //} ?>
                </div>
            </div>
            
                    <?php  
                        include('privilege_modal.php');
                        include('name_modal.php'); 
                        include('slot_modal.php'); 
                        include('description_modal.php');
                        include('date_modal.php');
                        include('requirement_modal.php');
                        //include('cut_off_score_modal.php');  
                        include('scholarship_basis_modal.php');
                     ?>
        </div>
    </div>

<script type="text/javascript">
    $('.ui.accordion').accordion();
    
    $(document).ready(function() {
    var options = {
      maxValue: 10,
      minValue: -5,
      step: 0.131,
      inputWidth: 100,
      start: -2,
      plusClick: function(val) {
        console.log(val);
      },
      minusClick: function(val) {
        console.log(val);
      },
      exceptionFun: function(val) {
        console.log("excep: " + val);
      },
      valueChanged: function(val) {
        console.log('change: ' + val);
      }
    }
	$(".wan-spinner-3").WanSpinner({inputWidth: 100}).css("border-color", "#C0392B");
  });
    
    function showPrivilegeModal(){
        $('#privilege_modal').modal({
    closable  : false})
            .modal('show');
    }
    
    function showNameModal(){
        $('#name_modal')
            .modal('show');
    }
    
    function showSlotModal(){
        $('#slot_modal')
            .modal('show');
    }
    
    function showDescriptionModal(){
        $('#description_modal')
            .modal('show');
    }
    
    function showDateModal(){
        $('#date_modal')
            .modal('show');
    }
    
    function showCutOffModal(){
        $('#cut_off_score_modal').modal('show');
    }
    
    function showRequirementModal(){
        $('#requirement_modal').modal({
    closable  : false})
            .modal('show');
    }
    
    function showBasisModal(){
        $('#basis_modal').modal({
    closable  : false})
            .modal('show');
    }
</script>