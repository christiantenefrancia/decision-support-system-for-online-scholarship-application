
<div class="ui small modal" id="slot_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Edit Slots
                </div>
              </h2>
                <?php
                    $query = mysql_query("select slots from scholarship where scholarship_id = $id") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                ?>
                
                <form method="post">
                <br>
                <br>
                <div style="padding-left: 5%;">
                <label>Edit Slots</label>
                <br>
                <br>
                    <div style="padding-left: 17%;">
                        <div class="wan-spinner wan-spinner-3">
                                <a href="javascript:void(0)" class="minus">
                                    <label style="font-size: 45px;"><strong>-</strong></label>
                                </a>
                            <input type="text" value="<?php echo $row['slots']; ?>" style="font-size: 18px;" id="slot">
                                <a href="javascript:void(0)" class="plus">
                                    <label style="font-size: 30px;"><strong>+</strong></label>
                                </a>
                          </div> 
                        </div>
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="updateSlot()">
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
    function updateSlot(){
        var slot = $('#slot').val();
         $.ajax({
              type: "POST",
               url: "ajax/edit_slot.php",
               data: {
                  slot_name: slot
               },
               
               success: function(data){
                   document.getElementById('slot_input_name').innerHTML = data;
                   document.getElementById('details_slots').innerHTML = data;
                } 
           });
        }
     
    
</script>
