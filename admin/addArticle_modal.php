<div class="ui medium modal" id="addArticle_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Add Article
                </div>
              </h2>
                
                <form method="post">
                <br>
                <br>
                <div style="padding-left: 5%;">
                    <div class="ui input" style="width: 70%;">
                        <label>Title</label>
                         <input type="text" placeholder="Title. . ." id="title">
                    </div>
                    <br>
                    <br>
                    <div class="ui input" style="width: 70%;">
                        <label>Sub-title</label>
                         <input type="text" placeholder="Sub-title. . ." id="sub-title">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label>Message</label>
                    <div class="field">
                        <textarea id="message" name="message" placeholder="Message. . ." rows="10" cols="73" id="message"></textarea>
                    </div>
                    <br>
                    <br>
                    <div class="ui input" style="width: 70%;">
                        <label>Image</label>
                         <input type="file" id="image">
                    </div>
                </div>
                <br>
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" type="submit" onclick="insertArticle()">
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
    function insertArticle(){
        $title = $('#title').val();
        $sub_title = $('#sub-title').val();
        $message = $('#message').val();
        $image = $('#image').val();
        $.ajax({
              type: "POST",
               url: "ajax/insert_article.php",
               data: {
                  title: $title,
                  sub_title: $sub_title,
                  message: $message,
                  image: $image
               },
               
               success: function(data){
//                   window.location = "ajax/get_article.php";
                   window.location.reload();
                } 
           });
    }
</script>