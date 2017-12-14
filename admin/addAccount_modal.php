<div class="ui large modal" id="addAccount_modal">
    <h2 class="blue ui header">
    <i class="edit icon"></i>
    <div class="content">
        Add Account
    </div>
    </h2>
     <div class="ui segment" style="display: block;">
        <p>
        <hr>
        <div class="ui form">
        <div class="three fields">
            <div class="field">
                <div class="ui input">
                    <label>First Name</label>
                    <input type="text" placeholder="First Name. . ." id="firstname">
                </div>
            </div>
            <div class="field">
                <div class="ui input">
                    <label>Middle Name</label>
                    <input type="text" placeholder="Middle Name. . ." id="middlename">
                </div>
            </div>
            <div class="field">
                <div class="ui input">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last Name. . ." id="lastname">
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Address</label>
                    <input type="text" placeholder="Address. . ." id="address">
                </div>
            </div>
            <div class="four wide field">
                <div class="ui input">
                    <label>Contact Number</label>
                    <input type="text" placeholder="Contact #. . ." id="contact">
                </div>
            </div>
            <div class="four wide field">
                <div class="ui input">
                    <label>Email</label>
                    <input type="text" placeholder="Email. . ." id="email">
                </div>
            </div>
        </div>
        <div class="ui dividing header"></div>
        <hr>
        <div class="fields">
                <div class="fourteen wide field">                      
                             <label>Assign Account to</label>
                    <select class="ui labeled icon dropdown" id="scholarship">
                        <option value="">Scholarship</option>
                        <?php 
                                include('connect.php');
                                $query = mysql_query("select name from scholarship") or die(mysql_error());
                                while($row = mysql_fetch_array($query)){
                            ?>        
                                <option value=<?php echo $row['name']; ?>><?php echo $row['name']; ?></option> 
                              <?php  
                                }
                            ?>
                    </select>
                </div>
            </div>
        <div class="fields">
            <div class="eight wide field">
                <div class="ui input">
                    <label>Username</label>
                    <input type="text" placeholder="Username. . ." id="username">
                </div>
            </div>
            <div class="eight wide field">
                <div class="ui input">
                    <label>Password</label>
                    <input type="text" placeholder="Password. . ." id="password">
                </div>
            </div>
        </div>
        <div class="fields">
             <div class="eight wide field">
                <div class="ui input">
                    <label>Confirm Password</label>
                    <input type="text" placeholder="Confirm Password. . ." id="confirm_password">
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="actions">
        <button class="blue ui labeled icon button" type="submit" id="add">
            <i class="plus icon"></i>
                Add
        </button>
        <button class="ui red labeled icon deny button" name="close">
            <i class="remove icon"></i>
                Cancel
        </button>
    </div>
    
    <script type="text/javascript">
        $('select.dropdown')
          .dropdown()
        ;
        
//        $('#sportsDropdown')
//          .dropdown({
//            allowAdditions: true
//          })
//        ;
        
        $('#add').click(function(){
            var fn = $('#firstname').val();
            var mn = $('#middlename').val();    
            var ln = $('#lastname').val();
            var address = $('#firstname').val();
            var contact = $('#firstname').val();
            var email = $('#firstname').val();
            var scholarship = $('#scholarship option:selected').text();
            var un = $('#username').val();
            var pw = $('#password').val();
            var cpw = $('#confirm_password').val();
            
            $.ajax({
                    type: "POST",
                    url: "ajax/insert_account.php",
                    data:{ 
                        firstname: fn,
                        middlename: mn,
                        lastname: ln,
                        address: address,
                        contact: contact,
                        email: email,
                        scholarship: scholarship,
                        username: un,
                        password: pw,
                        confirm_password: cpw
                    }, 
                    success: function(data){
                        window.location.reload(); 
                        //alert(data);
                    }
                });
            
        });
        
    </script>
</div>