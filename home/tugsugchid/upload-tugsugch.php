<?php
   include('session.php');
?>
<?php
include('config.php');

// Өгөгдлийн сантай холбох объект үүсгэх
$conn = new mysqli($servername, $username, $password, $database);
$id = isset($_GET['id']) ? $_GET['id'] : '';

	
	$qry = "select * from tugsugch where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$ovog = $row['ovog'];
		$body = $row['body'];
		$photo = $row['photo'];
        $ner=$row['ner'];
		$year=$row['year'];
		$amjilt=$row['amjilt'];
	}else{
		$ovog = "";
		$body = "";
		$photo = "";
        $ner="";
		$year="";
		$amjilt="";
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

    
<h1>Төгсөгч нэмэх</h1>
<form action="process.php?action=tugsugchadd" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <br>
  Гарчиг оруулна уу: <input type="text" name="ovog" value="<?php echo $ovog;?>"><br>
    Хятадаар гарчиг оруулна уу:<input type="text" name="ner" id="" value="<?php echo $ner?>"><br>
    Төгсөгчидийн/ангийн/ тодорхойлолт: <br>
    <textarea rows="4" cols="50" name="body" placeholder="Enter text here..."><?php echo $body;?></textarea>
    <script>
        CKEDITOR.replace('body');
    </script>
    <br>
    Төгсөгчидйн/ангийн/ амжилт: <br>
    <textarea rows="4" cols="50" name="amjilt"  placeholder="Enter text here..."><?php echo $amjilt;?></textarea>
    <script>
        CKEDITOR.replace('amjilt');
    </script>
  <br>
  Төгссөн он: <br><input type="number" name="year" id="" value="<?php echo $year;?>"><br>
    Төгсөгчидийн/ангийн/ зураг оруулах: <br>
    <input type="file" name="photo" id="photo" value="<?php echo $photo;?>"><br><br>
    <input type="submit" value="Нийтлэх" name="submit">
</form>






</body>