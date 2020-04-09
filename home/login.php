<?php
ob_start();
    session_start();
    ?>
<meta charset="utf-8">
<?php
include('config.php');
?>
<?php

    $errors="Таньд энэ өдрийн мэнд хүргье.";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
            
        if($count == 1) {

            $_SESSION['login_user'] = $username;
            echo "<script type='text/javascript'>window.top.location='/home/welcome.php';</script>"; exit;
        }else {
            $errors = "Нэр эсвэл нууц үг тань таарахгүй байна";
        }
        
    }
    
    ?>

    <!-- code writer  O. Ikhbayar -->
    <head>
        <title>Нэвтрэх хэсэг</title>
        <link rel="stylesheet" href="css/login.css">
        <script src="js/login.js"></script>
    </head>
    
    <body bgcolor = "#FFFFFF">
        <div class="background"></div>
        <div class="back">
            <form name="RegForm" onsubmit="return aldaa()" method = "post" id="registration">
                <h1 style="color:aliceblue;text-align: center;"> Нэвтрэх </h1>
                <label>Хэрэглэгчийн нэр  :</label><input type = "text" name = "username"/><br><br>
                <label>Нууц үг  :</label><input type = "password" name = "password" class = "box" /><br><br>
                <input type = "submit" value = " Нэвтрэх "/>
                <a href="burtgel.php"><input type="button" value="Бүртгүүлэх"></a><br>
                <div style = "font-size:18px; color:#cc0000; margin-top:10px;">
                <b>  
                <?php 
                echo $errors;
                ?>
                </b>
            </div>
            </form>
        </div>
    </body>
