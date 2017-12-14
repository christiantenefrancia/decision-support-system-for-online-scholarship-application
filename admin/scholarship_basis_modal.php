
             <div class="ui large modal" id="basis_modal">
              <h2 class="blue ui header">
                <i class="plus icon"></i>
                <div class="content">
                     Add/Remove Basis
                </div>
              </h2>
                 <br>
         <div class="ui form" style="padding-left: 5%;">
            <div class="fields">
                <div class="ten wide field">
                     <select class="ui labeled icon dropdown" id="scho_dropdown">
                        <option value="">Choose Basis. . .</option>
                        <?php                          
                            $sql = "SHOW COLUMNS FROM applicant";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_array($result)){
                        ?>
                                        <option value=<?php echo $row['Field']; ?>><?php echo $row['Field']; ?></option> ;
                         
                            <?php   }
                            ?>
                    </select>
                </div>
            </div>
            <div class="fields">
                <div class="six wide field">
                    <label>Value</label>
                    <div class="ui input">
                        <input type="text" placeholder="Value" id="value">
                    </div>
                </div> 
                <div class="four wide field">
                    <label>Percentage</label>
                    <div class="ui input">
                        <input type="text" placeholder="Value" id="percentage">
                    </div>
                </div> 
            </div>
            <div class="fields" style="padding-left: 45%;">
                <div class="five wide field">
                    <button class="blue ui labeled icon button" onclick="basisRow()" style="width: 100%;">
                      <i class="plus icon"></i>
                      Add
                    </button>
                </div> 
            </div>
        </div>    
            
            <div class="ui segment">
               <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="bTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Basis</th>
                            <th style="padding-left: 2%;">Value</th>
                            <th style="padding-left: 2%;">Percentage</th>
                            <th style="padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysql_query("select tag_column, tag_value, percentage from scholarship_tags where scholarship_id = $id") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                            ?> <tr><td style="padding-left: 3%;"><?php echo $row['tag_column']; ?></td> 
                                    <td style="padding-left: 3%;"><?php echo $row['tag_value']; ?></td> 
                                    <td style="padding-left: 3%;"><?php echo $row['percentage']; ?></td> 
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
    
     $('#scho_dropdown')
          .dropdown()
        ;
    
    var total = 0;
    
    function basisRow()
    {
        var value = $('#value').val();
        var basis = $('#scho_dropdown').val();
        var percentage = $('#percentage').val();
        
        $('#bTable').append('<tr><td style="padding-left: 3%;">'+basis+'</td><td style="padding-left: 3%;">'+value+'</td><td style="padding-left: 3%;">'+percentage+'</td><td style="padding-left: 3%"><button class="ui tiny negative labeled icon button" onclick="deleteRequirementRow(this)"><i class="remove icon"></i>Remove</button></td></tr>');
        
        $('#value').val('');
        $('#scho_dropdown').val('');
        $('#percentage').val('');
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
        document.getElementById("bTable").deleteRow(i);
    }
    
    function saveRequirement() 
    {
        var array = [];
        var array1 = [];
        var array2 = [];
        var index = 0;
        
        var table = document.getElementById('bTable');
        for (var r = 1, n = table.rows.length; r < n; r++) {
            for (var c = 0, m = table.rows[r].cells.length; c < m; c=c+4) {
//                if(counter == 2){
//                    c++;
//                    counter = 0;
//                }
                array[index] = table.rows[r].cells[c].innerHTML;
                array1[index] = table.rows[r].cells[c+1].innerHTML;
                array2[index] = table.rows[r].cells[c+2].innerHTML;
//                alert(array[index]);
//                alert(array1[index]);
//                alert(array2[index]);
                index++;
            }
        }
        
        var mytbl = document.getElementById("basis_table");
            mytbl.getElementsByTagName("tbody")[0].innerHTML = mytbl.rows[0].innerHTML;
        
        $.ajax({
        type: "POST",
        url: "ajax/scholarship_basis.php",
        data:{ 
            array:JSON.stringify(array),
            array1:JSON.stringify(array1),
            array2:JSON.stringify(array2),
            size: index
        }, 
         success: function(data){
            window.location.reload(); 
        }
    });
        
    }
    
    
</script>