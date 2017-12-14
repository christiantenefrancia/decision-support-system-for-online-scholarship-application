<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$app_id = $_SESSION['appID'];

?>