<div class="ui medium modal" id="description_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Edit Description
                </div>
              </h2>
                <?php
                     include('connect.php'); 
                    $query = mysql_query("select details from scholarship where scholarship_id = 1") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                ?>
                
                <form method="post">
                <br>
                <br>
                <div style="padding-left: 5%;">
                <label>Description Details</label>
                <br>
                <br>
                    <div class="ui input">
                        <textarea placeholder="Description. . ." cols="80" rows="8" id="description"></textarea>
                    </div>
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="updateDescription()">
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
    function updateDescription(){
        var des = $('#description').val();
         $.ajax({
              type: "POST",
               url: "ajax/edit_description.php",
               data: {
                  description_name: des
               },
               
               success: function(data){
                   document.getElementById('description_input_name').innerHTML = data;
                   document.getElementById('details_details').innerHTML = data;
                } 
           });
        }
     
    
</script>
