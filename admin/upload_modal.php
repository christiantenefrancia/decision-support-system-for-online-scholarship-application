<div class="ui small modal" id="upload_modal">
              <h2 class="blue ui header">
                <i class="upload icon"></i>
                <div class="content">
                     Upload Student Data
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
<!--                    <div class="ui form">-->
                        <div class="fields">
                            <div class="eight wide field">
                                    <p>Choose File</p>
                                     <input type="file" id="myFile" class="ui blue button">
                                     <br>
                                     <br>
                                     <br>
                                     
                            </div>
                        </div>
<!--                    </div>-->
    
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
<!--
                        <button class="ui blue labeled icon button" type="submit" >
                            <i class="checkmark icon"></i>
                                Save
                        </button>
-->
                        <button class="blue ui labeled icon button" type="button" onclick="updateData()">
                                        <i class="upload icon"></i>
                                            Upload Data
                                      </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>
    
<script type="text/javascript">
    function updateData(){
        var file = $('#myFile').val();
  
         $.ajax({
              type: "POST",
               url: "ajax/upload_data.php",
               data: {
                  file_name: file
               },
               
               success: function(data){
                  //window.location.reload();
                   alert('Data has been successfully uploaded.');
                } 
           });
        }
</script>