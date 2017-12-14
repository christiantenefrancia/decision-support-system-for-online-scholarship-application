<div class="ui medium modal" id="cut_off_score_modal">
              <h2 class="blue ui header">
                <i class="edit icon"></i>
                <div class="content">
                     Edit Cut Off Score
                </div>
              </h2>
                <?php
                     include('connect.php'); 
                    $query = mysql_query("select name from scholarship where scholarship_id = $id") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                ?>
                
                <form method="post">
                <br>
                <div class="ui form">
                    <p style="padding-left: 5%; font-size: 15px"><strong>Science Scholarship</strong></p>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="seven wide field">
                            <label>From</label>
                                <div class="ui input">
                                     <input type="text" placeholder="From. . ." id="Sstart">
                                </div>
                        </div>
                        <div class="one wide field">
                        </div>
                        <div class="seven wide field">
                            <label>To</label>
                                <div class="ui input">
                                    <input type="text" placeholder="To. . ." id="Send">
                                </div>
                        </div>
                        
                    </div>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="fifteen wide field">
                            <hr>
                        </div>
                    </div>
                </div>
                <br>
                <div class="ui form">
                    <p style="padding-left: 5%; font-size: 15px"><strong>Academic Scholarship</strong></p>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="seven wide field">
                            <label>From</label>
                                <div class="ui input">
                                     <input type="text" placeholder="From. . ." id="Astart">
                                </div>
                        </div>
                        <div class="one wide field">
                        </div>
                        <div class="seven wide field">
                            <label>To</label>
                                <div class="ui input">
                                    <input type="text" placeholder="To. . ." id="Aend">
                                </div>
                        </div>
                    </div>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="fifteen wide field">
                            <hr>
                        </div>
                    </div>
                </div>
                    
                <br>
                <div class="ui form">
                    <p style="padding-left: 5%; font-size: 15px"><strong>Cultural Community Grant (CCG)</strong></p>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="seven wide field">
                            <label>From</label>
                                <div class="ui input">
                                     <input type="text" placeholder="From. . ." id="Cstart">
                                </div>
                        </div>
                        <div class="one wide field">
                        </div>
                        <div class="seven wide field">
                            <label>To</label>
                                <div class="ui input">
                                    <input type="text" placeholder="To. . ." id="Cend">
                                </div>
                        </div>
                    </div>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="fifteen wide field">
                            <hr>
                        </div>
                    </div>
                </div>
                    
                <br>
                <div class="ui form">
                    <p style="padding-left: 5%; font-size: 15px"><strong>Special Muslim Grant</strong></p>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="seven wide field">
                            <label>From</label>
                                <div class="ui input">
                                     <input type="text" placeholder="From. . ." id="Mstart">
                                </div>
                        </div>
                        <div class="one wide field">
                        </div>
                        <div class="seven wide field">
                            <label>To</label>
                                <div class="ui input">
                                    <input type="text" placeholder="To. . ." id="Mend">
                                </div>
                        </div>
                    </div>
                    <div class="fields" style="padding-left: 5%;">
                        <div class="fifteen wide field">
                            <hr>
                        </div>
                    </div>
                </div>
                    
                <div class="ui form">
                    <div class="fields" style="padding-left: 30%;">
                        <div class="eight wide field">
                            <label>Year</label>
                                <div class="ui input">
                                     <input type="text" placeholder="Year. . ." id="year">
                                </div>
                        </div>
                    </div>
                </div>

                    
                <br>
                </form>
                    <div class="actions">
                        <button class="ui blue labeled icon button" name="updateName" type="submit" onclick="updateScore()">
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
    function updateScore(){
        var Sstart = $('#Sstart').val();
        var Send = $('#Send').val();
        var Astart = $('#Astart').val();
        var Aend = $('#Aend').val();
        var Cstart = $('#Cstart').val();
        var Cend = $('#Cend').val();
        var Mstart = $('#Mstart').val();
        var Mend = $('#Mend').val();
        var year = $('#year').val();
        
         $.ajax({
              type: "POST",
               url: "ajax/edit_cut_off_score.php",
               data: {
                  Sfrom: Sstart,
                  Sto: Send,
                  Afrom: Astart,
                  Ato: Aend,
                  Cfrom: Cstart,
                  Cto: Cend,
                  Mfrom: Mstart,
                  Mto: Mend,
                  year: year
                    
               },
               
               success: function(data){
                   window.location.reload();
                } 
           });
        }
     
    
</script>
