<?php
include_once 'config.php';
?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Найрамдал &#8211; Бүрэн дунд сургууль</title>
    <link rel='stylesheet' id='hackum-style-bootstrap-css' href='http://student.num.edu.mn/wp-content/themes/Hackum/layouts/bootstrap.min.css?ver=5.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='hackum-style-slider-css' href='http://student.num.edu.mn/wp-content/themes/Hackum/layouts/slider.css?ver=5.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='hackum-style-css' href='http://student.num.edu.mn/wp-content/themes/Hackum/style.css?ver=5.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='hackum-style-main-css' href='http://student.num.edu.mn/wp-content/themes/Hackum/layouts/main.css?ver=5.0.3' type='text/css' media='all' />
    <script type='text/javascript' src='http://student.num.edu.mn/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <link rel="icon" href="#" sizes="32x32" />
    <link rel="icon" href="#" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="#" />
</head>

<body class="home page-template page-template-template-parts page-template-page-nosidebar-frontpage page-template-template-partspage-nosidebar-frontpage-php page page-id-5130">
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"></a>
        <div id="content" class="site-content bg-light">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-5130" class="post-5130 page type-page status-publish hentry">
                        <div class="entry-content">
                            <!-- Slider begin O. Ikhbayar -->
                            <section id='bigSlider'>
                                <div id='carousel-example-2' class='carousel slide carousel-fade shadow' data-ride='carousel'>
                                    <!--Indicators-->
                                    <ol class='carousel-indicators'>
                                        <li data-target='#carousel-example-2' data-slide-to='0' class=' active '></li>
                                        <li data-target='#carousel-example-2' data-slide-to='1' class=''></li>
                                        <li data-target='#carousel-example-2' data-slide-to='2' class=''></li>
                                        <li data-target='#carousel-example-2' data-slide-to='3' class=''></li>
                                    </ol>
                                    <!--/.Indicators-->
                                    <!--Slides-->
                                    <div class='carousel-inner' role='listbox'>
                                        <?php
                                            $a=1;
                                            $act="active";
                                            $sql = "SELECT * from slide";
                                            $result = $conn->query($sql);
                                            if(mysqli_num_rows($result)> 0){
                                                while ($row = mysqli_fetch_assoc($result)){
                                                    $id= $row['id'];
                                                    $link= $row['link'];
                                                    $sqlimg = "SELECT * FROM slide WHERE id='$id'";
                                                    $resultimg= $conn->query($sqlimg);
                                                    while($rowimg = mysqli_fetch_assoc($resultimg)){
                                                        if($a==1){
                                                            echo "<div class='carousel-item active'>";
                                                            $a=$a+$a;
                                                        }else{
                                                            echo "<div class='carousel-item'>";
                                                        }                                                        
                                                            echo "<div class='view'>";
                                                                if($rowimg['status']==0){
                                                                    echo " <a href='/home/slide/medee.php?id=".$id."'><img src='/home/slide/img/slide/".$link."' class='d-block w-100 wp-post-image' sizes='(max-width: 800px) 100vw, 800px'/></a>";
                                                                }else{
                                                                    echo "<img src='img/slide/".$link."'>";
                                                                }
                                               
                                                            echo   "<div class='mask rgba-black-light'></div>";
                                                            echo "</div>";
                                                                    echo    "<div class='carousel-caption bg-gradient-secondarygit  text-white shadow-lg rounded black-opacity'>";
                                                                    echo        "<div class='section-title'>";
                                                                    echo            "<a href='/home/slide/medee.php?id=".$id."' class=''>".$row['title']."</a>";
                                                                    echo        "</div>";
                                                                        echo "<p class='d-none d-md-block'>".$row['body']."&hellip;</p>";
                                                                echo    "</div>";
                                                            echo "</div>";
                                                    }
                                                }
                                            }else{
                                                echo "Хараахан мэдээ ороогүй байна.";
                                            }
                                        ?>
                                        <!--/.Slides-->
                                        <!--Controls-->
                                        <a class='carousel-control-prev' href='#carousel-example-2' role='button' data-slide='prev'>
                                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                            <span class='sr-only'>Өмнөх</span>
                                        </a>
                                        <a class='carousel-control-next' href='#carousel-example-2' role='button' data-slide='next'>
                                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                            <span class='sr-only'>Дараах</span>
                                        </a>
                                        <!--/.Controls-->
                                    </div>
                            </section>
                            <!-- Slider end  O. Ikhbayar-->
                            </div>
                            <!-- .entry-content -->
                    </article>
                    <!-- #post-5130 -->
                </main>
                <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- #content -->
        </div>
        <script type='text/javascript ' src='http://student.num.edu.mn/wp-content/themes/Hackum/js/bootstrap.min.js?ver=5.0.3 '></script>

</body>

</html>