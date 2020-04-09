<?php
include('config.php');

// Өгөгдлийн сантай холбох объект үүсгэх
$conn = new mysqli($servername, $username, $password, $database);
$id = isset($_GET['id']) ? $_GET['id'] : '';

	
	$qry = "select * from tugsugch where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$ovog = $row['ovog'];
		$body = $row['body'];
		$photo = $row['photo'];
        $ner=$row['ner'];
		$year=$row['year'];
		$amjilt=$row['amjilt'];
	}else{
		$ovog = "";
		$body = "";
		$photo = "";
        $ner="";
		$year="";
		$amjilt="";
	}
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <title>Найрамдал сургууль</title>
    	<meta charset="utf-8">
        
        <link href="tugsugch-main.css" rel="stylesheet">
    
    <link href="tugsugch-main1.css" rel="stylesheet">
	<link rel="stylesheet" href="tugsugch-style.css" rel="stylesheet">
   
	
        <script>if (location.hash[1] === "!") location.href = location.hash.substring(2);</script>
    </head>
    <body>
        
        

	

                    
                    
    <div id="content">
	
<div class="sub_header" id="sub_header">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <h3>Төгсөгчид</h3>
            </div>
            <div class="col-md-8"><div class="mybreadcrumb"> <a href="#">Нэр: <?php echo $ovog;?>&nbsp;<?php echo $ner;?></a></div><div class="clearfix"></div></div>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    	
        	
    <div class="container">
    	<div class="page_out">
            
            <p><span style="font-size: 16px;"></span><img src="/home/tugsugchid/image/<?php echo $photo;?>" style="line-height: 1.6em; width: 100%; height: 478px; float: left; margin: 0px 10px 10px 0px;" width="310" height="478" alt="">
            
            <p><strong>
            <span data-redactor-tag="span" style="font-size: 16px;"></span>
            </strong>
            </p>
            <span style="font-size: 16px;"><?php echo $body?></span></p> 
             <p><strong><span data-redactor-tag="span" style="font-size: 16px;"></span></strong></p>
               <p><span style="font-size: 16px;"><?php echo $amjilt;?></span></p> 

        </div>
    </div>
</div>

    
        
    </body>
</html>
<?php 
include'footernew.php'
?>