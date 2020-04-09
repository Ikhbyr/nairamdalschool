<?php
   include('session.php');
?>
<?php
include('config.php');
// Өгөгдлийн сантай холбох объект үүсгэх
$conn = new mysqli($servername, $username, $password, $database);
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from slide where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
		$link = $row['link'];
		$status=$row['status'];
	}else{
		$title = "";
		$body = "";
		$link = "";
		$status="";
	}
?>
<meta charset="utf-8">
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<body>
	<style type="text/css">
		

body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}

h2 {margin-left: 55px;}

textarea {
  margin-top: 10px;
  margin-left: 50px;
  width: 1000px;
  height: 150px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
  border-image: none;
  border-radius: 6px 6px 6px 6px;
  border-style: none solid solid none;
  border-width: medium 1px 1px medium;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
  color: #555555;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 1em;
  line-height: 1.4em;
  padding: 5px 8px;
  transition: background-color 0.2s ease 0s;
}


textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}
[type="file"]  {
	background: #f15d22;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-family: 'Poppins', sans-serif;
	font-size: inherit;
  font-weight: 600;
  margin-bottom: 1rem;
  transition: all 0.3s;
  vertical-align: middle;
}
 [type="submit"]{
 	background: #f15d22;
        height:40px;
        width:120px;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-family: 'Poppins', sans-serif;
	font-size: inherit;
  font-weight: 600;
  position: center;
  margin-bottom: 1rem;
  transition: all 0.3s;
  vertical-align: middle;
 }
	</style>

<form action="upload.php?action=slideadd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<br><br>
	<h2>Slide-ийн гарчиг </h2><br><br>
        <textarea rows="20" name="title" id="comment_text" cols="40" class="ui-autocomplete-input" ><?php echo $title;?></textarea><br><br>
 <h2> Дэлгэрэнгүй мэдээлэл </h2> <br>
    <textarea  rows="20" name="body" id="comment_text" cols="40" class="ui-autocomplete-input" ><?php echo $title;?></textarea>
    	<script>
        CKEDITOR.replace('body');
    </script><br><br>
    <input type="hidden" name="status" id="" value="<?php echo $status;?>" disabled title="үүнийг бүү өөрчил"><br><br>
    <h2>Зураг оруулна уу/Заавал/</h2> <br>
    <input type="file" name="link" id="link" value="<?php echo $link;?>"><br><br>
    <input type="submit" value="Шинэчлэх" name="submit">

</form>

</body>
