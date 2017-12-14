<div class="ui medium modal" id="date_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Edit Date of Effectivity
                </div>
              </h2>
                <form method="post">
                <br>
                <br>
                <div style="padding-left: 5%;">
                <br>
<!--
                 <div class="ui input">
                                <input type='text' placeholder="Date Start" class='datepicker-here' data-language='en' data-position="right top"/>
                            </div>
                                    &nbsp;&nbsp;-&nbsp;&nbsp;
                            <div class="ui input">
                                <input type='text' placeholder="Date End" class='datepicker-here' data-language='en' data-position="right top" />
                            </div>
                </div>
-->
                    <br>
                    <br>
                    <div class="ui form">
                        <div class="fields">
                            <div class="eight wide field">
                                <label style="font-size: 16px;">Date of Effectivity</label>
                                <br>
                                    <select class="ui dropdown" id="date">
                                        <option value="">Choose. . .</option>
                                        <option value="10,000 - 20,000">Semestral</option>
                                        <option value="20,000 - 40,000">Yearly</option>
                                        <option value="40,000 - 60,000">Until Graduated</option>
                                    </select>
                            </div>
                        </div>
                    </div>
    
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="updateDate()">
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
    
    $('#date')
          .dropdown()
        ;
    
    function updateDate(){
        var dt = $('#date option:selected').text();
  
         $.ajax({
              type: "POST",
               url: "ajax/edit_date.php",
               data: {
                  date_name: dt
               },
               
               success: function(data){
                   $('#date_input_name').val(data);
                   document.getElementById('details_date').innerHTML = data;
                } 
           });
        }
</script>