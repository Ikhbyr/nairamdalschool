<?php
   include('config.php');
?>
<?php
    session_start();
    $user_check = $_SESSION['login_user'];
    $sql = " SELECT username FROM users WHERE username = '$user_check' ";
    $user_id = "SELECT id From users where username = '$user_check'";
    $id_log = $conn->query($user_id);
    $login_id = mysqli_fetch_array($id_log);
    $ses_sql = $conn->query($sql);
    $row = mysqli_fetch_array($ses_sql);
    $login_session = $row['username'];
    $id_ok = $login_id['id'];
    if($id_ok == 1 || $id_ok == 39 ){
        $admin = "Админ ";
    }else{
        $admin = "Үйлчлүүлэгч ";
    }
    if(!isset($_SESSION['login_user'])){
        echo "<script type='text/javascript'>window.top.location='/home/login.php';</script>"; exit;
        die();
    }

?>