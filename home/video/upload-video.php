<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from video where id = '{$id}'";
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
<meta charset="utf-8">
<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<style type="text/css">

body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
  color:  white;
  text-align: center;
  font-size: 25px;
}
#video_input{
	background-color:rgba(0, 0, 0, 0);
	color: white;
	width: 250px;
	height: 40px;
        font-size: 30px;
}
</style>
<a href="/home/video/update-video.php"><input type="button" value="Буцах"></input></a>
<h1>Шинэ мэдээ үүсгэх</h1>
<form action="process.php?action=videoadd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<br>
	Видео мэдээний гарчиг монгол: <input type="text" name="title" value="<?php echo $title;?>"><br>
    Видео мэдээний гарчиг хятад:<input type="text" name="title1" id="" value="<?php echo $title1?>"><br>
    Мэдээлэл монгол/хятад: <br>
    <textarea rows="4" cols="50" name="body" value="<?php echo $body;?>" placeholder="Enter text here..."><?php echo $body;?></textarea><br>
	<script>
        CKEDITOR.replace('body');
    </script>
	
    Мэдээлэл link/url/ хаягийг оруулна уу: <br>
    <input type="text" name="link" value="<?php echo $link;?>" placeholder="Enter link here..."><br>
    <br><input id="video_input" type="submit" value="Нийтлэх" name="submit"><br><br>
</form>
