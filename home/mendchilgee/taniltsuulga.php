<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	$id=3;
	$qry = "select * from taniltsuulga where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		
		$body = $row['body'];
        $photo=$row['photo'];
	}else{
		
		$body = "";
        $photo="";
	}
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <title>Захирлын мэндчилгээ</title>
    	<meta charset="utf-8">
        <link href="/static/assets/web_main.css" rel="stylesheet">
		

 <link href="/home/mendchilgee/tugsugch-main.css" rel="stylesheet">
    
    <link href="/home/mendchilgee/tugsugch-main1.css" rel="stylesheet">
	<link rel="stylesheet" href="/home/mendchilgee/tugsugch-style.css" rel="stylesheet">
   
	
	
    
        <script>if (location.hash[1] === "!") location.href = location.hash.substring(2);</script>
    </head>
    <body>
       
    <div id="content">
	<div class="sub_header" id="sub_header">
    	<div class="container">
        	<div class="row">
            <div class="col-md-4">
                <h3>Сургуулийн танилцуулга</h3>
            </div>
            <div class="col-md-8"><div class="mybreadcrumb"></div><div class="clearfix"></div></div>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="page_out">
            <p><img src="/home/mendchilgee/image/<?php echo $photo?>" alt="" style="line-height: 1.6em; width: 274px; height: 412.432055749129px; float: right; margin: 0px 0px 10px 10px;">
            <?php echo $body;?>
        </div>
    </div>
</div>
   
    </body>
</html>
<?php 
include'footernew.php'
?>