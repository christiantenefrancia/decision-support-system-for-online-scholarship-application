<div class="ui small modal" id="akan_modal">
              <h2 class="blue ui header">
                <i class="user icon"></i>
                <div class="content">
                     Akan Account
                </div>
              </h2>
            
                <br>
                <br>
                <form method="post">
                <div style="padding-left: 10%;">
                    <div class="ui form">
                        <div class="fields">
                            <div class="ten wide field">
                                 <label>Username</label>
                                 <div class="ui input">
                                   <input type="text" placeholder="Username. . ." name="username">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="fields">
                            <div class="ten wide field">
                                <label>Password</label> 
                                <div class="ui input">
                                    <input type="password" placeholder="Password. . ." name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="search" type="submit">
                            <i class="sign in icon"></i>
                                Log in
                        </button>
                </form>
                        <button class="ui red labeled icon deny button" type="button" onclick="redirect()">
                            <i class="remove icon"></i>
                                Cancel
                        </button>
                    </div>
</div>

<script type="text/javascript">
    function redirect(){
        window.location = "view_scholarship.php";
    }
</script>
