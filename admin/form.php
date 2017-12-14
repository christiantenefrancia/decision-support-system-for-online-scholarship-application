
<div class="ui grid" id="form" style="display: none;">
        <div class="three wide column"></div>
        <div class="twelve wide column">
            <h3 class="blue ui top attached header">
              Scholarship
            </h3>
             <div class="ui bottom attached segment" id="descriptionDiv" style="display: block;">
<!--
                <a><button class="large ui circular facebook right floated icon button" id="modal">
                        <i class="large write icon"></i>
			             </button>
                    </a>
-->
                <div style="padding-top: 4px;">
                <hr>
                </div>
                 <br>
                 
                 <div class="ui top attached tabular menu">
                  <a class="active item" onclick="changeForm('view')">
                    View Form
                  </a>
                  <a class="item" onclick="changeForm('download')">
                    Download Form
                  </a>
                  <a class="item" onclick="changeForm('upload')">
                    Upload File
                  </a>
<!--
                  <div class="right menu">
                    <div class="item">
                      <div class="ui transparent icon input">
                        <input type="text" placeholder="Search users...">
                        <i class="search link icon"></i>
                      </div>
                    </div>
                  </div>
-->
                </div>
                <div class="ui bottom attached segment" id="view" style="display: block;">
                    <div style="padding-top: 4px;">
                        <hr>
                    </div>
                 <br>
                    <p>
                         <a href="readPDF.php">
                             <button class="blue ui labeled icon button">
                                <i class="File icon"></i>
                                View Form
                             </button>
                        </a>
                    </p>
                </div>
                 
                 <div class="ui bottom attached segment" id="download" style="display: none;">
                      <div style="padding-top: 4px;">
                        <hr>
                    </div>
                <br>
                    <p>
                        <a href="download.php?download_file=form1stufaps2014.pdf">
                            <button class="blue ui labeled icon button">
                            <i class="download icon"></i>
                            Download Form
                            </button>
                        </a>
                    </p>
                </div>
                 
                <div class="ui bottom attached segment" id="upload" style="display: none;">
                     <div style="padding-top: 4px;">
                        <hr>
                    </div>
                <br>
                    <p>
                        <form action="upload.php" method="post" enctype="multipart/form-data"> 
                             <input type="file" name="myFile" class="ui blue button">
                             <br>
                             <br>
                             <button class="blue ui labeled icon button" type="submit">
                                <i class="upload icon"></i>
                                    Upload File
                              </button>
                        </form>
                    </p>
                </div>
            
                     
<!--
                <p>
                   <a href="readPDF.php">View Form</a>
                    <br>
                    <a href="download.php?download_file=form1stufaps2014.pdf">Download file</a>
                </p>
                 
                 <form action="upload.php" method="post" enctype="multipart/form-data"> 
                 <input type="file" name="myFile">
                 <br>
                 <input type="submit" value="Upload">
                </form>
-->
            </div>
        </div>
    </div>

<script type="text/javascript">
    $('.ui.accordion')
  .accordion()
;
    
    function changeForm(id){
        document.getElementById("view").style.display = "none";
        document.getElementById("download").style.display = "none";
        document.getElementById("upload").style.display = "none";
        
        document.getElementById(id).style.display = "block";
    }
    
</script>