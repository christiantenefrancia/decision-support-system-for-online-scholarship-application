<div class="ui small modal" id="details_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Change Account
                </div>
              </h2>
                <?php
                     include('connect.php'); 
                    $query = mysql_query("select name from scholarship where scholarship_id = 1") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                ?>
                
                <form method="post">
                <br>
                <br>
                <div style="padding-left: 5%;">
                <p>Username</p>
                <div class="ui input" style="width: 60%;">
                     <input type="text" name="nameInput" placeholder="Username. . .">
                </div>
                <br>
                <br>
                <br>
                <p>Password</p>
                <div class="ui input" style="width: 60%;">
                     <input type="text" name="nameInput" placeholder="Password. . .">
                </div>
                <br>
                <br>
                <br>
                <p>Confirm Password</p>
                <div class="ui input" style="width: 60%;">
                     <input type="text" name="nameInput" placeholder="Confirm Password. . .">
                </div>
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit">
                            <i class="checkmark icon"></i>
                                Save
                        </button>
                        <button class="ui red labeled icon deny button" name="close">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
            </div>