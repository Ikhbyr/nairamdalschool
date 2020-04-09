<?php
include('session.php');
?>
<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from surgalt where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
        $photo=$row['photo'];
        $type = $row['type'];
	}else{
		$title = "";
		$body = "";
        $photo="";
        $type ="";
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

<h1>Сургалт нэмэх, Шинэчлэх</h1>

<a href="/home/surgalt/update-surgalt.php"><input type="button" value="Буцах"></a>

<form action="process.php?action=surgaltadd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<br>Сургатанд холбоотой зургаа оруулна уу:
	 <input type="file" name="photo" id="photo" value="<?php echo $photo;?>"><br><br>
	Сургалтын төрлөө сонгоно уу:<br> <input type="radio" name="type" value="kurs"> Курс Сургалт<br>
  <input type="radio" name="type" value="undsen"> Үндсэн Сургалт<br></div>
	<div class="content">
       
	Сургалтын гарчиг: <input type="text" name="title" value="<?php echo $title;?>"><br>
	</div>
    Сургалтын дэлгэрэнгүй мэдээлэл: <br>
	<textarea rows="4" cols="50" name="body" value="<?php echo $body;?>" placeholder="Enter text here..."><?php echo $body;?></textarea><br>
	<script>
        CKEDITOR.replace('body');
    </script>
    <input type="submit" value="Нийтлэх" name="submit">
</form>
