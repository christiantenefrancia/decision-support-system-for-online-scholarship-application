
             <div class="ui large modal" id="requirement_modal">
              <h2 class="blue ui header">
                <i class="plus icon"></i>
                <div class="content">
                     Add/Remove Requirements
                </div>
              </h2>
                 <br>
            <div class="ui input" style="padding-left: 3%;">
                <textarea placeholder="Additional Requirement" cols="80" rows="3" id="rText"></textarea>
            </div>
            <button class="blue ui labeled icon button" onclick="requirementRow()">
              <i class="plus icon"></i>
              Add
            </button>
            <div class="ui segment">
               <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="rTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Requirements</th>
                            <th style="padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysql_query("select requirements from requirement where scholarship_id = $id") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                            ?> <tr><td style="padding-left: 3%;"><?php echo $row['requirements']; ?></td> 
                            <td style="padding-left: 3%;"> <button class="ui tiny negative labeled icon button" onclick="deleteRequirementRow(this)">
                                  <i class="remove icon"></i>
                                  Remove
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="saveRequirement()">
                            <i class="checkmark icon"></i>
                                Save
                        </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>
<script>
    function requirementRow()
    {
        var requirementText = $('#rText').val();
        $('#rTable').append('<tr><td style="padding-left: 3%;">'+requirementText+'</td><td style="padding-left: 3%"><button class="ui tiny negative labeled icon button" onclick="deleteRequirementRow(this)"><i class="remove icon"></i>Remove</button></td></tr>');
        
        $('#rText').val('');
    }
    
//    function GetCellValues() {
//        var table = document.getElementById('rTable');
//        for (var r = 1, n = table.rows.length; r < n; r++) {
//            for (var c = 0, m = table.rows[r].cells.length; c < m; c=c+2) {
//                alert(table.rows[r].cells[c].innerHTML);
//            }
//        }
//    }
    
    
    function deleteRequirementRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("rTable").deleteRow(i);
    }
    
    function saveRequirement() 
    {
        var array = [];
        var index = 0;
        
        var table = document.getElementById('rTable');
        for (var r = 1, n = table.rows.length; r < n; r++) {
            for (var c = 0, m = table.rows[r].cells.length; c < m; c=c+2) {
                array[index] = table.rows[r].cells[c].innerHTML;
                index++;
            }
        }
        
//        var mytbl = document.getElementById("priv_table");
//            mytbl.getElementsByTagName("tbody")[0].innerHTML = mytbl.rows[0].innerHTML;
        
        $.ajax({
        type: "POST",
        url: "ajax/add_delete_requirement.php",
        data:{ 
            array:JSON.stringify(array),
            size: index
        }, 
         success: function(data){
            //window.location.reload(); 
            //alert(data);
            $("#req_table").empty();
            $("#rList").empty();
            var letters = "";
            for($i = 0; $i < index; $i++){
                $('#req_table').append('<ul><tr><td><li>'+array[$i]+'</li></td></tr></ul><hr>');
                letters += "<li style='padding-left: 3%; font-size: 16px;'>"  + array[$i] + "</li>";
            }
            document.getElementById("rList").innerHTML = letters;
        }
    });
        
    }
    
    
</script>