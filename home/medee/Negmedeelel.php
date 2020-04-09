<?php
include('config.php');

// Өгөгдлийн сантай холбох объект үүсгэх
$conn = new mysqli($servername, $username, $password, $database);
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from medee where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
		$photo = $row['photo'];
        $title1=$row['title1'];
        $body1=$row['body1'];
        $date=$row['date_day'];
	}else{
		$title = "";
		$body = "";
		$photo = "";
        $title1="";
        $body1="";
	}
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Negmedeelel.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<body>
<div class="container">
		<div class="topic">
			<h1 id="topic" style="text-align:center;"><?php echo $title;?></h1><h3><?php echo $title1;?></h3>
                        <small><?php echo $date; ?></small>
			<div id="line"></div>
			<img src="/home/medee/image/<?php echo $photo;?>" width="100%" height="500" alt="" title="" class="float-img"/>
			
			<p><?php echo $body;?></p>
                        <p><?php echo $body1;?></p>
		</div>
</div>
		
		
</body>

</html>
<?php 
include'footernew.php'
?>