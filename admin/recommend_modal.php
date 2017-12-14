            <div class="ui medium modal" id="recommend_modal">
              <h2 class="blue ui header">
                <i class="warning circle icon"></i>
                <div class="content">
                     Reminder! ! !
                </div>
              </h2>
                <br>
                <br>
                <br>
                <br>
                <div class="ui error message" style="font-size: 18px;">
                    <h4>This will generate recommended applicants which is chosen according to the scholarship basis you've input.</h4>
                </div>
                <br>
                <br>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="recommend()">
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
    function recommend(){
            $.ajax({
              type: "POST",
               url: "ajax/recommended.php",
               data: {
               },
               success: function(data){
                 window.location.reload();
                } 
           });
        }
</script>





