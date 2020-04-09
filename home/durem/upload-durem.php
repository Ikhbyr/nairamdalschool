<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from durem where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
        $type=$row['type'];

	}else{
		$title = "";
		$body = "";
        $type="";
	}
?>
<head>
    <meta charset="utf-8">
    <title>Сургууль</title>
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
</head>

<h1>Сургуулийн Дүрэм засварлах</h1>
<form action="process.php?action=duremadd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	Төрлөө сонгоно уу:<br>
	<input type="radio" name="type" id="" value="durem" checked>Дүрэм<br>
	<input type="radio" name="type" id="" value="huuli">Хууль<br>
	<br>
	Дүрмийн гарчиг: <br><input type="text" name="title" value="<?php echo $title;?>"><br>
    Дүрэм оруулах: <br>
	<textarea rows="4" cols="3" name="body" value="<?php echo $body;?>" placeholder="Enter text here..."></textarea><br>
	<script>
        CKEDITOR.replace('body');
    </script>
    <input type="submit" value="Шинэчлэх" name="submit">
</form>
