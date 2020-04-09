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
<!DOCTYPE html>
<!-- code writer  O. Ikhbayar E.Gansonor O.Tushigjargal-->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-image: linear-gradient(to right, rgb(241, 146, 146), yellow);
            overflow: hidden;
        }
        
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        
        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 16px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        
        .sidebar a:hover {
            color: #f1f1f1;
        }
        
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        
        .dropdown {
            float: left;
            overflow: hidden;
        }
        
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        
        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgba(54, 53, 53, 0.561);
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
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
        
        #main {
            padding-left: 20px;
            align-items: center;
        }
        
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgba(241, 162, 162, 0.26);
            color: black;
            text-align: center;
        }
        
        .btn {
            background-color: rgb(0, 0, 0);
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        
        .btn a {
            text-decoration: none;
            color: white;
        }
        
        .btn:hover {
            background-color: rgb(47, 45, 45);
        }
    </style>
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

        <a href="/home/slide/slide-change.php">Slide Хуудас солих</a>
        <a href="/home/update-admin.php">Админ бүртгэл удирдах хэсэг</a>
        <a href="/home/zarlal/update-zarlal.php">Зарлал удирдах хэсэг</a>
        <a href="/home/zurgiin-tsomog/update-zurag.php">Зургийн цомог удирдах хэсэг</a>
        <a href="/home/tugsugchid/update-tugsugch.php">Төгсөгчид удирдах хэсэг</a>
        <a href="/home/teacher/update-teacher.php">Багш бүртгэл удирдах хэсэг</a>
        <a href="/home/mendchilgee/update-medee.php">Сургуулийн түүх удирдах хэсэг</a>

        <div class="dropdown">
            <button class="dropbtn">Мэдээ удирдах хэсэг 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/home/medee/update-medee.php">Мэдээ</a>
                <a href="/home/video/update-video.php">Видео мэдээ</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Мэндчилгээ удирдах хэсэг 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/home/mendchilgee/upload-mend.php?id=1">Захирлын мэндчилгээ</a>
                <a href="/home/mendchilgee/upload-mend.php?id=2">Үүсгэн байгуулагчийн мэндчилгээ</a>
                <a href="/home/mendchilgee/upload-mend.php?id=3">Сургуулийн танилцуулга</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Амжилт удирдах хэсэг
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/home/amjilt/update-bagsh.php">Багш</a>
                <a href="/home/amjilt/update-suragch.php">Сурагч</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Сургалт удирдах хэсэг 
                        <i class="fa fa-caret-down"></i>
                    </button>
            <div class="dropdown-content">
                <a href="/home/surgalt/update-undsen.php">Үндсэн сургалт</a>
                <a href="/home/surgalt/update-kurs.php">Курс Сургалт</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Дүрэм, журам удирдах хэсэг 
                    <i class="fa fa-caret-down"></i>
                </button>
            <div class="dropdown-content">
                <a href="/home/durem/update-durem.php?id=2">Дүрэм журмын хэсэг</a>
                <a href="/home/durem/update-huuli.php?id=1">Хууль тогтоомжийн хэсэг</a>
            </div>
        </div>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰ Хяналтын хэсэг</button>
        <button class="openbtn"><a href="http://nairamdal-school.com" >Вэб хуудас хэсэг рүү шилжих</a></button>
        <button class="openbtn"><a href="/home/logout.php" >Гарах</a></button>
        <h2 id="demo">Collapsed Sidebar</h2>
        <p id="ug">Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
        <img src="http://nairamdal-school.com/home/image/logo.png" alt="logo">
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <script>
        var greeting;
        var ishlel;
        var time = new Date().getHours();
        if (time < 3) {
            greeting = " Үдшийн мэнд";
        } else if (time < 10) {
            greeting = "Өглөөний мэнд хүргэе.";
        } else if (time < 17) {
            greeting = "Өдрийн мэнд. ";
        } else {
            greeting = "Оройн мэнд";
        }
        document.getElementById("demo").innerHTML = greeting;
        var uguulber = ["Наран ургахаас эхлээд зогсдоггүйн адил өөрийгөө бүтээ", "Чамайг амарч байхад чиний өрсөлдөгч бэлдэж суугаа", "Тэвч, итгэ, хүлээ тэгвэл чи ялагдах болно. Харин тэмц, хөдөлмөрлө тэгвэл чи амжилтад хүрэх болно", "Өнөөдөр чиний өдөр байх болно", "Ирээдүйгээ хүлээж биш бүтээж амьдар",
            "Хамгийн сайхан нь чи өөрөө", "Юм бүхэн төгсгөлтэй гэж боддог бол чиний бүтэлгүйтэл мөн адил төгсгөлтэй", "Хүлээлт гэдэг өөрөө аугаа шинжлэх ухаан"
        ];
        var y = Math.floor((Math.random() * 7));
        var x = uguulber[y];
        document.getElementById("ug").innerHTML = '" ' + x + '. "';
    </script>
    <footer>
        <p>Хөгжүүлсэн: Micheals team - MУИС</p>&copy;
        <2019 он>
    </footer>
</body>

</html>