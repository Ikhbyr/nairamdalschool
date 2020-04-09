<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	$qry = "select * from teacher where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$ner = $row['ner'];
		$ovog = $row['ovog'];
                $ner1=$row['ner1'];
		$ovog1=$row['ovog1'];
		$amjilt=$row['amjilt'];
		$zereg=$row['zereg'];
		$undes=$row['undes'];
		$photo=$row['photo'];
		$huis=$row['huis'];
		$amjilt1=$row['amjilt1'];
		$zereg1=$row['zereg1'];
		$phone=$row['phone'];
                $hicheel=$row['hicheel'];
                $nemelt=$row['nemelt'];
                $ajil=$row['ajil'];
                $surguuli=$row['surguuli'];
	}else{
		$ner = "";
		$ovog = "";
                $ner1="";
		$ovog1="";
		$amjilt="";
		$zereg="";
		$undes="";
		$photo="";
		$huis="";
		$amjilt1="";
		$zereg1="";
		$phone="";
                $hicheel="";
                $hicheel="";
                $nemelt="";
                $ajil="";
                $surguuli="";
	}
?>
<?php 
include'headernew.php'
?>
    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <title>Багш</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Creative Profile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
        />
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta tag Keywords -->

        <!-- Custom-Files -->
        <link rel="stylesheet" href="one-teacher-bootstrap.css">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="one-teacher.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="css/one-teacher-font-awesome.min.css">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //Custom-Files -->

        <!-- Web-Fonts -->
        <link href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- //Web-Fonts -->
    <style>
    .mt-4 img{
    width:60%;
    }
    .skills_left{
        line-height:1.6 !important;
    }
    </style>
    </head>

    <body>
     
        <div class="wrap" id="home">



            <!-- container -->
            <div class="container">
                <!-- main -->
                <div class="main">



                    <section class="banner-bottom" id="about">
                        <div class="inner-sec">
                            <div class="row middle-grids">
                                <div class="col-lg-5 advantage-grid-info">
                                    <div class="advantage_left">
                                        <h2 class="heading text-capitalize mb-4">Овог/Нэр: 
                                            <?php echo $row['ovog'];?> &nbsp;
                                            <?php echo $row['ner'];?>
                                        </h2>
                                        <h6>
                                            <?php echo $row['ner1'];?>
                                        </h6>
                                        <h4>
                                            <?php echo $row['hicheel'];?> </h4>



                                    </div>
                                </div>
                                <div class="col-lg-7 advantage-grid-info1">
                                    <div class="advantage_left1 mt-lg-0 mt-4">
                                        <img src="/home/teacher/image/<?php echo $photo;?>" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- //about us -->


                    <section class="edu-exp" id="edu-exp">
                        <div class="inner-sec">
                            <h3 class="heading text-capitalize mb-md-5 mb-4">Боловсрол ба туршлага</h3>
                            <div class="edu-exp-grids">
                                <div class="tab-main text-center">
                                    <input id="tab1" type="radio" name="tabs" class="w3pvt-sm" checked>
                                    <label for="tab1"><span class="fa fa-graduation-cap" aria-hidden="true"></span>Education</label>

                                    <section id="content1">
                                        <div class="row text-left">
                                            <div class="col-lg-6 inner-w3pvt-wrap">
                                                <h4>Төгссөн сургууль</h4>
                                                <p><?php echo $surguuli;?></p>
                                            </div>
                                            <div class="col-lg-6 inner-w3pvt-wrap">
                                                <h4>Боловсролын зэрэг</h4>
                                                <h6><?php echo $zereg1;?></h6>
                                                <p><?php echo $zereg;?></p>
                                            </div>
                                            <div class="col-lg-6 inner-w3pvt-wrap">
                                                <h4>Ажилласан байдал</h4>
                                                <p> <?php echo $ajil;?></p>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="skills" id="skills">
                        <div class="inner-sec">
                            <h3 class="heading text-capitalize mb-md-5 mb-4">Гавъяа шагнал</h3>
                            <div class="row middle-grids">
                                <div class="col-lg-6">
                                    <div class="skills-left">
                                        <p class="card-text mb-4"><?php echo $amjilt;?></p>
                                        <p class="card-text mb-4"><?php echo $amjilt1;?></p>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </section>
                    <section class="skills" id="skills">
                        <div class="inner-sec">
                            <h3 class="heading text-capitalize mb-md-5 mb-4">Нэмэлт мэдээлэл</h3>
                            <div class="row middle-grids">
                                <div class="col-lg-12">
                                    <div class="skills-left">
                                        <p class="card-text mb-4"><?php echo $nemelt;?></p>


                                    </div>
                                </div>



                            </div>
                        </div>
                    </section>





                    <!-- tabs -->
                </div>
                <!-- //main -->


            </div>

        </div>
    </body>

    </html>
    <?php 
include'footernew.php'
?>