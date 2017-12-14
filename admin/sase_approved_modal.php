
             <div class="ui small modal" id="sase_approved_modal">
              <h2 class="blue ui header">
                <i class="check icon"></i>
                <div class="content">
                    Confirm
                </div>
              </h2>
                 <h3><center>Are you sure you want to approved the passers?</center></h3>
                 <br>
<!--
            <div class="ui segment">
               <table class="ui very basic collapsing celled table" style="min-width: 70%;" id="pTable">
                    <thead>
                        <tr><th style="padding-left: 2%;">Privileges</th>
                            <th style="padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//                            $query = mysql_query("select privileges from privilege where scholarship_id = $id") or die(mysql_error());
//                            while ($row = mysql_fetch_array($query)) {
                            ?> <tr><td style="padding-left: 3%;"><?php //echo $row['privileges']; ?></td> 
                            <td style="padding-left: 3%;"> <button class="ui tiny negative labeled icon button" onclick="deletePrivilegeRow(this)">
                                  <i class="remove icon"></i>
                                  Remove
                                </button>
                            </td>
                        </tr>
                        <?php //} ?>
                    </tbody>
                </table>
            </div>
-->
                    <div class="actions">
                        <button class="ui blue labeled icon button" onclick="approve()">
                            <i class="checkmark icon"></i>
                                Approve
                        </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>
