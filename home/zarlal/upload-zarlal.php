<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from zarlal where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
        $title1=$row['title1'];
        $body1=$row['body1'];
	}else{
		$title = "";
		$body = "";
        $title1="";
        $body1="";
	}
?>
<head>
    <meta charset="utf-8">
    <title>Сургууль</title>
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
</head>
<style type="text/css">
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
  color:  white;
  text-align: center;
  
}
</style>

<h1>Шинэ зарлал үүсгэх</h1>

<a href="/home/zarlal/update-zarlal.php"><input type="button" value="Буцах"></input></a>

<form action="process.php?action=zarlaladd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<br>
	<div class="content">
        Зураг оруулах: <input type="file" name="photo" id="photo" value="1000000"><br>
	Зарлалын гарчиг монгол: <input type="text" name="title" value="<?php echo $title;?>"><br>
    Зарлалын гарчиг хятад:<input type="text" name="title1" id="" value="<?php echo $title1?>"><br>
	</div>
    зарлал монгол: <br>
	<textarea rows="4" cols="50" name="body" value="<?php echo $body;?>" placeholder="Enter text here..."><?php echo $body;?></textarea><br>
	<script>
        CKEDITOR.replace('body');
    </script>
    зарлал хятад: <br>
	<textarea rows="4" cols="3" name="body1" value="" placeholder="Enter text here..."><?php echo $body1;?></textarea><br>
	<script>
        CKEDITOR.replace('body1');
    </script>
    <input type="submit" value="Нийтлэх" name="submit">
</form>
