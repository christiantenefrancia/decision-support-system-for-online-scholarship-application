<?php 

    if(isset($_POST['scho_id']))
        $schoid = $_POST['scho_id'];
    else
        $schoid = 2;

   // echo $schoid;
    session_start();
    $_SESSION['id'] = $schoid;


?>