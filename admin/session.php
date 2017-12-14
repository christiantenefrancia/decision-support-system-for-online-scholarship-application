<?php include ('connect.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "login.php";
</script>
<?php 
}
$id = $_SESSION['id'];
$status = $_SESSION['status'];

?>