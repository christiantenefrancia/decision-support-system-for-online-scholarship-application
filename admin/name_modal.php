<!--
  
            <div class="ui small modal" id="name_modal" style="min-width: 40%; margin-bottom: 10%; height: 35%;">
              <i class="black close icon"></i>
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                    Edit Name
                </div>
                </h2>
               <?php
                    //$query = mysql_query("select name from scholarship where scholarshipID = 1") or die(mysql_error());
                    //$row = mysql_fetch_array($query);
                ?>
                
                <br>
                <br>
                <div style="padding-left: 5%;">
                <label>Scholarship Name</label>
                <br>
                <br>
                <div class="ui input" style="width: 60%;">
                     <input type="text" placeholder=<?php //echo $row['name']; ?>>
                </div>
                </div>
                
                <br>
                <br>
                <br>
                
                
                <div class="footer">
                  <div class="actions">
                    <div class="ui red labeled icon button">
                      <i class="remove icon"></i>
                        Cancel
                    </div>
                    <div class="ui positive labeled icon button">
                      <i class="checkmark icon"></i>
                        Save
                    </div>
                  </div>
                </div>
            </div>-->

            <div class="ui small modal" id="name_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Edit Name
                </div>
              </h2>
                <?php
                     include('connect.php'); 
                    $query = mysql_query("select name from scholarship where scholarship_id = $id") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                ?>
                
                <form method="post">
                <br>
                <br>
                <div style="padding-left: 5%;">
                <label>Scholarship Name</label>
                <br>
                <br>
                <div class="ui input" style="width: 60%;">
                     <input type="text" name="nameInput" value="<?php echo $row['name']; ?>" id="name">
                </div>
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="updateName()">
                            <i class="checkmark icon"></i>
                                Save
                        </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>

<script type="text/javascript">
    function updateName(){
        var name = $('#name').val();
         $.ajax({
              type: "POST",
               url: "ajax/edit_name.php",
               data: {
                  edit_name: name
               },
               
               success: function(data){
                   document.getElementById('scholarship_name').innerHTML = data;
                   $('#scholarship_input_name').val(data);
                   document.getElementById('details_name').innerHTML = data;
                } 
           });
        }
     
    
</script>





