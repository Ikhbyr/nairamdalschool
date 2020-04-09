<?php
ob_start();
session_start();
include('config.php');
?>
<?php
   
    $user_check = $_SESSION['login_user'];
    $sql = " SELECT username FROM users WHERE username = '$user_check' ";
    $user_id = "SELECT id From users where username = '$user_check'";
    $id_log = $conn->query($user_id);
    $login_id = mysqli_fetch_array($id_log);
    $ses_sql = $conn->query($sql);

    $row = mysqli_fetch_array($ses_sql);
    $login_session = $row['username'];
    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
    }
    
?>