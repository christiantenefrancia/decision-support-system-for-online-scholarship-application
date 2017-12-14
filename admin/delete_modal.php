
           <div class="ui small modal" id="delete_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Delete Scholarship
                </div>
              </h2>
                <?php
                     include('connect.php'); 
                    $query = mysql_query("select name from scholarship where scholarship_id = $id") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                ?>
                <br>
                <br>
                <h4 style="padding-left: 5%;">Are you sure you want to delete <?php echo $row['name']; ?>?</h4>
                <br>
                <br>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="deleteScholarship()">
                            <i class="checkmark icon"></i>
                                Yes
                        </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>

<script type="text/javascript">
    
    function deleteScholarship(){   
         $.ajax({
              type: "POST",
               url: "ajax/delete_scholarship.php",
               data: {
                 
               },
               
               success: function(data){
                   window.location.reload();
                } 
           });
        }
     
    
</script>





