<meta charset="utf-8">
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
}