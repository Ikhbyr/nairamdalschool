<?php
   include('session.php');
?>
<?php
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

 .check {
 	position: relative;
 	width: 50%;
 	height: 70px;
 	left:20px;
 }
 .check1 {
 	position: relative;
 	width: 50%;
 	height: 50px;
 	top:-70px;
 	left:45%;
 }
 [type="text"] {
 	position: relative;
 	left:20px;
 	
 }
h3{
	position:relative; 
	left:20px;
}
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
	</style>
}

    
<h1>Сургуулийн хууль, журам засварлах хэсэг</h1>
<form action="process.php?action=duremadd" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  Төрлөө сонгоно уу:<br>
  <input type="radio" name="type" id="" value="durem" >Дүрэм<br>
  <input type="radio" name="type" id="" value="huuli" checked>Хууль<br>
  <br>
  Дүрмийн гарчиг: <br><input type="text" name="title" value="<?php echo $title;?>"><br>
    Дүрэм оруулах: <br>
  <textarea rows="4" cols="3" name="body" value="<?php echo $body;?>" placeholder="Enter text here..."></textarea><br>
  <script>
        CKEDITOR.replace('body');
    </script>
    <input type="submit" value="Шинэчлэх" name="submit">
</form>





</body>