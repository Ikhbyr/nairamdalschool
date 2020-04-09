<?php
   include('session.php');
?>
<?php
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from users where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$username = $row['username'];
		$password = $row['password'];
		$createDate = $row['createDate'];
		$email = $row['email'];
	}else{
		$username = "";
		$password = "";
		$createDate = "";
		$email = "";
	}
?>
<title>Найрамдал||Сургууль</title>
<meta charset="utf-8">
<script>
function aldaa() {
    var name = document.forms["RegForm"]["username"];
    var mail = document.forms["RegForm"]["email"];
    var passwrd = document.forms["RegForm"]["password"];
    var pwd1 = document.forms["RegForm"]["pwd"];
    if (name.value == "") {
        x = "Өөрийн нэрээ оруул.";
        document.getElementById("user").innerHTML = x;
        name.focus();
        return false;
    }
    if (name.value.length <= 5) {
        document.getElementById("user").innerHTML = "Өөрийн нэр 6-с дээш тэмдэгт мөр байх ёстой.";
        name.focus();
        return false;
    }
    if (mail.value == "") {
        document.getElementById("user").innerHTML = "";
        document.getElementById("user2").innerHTML = "Мэйл хаягаа оруулна уу.";
        mail.focus();
        return false;
    }

    if (mail.value.indexOf("@", 0) < 0) {
        document.getElementById("user2").innerHTML = "мэйл хаяганд (@) тэмдэгт байх ёстой.";
        mail.focus();
        return false;
    }

    if (mail.value.indexOf(".", 0) < 0) {
        document.getElementById("user2").innerHTML = "мэйл хаяганд (.) тэмдэгт байх ёстой.";
        mail.focus();
        return false;
    }

    if (passwrd.value == "") {
        document.getElementById("user2").innerHTML = "";
        document.getElementById("user4").innerHTML = "Нууц үгээ оруулна уу.";
        passwrd.focus();
        return false;
    }
    if (passwrd.value.length <= 7) {
        document.getElementById("user4").innerHTML = "Нууц үг 8с дээш тэмдэгт байх ёстой.";
        passwrd.focus();
        return false;
    }
    re1 = /[0-9]/;
    if (!re1.test(passwrd.value)) {
        document.getElementById("user4").innerHTML = "Нууц үгэнд тоо орсон байх ёстой!";
        passwrd.focus();
        return false;
    }
    re2 = /[a-z]/;
    if (!re2.test(passwrd.value)) {
        document.getElementById("user4").innerHTML = "a-z хүртэл үсэг оруул! ";
        passwrd.focus();
        return false;
    }
    re3 = /[A-Z]/;
    if (!re3.test(passwrd.value)) {
        document.getElementById("user4").innerHTML = "A-Z хүртэл үсэг оруул!";
        passwrd.focus();
        return false;
    }
    if (pwd1.value == "") {
        document.getElementById("user4").innerHTML = "";
        document.getElementById("user5").innerHTML = "Баталгаажуулах нууц үгээ оруулна уу.";
        return false;
    }
    if (passwrd.value != pwd1.value) {
        document.getElementById("user4").innerHTML = "";
        document.getElementById("user5").innerHTML = "Нууц үг таарахгүй байна";
        passwrd.focus();
        return false;
    }

    document.getElementById("usercorr").innerHTML = "Та амжилттай бүртгэгдлээ.";

    return true;
}</script>
<style>
 body {
            font-family: "Lato", sans-serif;
            background-image: linear-gradient(to right, rgb(241, 146, 146), yellow);
            overflow: hidden;
        }
        body {
    background-repeat: no-repeat;
    background-size: 100% 700px;
}

form {
    margin: 0 auto;
    width: 600px;
}

input {
    padding: 4px;
    border-radius: 5px;
    width: 250px;
    outline: 0px;
    font-size: 22px;
    border: 0px solid;
}

input[type=radio] {
    width: 20px;
    background-color: #4CAF50;
    color: white;
}

input[type=submit] {
    padding: 10px;
    border-radius: 20px;
    width: 250px;
    outline: 0px;
    background-color: rgb(10, 101, 220);
    border: 2px solid #01010c;
    color: aliceblue;
    font-size: 18px;
    font-family: sans-serif;
}

input[type=button] {
    padding: 10px;
    border-radius: 20px;
    width: 250px;
    outline: 0px;
    background-color: #DC0A2D;
    border: 2px solid #01010c;
    color: aliceblue;
    font-size: 18px;
    font-family: sans-serif;
}

input:hover {
    opacity: 1;
    background-color: #4CAF50;
}

#registration {
    width: 40%;
    background-color: #051019;
    opacity: 0.8;
    padding: 30px 20px;
    text-align: right;
    border-radius: 15px;
    margin-top: 10%;
}

.back {
    align-items: center;
}

label {
    color: rgb(255, 255, 255);
    font-size: 20px;
}

.user {
    color: red;
    font-size: 22px;
}

#usercorr {
    color: green;
    font-size: 30px;
}

@media(max-width:600px) {
    p {
        font-size: 17px;
    }
    .user {
        font-size: 15px;
    }
    #registration {
        width: 100%;
        background-color: #051019;
        opacity: 0.8;
        padding: 30px 0px;
        text-align: right;
        border-radius: 15px;
    }
}

@media(max-width:400px) {
    h1 {
        font-size: 20px;
    }
    input {
        width: 100%;
    }
    input[type=submit] {
        width: 100%;
    }
    input[type=button] {
        width: 100%;
    }
    label {
        font-size: 25px;
    }
    form {
        width: 100%;
    }
    
}
.openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
            text-decoration: none;
        }
        
        .openbtn a {
            text-decoration: none;
            color: white;
        }
         .openbtn:hover {
            background-color: #444;
        }
</style>
<body>
<h1>Админ бүртгэлийн хэсэг</h1>
<div style="height:2px;width:100%;background:black"></div>
<form name="RegForm" onsubmit="return aldaa()" action="process.php?action=useradd1" method="post"  enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<br>
	Хэрэглэгчийн нэр : <br><input type="text" name="username" value="<?php echo $username;?>">
    <div id="user" class="user"></div>
    Мэйл хаяг : <br><input type="text" name="email" value="<?php echo $email;?>">
    <div id="user2" class="user"></div>
    Нууц үг : <br><input type="text" name="password" value="<?php echo $password;?>">	
    <div id="user4" class="user"></div>
    <p>Нууц үгээ дахин хийнэ үү: <br><input type="password" name="pwd"></p>
    <div id="user5" class="user"></div>
	<button type="submit" class="openbtn">Хадгалах</button>
        <button class="openbtn"><a href="/home/welcome.php">Буцах</a></button>
</form>

</body>