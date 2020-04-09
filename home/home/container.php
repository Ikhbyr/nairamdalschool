<?php
	include('config.php');

	$qry = "select * from medee order by date_day desc limit 8";
	$result = $conn->query($qry);
?>
<!DOCTYPE html>
<!-- code writer  O. Ikhbayar E.Gansonor O.Tushig-->
<html>

<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="g6Q0BEZkbQ2efTArIuSJY-DBEgXpwGXLrLS8zkO2fB0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Найрамдал сургууль</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<style>
    .tolgoi .item1 {
        position: relative;
        background-color: #1b4588;
        float: left;
        margin: 15px;
        box-sizing: border-box;
        overflow: hidden;
        border-radius: 10px;
    }
    
    .tolgoi .item1 .ocon {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgb(39, 46, 112), rgb(91, 16, 68));
        ;
        transition: 0.5s;
        z-index: 1;
    }
    
    .tolgoi .item1:hover .ocon {
        top: 20px;
        right: calc( 50% - 40px);
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
    
    .tolgoi .item1 .ocon .fa {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 80px;
        transition: 0.5s;
        color: #fff;
    }
    
    .tolgoi .item1:hover .ocon .fa {
        font-size: 40px;
    }
    
    .tolgoi .item1 .content {
        position: absolute;
        top: 100%;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
        transition: 0.5s;
        opacity: 0;
        font-size: 14px;
    }
    
    .tolgoi .item1:hover .content {
        top: 40px;
        opacity: 1;
    }
    
    .tolgoi .item1 .content h3 {
        margin: 0 0 10px;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }
    
    .tolgoi .item1 .content p {
        margin: 0;
        padding: 0;
        color: #fff;
    }
    
    .tolgoi>div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        padding: 20px 0;
        font-size: 20px;
    }
    
    .medee>div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        padding: 20px 0;
        font-size: 15px;
    }
    
    .medee .item1 {
        position: relative;
        float: left;
        margin: 30px;
        box-sizing: border-box;
        overflow: hidden;
        border-radius: 10px;
    }
    
    .iluuih {
        width: 120px;
        font-size: 16px;
        background: linear-gradient(to right, rgb(39, 46, 112), rgb(91, 16, 68));
        margin: 50px auto;
        text-align: center;
        line-height: 15px;
        border-radius: 40px;
        height: 40px;
        padding: auto;
    }
    .iluuih p {
    color: white;}
    .iluuih:hover {
        opacity: 0.7;
    }
    
    @media only screen and (min-width: 601px) {
        .tolgoi {
            display: grid;
            grid-template-columns: auto auto auto;
            grid-template-rows: 250px;
            padding: 10px;
            grid-gap: 10px;
        }
        .medee .item1 img {
            width: 80%;
        }
        .medee {
            display: grid;
            grid-template-columns: auto auto auto auto;
            grid-template-rows: 300px 300px;
            grid-gap: 10px;
        }
    }
    
    @media only screen and (max-width: 600px) {
        .tolgoi {
            display: grid;
            grid-template-columns: auto;
            grid-template-rows: 200px 200px 200px;
            padding: 10px;
            grid-gap: 10px;
        }
        .medee .item1 img {
            width: 90%;
        }
        .medee {
            display: grid;
            grid-template-columns: auto;
            grid-template-rows: auto auto auto auto auto auto auto auto;
            grid-gap: 10px;
        }
    }
</style>

<body>
    <div class="tolgoi">
        <div class="item1">
            <div class="ocon"><a href="#"><i class="fa fa-book" aria-hidden="true" ></i></a></div>
            <a href="/home/mendchilgee/taniltsuulga.php">
                <div class="content">
                    <h3>Бидний тухай</h3>
                    <p>Манай сургууль нь 1964 онд анх "Хятад иргэд"-ийн сургууль нэртэйгээр байгуулагдан үйл ажиллагаагаа явуулсаар байгаа билээ. Одоогоор 32 багш 500 сурагчидтай. </p>
                </div>
            </a>
        </div>
        <div class="item1">
            <div class="ocon"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></div>
            <a href="/home/durem/durem.php?id=2">
                <div class="content">
                    <h3>Боловсрол</h3>
                    <p>Монгол Улсын боловсролын зорилго нь иргэнийг оюун ухаан, ёс суртахуун, бие бялдрын зохих чадавхитай, хүмүүнлэг ёсыг дээдлэн сахидаг, бие даан сурах, ажиллах, амьдрах чадвартай болгон төлөвшүүлэхэд оршино.</p>
                </div>
            </a>
        </div>
        <div class="item1">
            <div class="ocon"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i></a></div>
            <a href="#anchor">
                <div class="content">
                    <h3>Холбоо барих</h3>
                    <p>Хаяг: Сүхбаатар дүүрэг, 10-р хороо, Цагдаагийн гуд-55, УБ (100-н айл)<br>

Цахим шуудан: Lmhqyyxx@163.com<br>

Утас:976-11-354166 , 99263858 , 99285458 .</p>
                </div>
            </a>
        </div>
    </div>
    <h1>Мэдээ мэдээлэл</h1>
    <div style="height: 2px;background: black;"></div>
    <div class="medee">
    <?php while($row = $result->fetch_assoc()){?>
        <div class="item1">
            <a href="/home/medee/Negmedeelel.php?id=<?php echo $row['id'];?>"><img src="/home/medee/image/<?php echo $row['photo'];?>"></img>
            </a>
            <p><a href="/home/medee/Negmedeelel.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></p>
        </div>
  <?php }?>
    </div>
    <div class="iluuih" id="anchor">
        <a href="/home/medee/"> <p> Илүү ихийг үзэх</p></a>
    </div>

</body>

</html>