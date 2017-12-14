
             <div class="ui large modal" id="privilege_modal">
              <h2 class="blue ui header">
                <i class="plus icon"></i>
                <div class="content">
                     Add/Remove Privilege
                </div>
              </h2>
                 <br>
            <div class="ui input" style="padding-left: 3%;">
                <textarea placeholder="Additional Privilege" cols="80" rows="3" id="pText"></textarea>
            </div>
            <button class="blue ui labeled icon button" onclick="privilegeRow()">
              <i class="plus icon"></i>
              Add
            </button>
            <div class="ui segment">
               <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="pTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Privileges</th>
                            <th style="padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysql_query("select privileges from privilege where scholarship_id = $id") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                            ?> <tr><td style="padding-left: 3%;"><?php echo $row['privileges']; ?></td> 
                            <td style="padding-left: 3%;"> <button class="ui tiny negative labeled icon button" onclick="deletePrivilegeRow(this)">
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
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="savePrivilege()">
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
    function privilegeRow()
    {
        var privilegeText = $('#pText').val();
        $('#pTable').append('<tr><td style="padding-left: 3%;">'+privilegeText+'</td><td style="padding-left: 3%"><button class="ui tiny negative labeled icon button" onclick="deletePrivilegeRow(this)"><i class="remove icon"></i>Remove</button></td></tr>');
        
        $('#pText').val('');
    }
    
    function deletePrivilegeRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("pTable").deleteRow(i);
    }
    
    function savePrivilege() 
    {
        var array = [];
        var index = 0;
        
        var table = document.getElementById('pTable');
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
        url: "ajax/add_delete_privilege.php",
        data:{ 
            array:JSON.stringify(array),
            size: index
        }, 
         success: function(data){
            //window.location.reload(); 
            //alert(data);
            $("#priv_table").empty();
            $("#pList").empty();
            var letters = "";
            for($i = 0; $i < index; $i++){
                $('#priv_table').append('<ul><tr><td><li>'+array[$i]+'</li></td></tr></ul><hr>');
                letters += "<li style='padding-left: 3%; font-size: 16px;'>"  + array[$i] + "</li>";
            }
            document.getElementById("pList").innerHTML = letters;
        }
    });
        
    }
    
</script>