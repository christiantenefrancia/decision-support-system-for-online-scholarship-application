<?php include('header.php'); ?> 
    <script type="text/javascript" src="js/semantic.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
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
<div class="ui grid" id="description" style="display: none;">
        <div class="three wide column"></div>
        <div class="twelve wide column">
            <h3 class="blue ui top attached header">
              Scholarship
            </h3>
            <div class="ui attached segment" style="min-height: 300px;">
              <div class="ui top attached tabular menu">
              <a class="active item" onclick="showDiv('div1')">
                Name
              </a>
              <a class="item" onclick="showDiv('slotDiv')">
                Slots
              </a>
              <a class="item" onclick="showDiv('descriptionDiv')">
                Description
              </a>
              <a class="item" onclick="showDiv('dateDiv')">
                Date of Activity
              </a>
              <a class="item" onclick="showDiv('privilegeDiv')">
                Privileges
              </a>
              <a class="item" onclick="showDiv('requirementDiv')">
                Requirements
              </a>
              <a class="item" onclick="showDiv('companyDiv')">
                Company
              </a>
<!--
              <div class="right menu">
                <div class="item">
                  <div class="ui transparent icon input">
                    <a><button class="large ui circular facebook icon button" id="modal">
                        <i class="large write icon"></i>
			             </button>
                    </a>
                  </div>
                </div>
              </div>
-->
            </div>
                
            <?php
                include('connect.php'); 
                $query = mysql_query("select slots from scholarship where scholarshipID = 1") or die(mysql_error());
                $row = mysql_fetch_array($query);
            ?>
            
            <div class="ui bottom attached segment" id="slotDiv" style="display: none;">
                <a><button class="large ui circular facebook right floated icon button" onclick="showSlotModal()">
                        <i class="large write icon"></i>
			             </button>
                    </a>
                <div style="padding-top: 2%;">
                <hr>
                </div>
                <br>
                    <label style="padding-left: 2%;">Number of Slots :  <?php echo $row['slots']; ?></label>
                        
            </div>
        
                
            <?php
                $query = mysql_query("select details from scholarship where scholarshipID = 1") or die(mysql_error());
                $row = mysql_fetch_array($query);
            ?>
            <div class="ui bottom attached segment" id="descriptionDiv" style="display: none;">
                <a><button class="large ui circular facebook right floated icon button" id="modal">
                        <i class="large write icon"></i>
			             </button>
                    </a>
                <div style="padding-top: 2%;">
                <hr>
                </div>
                <p>
                    <textarea disabled rows="5" cols="50">
                        <?php echo $row['details']; ?>
                    </textarea>
                </p>
            </div>
            
            <div class="ui bottom attached segment" id="dateDiv" style="display: none;">
                <a><button class="large ui circular facebook right floated icon button" id="modal">
                        <i class="large write icon"></i>
			             </button>
                    </a>
                <div style="padding-top: 2%;">
                <hr>
                </div>
                <br>
                <p> 
                    <div class="ui input">
                        <input type='text' placeholder="Date Start" class='datepicker-here' data-language='en' data-position="right top"/>
                    </div>
                        &nbsp;&nbsp;-&nbsp;&nbsp;
                     <div class="ui input">
                        <input type='text' placeholder="Date End" class='datepicker-here' data-language='en' data-position="right top" />
                    </div>
                </p>
            </div>
            
            <div class="ui bottom attached segment" id="privilegeDiv" style="display: none;">
                <a><button class="large ui circular facebook right floated icon button" onclick="showPrivilegeModal()">
                        <i class="large write icon"></i>
			             </button>
                    </a>
                <div style="padding-top: 2%;">
                <hr>
                </div>
                <table class="ui very basic collapsing celled table" style="min-width: 70%;">
                    <thead>
                        <tr><th></th></tr>
                    </thead>
                    <tbody> 
                    <?php
                        $query = mysql_query("select privileges from privilege where scholarshipID = 1") or die(mysql_error());
                         while ($row = mysql_fetch_array($query)) {
                             ?> <tr><td style="padding-left: 3%;"> <?php echo $row['privileges']; ?></td> </tr>
                         <?php } ?>
                        
                    </tbody>
                </table>
            </div>
    
            <div class="ui bottom attached segment" id="requirementDiv" style="display: none;">
                <a><button class="large ui circular facebook right floated icon button" id="modal">
                        <i class="large write icon"></i>
			             </button>
                    </a>
               <div style="padding-top: 2%;">
                <hr>
                </div>
                <table class="ui very basic collapsing celled table" style="min-width: 70%;">
                    <thead>
                        <tr><th></th></tr>
                    </thead>
                    <tbody> 
                    <?php
                        $query = mysql_query("select requirements from requirement where scholarshipID = 1") or die(mysql_error());
                         while ($row = mysql_fetch_array($query)) {
                             ?> <tr><td style="padding-left: 3%;"> <?php echo $row['requirements']; ?></td> </tr>
                         <?php } ?>
                        
                    </tbody>
                </table>
            </div>
            
            <div class="ui bottom attached segment" id="companyDiv" style="display: none;">
                <a><button class="large ui circular facebook right floated icon button" id="modal">
                        <i class="large write icon"></i>
			             </button>
                    </a>
                <div style="padding-top: 2%;">
                <hr>
                </div>
                <p>
                    <div class="ui input">
                        <input type="text" placeholder="Company">
                    </div>
                </p>
            </div>

            <div class="ui bottom attached segment" id="div1" style="display: block;">
                <a><button class="large ui circular facebook right floated icon button" onclick="showNameModal()">
                        <i class="large write icon"></i>
			             </button>
                    </a>
                <div style="padding-top: 2%;">
                <hr>
                </div>
                <?php
                    $query = mysql_query("select name from scholarship where scholarshipID = 1") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                ?>
                <br>
                    <div class="ui disabled input">
                        <input type="text"  placeholder = <?php echo $row['name']." disabled=''"; ?> >
                    </div>
                </p>
            </div>
            <br>
             <?php  
                    include('privilege_modal.php');
                    include('name_modal.php'); 
                    include('slot_modal.php'); 
             ?>
             
            </div>
        </div>
    </div>

<script type="text/javascript">
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
        $('#privilege_modal')
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
    
    
    function showDiv(id){
        document.getElementById("div1").style.display = "none";
        document.getElementById("slotDiv").style.display = "none";
        document.getElementById("privilegeDiv").style.display = "none";
        document.getElementById("dateDiv").style.display = "none";
        document.getElementById("requirementDiv").style.display = "none";
        document.getElementById("descriptionDiv").style.display = "none";
        document.getElementById("companyDiv").style.display = "none";
        
        document.getElementById(id).style.display = "block";
    }
    
</script>