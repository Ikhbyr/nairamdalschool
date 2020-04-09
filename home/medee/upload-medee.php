<?php
   include('session.php');
?>
<?php
include('config.php');

// Өгөгдлийн сантай холбох объект үүсгэх
$conn = new mysqli($servername, $username, $password, $database);
$id = isset($_GET['id']) ? $_GET['id'] : '';

	
	$qry = "select * from medee where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
		$photo = $row['photo'];
        $title1=$row['title1'];
        $body1=$row['body1'];
	}else{
		$title = "";
		$body = "";
		$photo = "";
        $title1="";
        $body1="";
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
#sumbit_input
{
		background-color: rgba(0, 0, 0,0.5);
		color: white;
		width: 250px;
		height: 40px;
		
}
	</style>
	<body>
	<a href="/home/medee/update-medee.php"><input type="button" value="Буцах"></input></a>
<h1>Шинэ мэдээ үүсгэх</h1>
<form action="process.php?action=medeeadd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<br>
	Мэдээний гарчиг монгол: <input type="text" name="title" value="<?php echo $title;?>"><br>
    Мэдээний гарчиг хятад:<input type="text" name="title1" id="" value="<?php echo $title1?>"><br>
   <br> Мэдээлэл монгол: <br>
    <textarea rows="4" cols="50" name="body" placeholder="Enter text here..."><?php echo $body;?></textarea>
    <script>
        CKEDITOR.replace('body');
    </script>
    <br>
    Мэдээлэл хятад: <br>
    <textarea rows="4" cols="50" name="body1"  placeholder="Enter text here..."><?php echo $body1;?></textarea>
    <script>
        CKEDITOR.replace('body1');
    </script>
    <br>
    Мэдээний зураг оруулах: <br>
	<form class="photo">
    <input type="file" name="photo" id="photo" value="<?php echo $photo;?>"><br><br>
    <input id="sumbit_input" type="submit" value="Нийтлэх" name="submit">
</form>
</form>
</body>