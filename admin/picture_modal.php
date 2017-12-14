<div class="ui small modal" id="picture_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Change Account Picture
                </div>
              </h2>
                
                <form method="post">
                <br>
                <br>
                <div style="padding-left: 5%;">
                <label>Scholarship Name</label>
                <br>
                <br>
                    <form action="upload.php" method="post" enctype="multipart/form-data"> 
                         <input type="file" name="myFile" class="ui blue button">
                         <br>
                         <br>
                    </form>
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