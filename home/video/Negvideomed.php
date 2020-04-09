<?php
	include('config.php');
        $id = isset($_GET['id']) ? $_GET['id'] : '';
	$qry = "select title,body,title1,link,id from video where id='{$id}'";
	$result = $conn->query($qry);
        if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
        $title1=$row['title1'];
        $link=$row['link'];
	}else{
		$title = "";
		$body = "";
        $title1="";
        $link="";
	}
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Negvideomedeelel.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<body>
<div class="container">
		<div class="topic">
			<h1 id="topic"><?php echo $title;?></h1><br><?php echo $title1;?>
			<div id="line"></div>
			<iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $link;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<p><?php echo $body;?></p>
		</div>
</div>
		
		
</body>

</html>
<?php 
include'footernew.php'
?>