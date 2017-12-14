            <div class="ui medium modal" id="reminder_modal">
              <h2 class="blue ui header">
                <i class="warning circle icon"></i>
                <div class="content">
                     Reminder! ! !
                </div>
              </h2>
                <form method="post">
                <br>
                <br>
                <br>
                <br>
                <div class="ui error message" style="font-size: 18px;">
                    <p>This is to remind you that the following SASE cut-off scores for this year is final.:<br></p>
                        <p style="padding-left: 5%;">
                        <?php
                            $query = mysql_query("select cut_off_score, name from cut_off_score inner join scholarship on cut_off_score.scholarship_id = scholarship.scholarship_id");
                            while($row = mysql_fetch_array($query)){
                                echo "<strong>".$row['name']." ( ".$row['cut_off_score']." )</strong> </br>";
                            }
                        ?>
                        </p>
                    <p>Furthermore, any changes will not be allowed after you already have approved an applicant.</p>
                    <p><strong>Are you sure you want to proceed?</strong></p>
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="updateName()">
                            <i class="arrow circle outline right icon"></i>
                                Proceed
                        </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>

<script type="text/javascript">
    function updateName(){
        var id = getID();   
        var row = getRow();
        
        $.ajax({
              type: "POST",
               url: "ajax/approve_sase_status.php",
               data: {
                  scho_id: id
               },
               success: function(data){
                  // window.location.reload();
                var i = row.parentNode.parentNode.rowIndex;
                document.getElementById("scholarTable").deleteRow(i);
                document.getElementById('generateScho').style.display = "none";
                } 
           });
    }
     
    
</script>





