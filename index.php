<?php
	$servername = "pdb35.awardspace.net"; // сервер комьютерийн хаяг буюу нэр
	$username = "3001877_nairamdal";     // MySQL-ийн бааз руу хандах хэрэглэгчийн нэр
	$password = "nairamdal123"; // MySQL-ийн бааз руу хандах нууц үг
	$database = "3001877_nairamdal"; // Баазын нэр
	$conn = new mysqli($servername, $username, $password, $database);
        
        $qry="update view set count=count+1";
            $conn->query($qry);
        
?>
<script src="main.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="main.css">
<meta charset="utf-8">
<meta name="google-site-verification" content="g6Q0BEZkbQ2efTArIuSJY-DBEgXpwGXLrLS8zkO2fB0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/home/image/nairamdal.jpg" sizes="32x32" />
    <link rel="icon" href="/home/image/nairamdal.jpg" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="/home/image/nairamdal.jpg" size="180x180" />
    <meta name="msapplication-TileImage" content="/home/image/nairamdal.jpg" size="270x270" />
    <title>Найрамдал сургууль</title>
<body>

    <div class = "preload" id = "preload">
    
     <div class ="logo" style="width:100%">
     <img src="/home/image/nairamdal.png" alt="surguuli"><br>
      Монгол Хятадын Найрамдал <br> <span style = "color: darkturquoise;">Сургууль</span>
     </div>
      <div class = "loader-frame">
       <div class = "loader1" id = "loader1"></div>
       <div class = "loader2" id = "loader2"></div>
      </div>
    </div>
</body>
