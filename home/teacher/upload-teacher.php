<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	$qry = "select * from teacher where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$ner = $row['ner'];
		$ovog = $row['ovog'];
                $ner1=$row['ner1'];
		$ovog1=$row['ovog1'];
		$amjilt=$row['amjilt'];
		$zereg=$row['zereg'];
		$undes=$row['undes'];
		$photo=$row['photo'];
		$huis=$row['huis'];
		$amjilt1=$row['amjilt1'];
		$zereg1=$row['zereg1'];
		$phone=$row['phone'];
                $hicheel=$row['hicheel'];
                $nemelt=$row['nemelt'];
                $ajil=$row['ajil'];
                $surguuli=$row['surguuli'];
	}else{
		$ner = "";
		$ovog = "";
                $ner1="";
		$ovog1="";
		$amjilt="";
		$zereg="";
		$undes="";
		$photo="";
		$huis="";
		$amjilt1="";
		$zereg1="";
		$phone="";
                $hicheel="";
                $hicheel="";
                $nemelt="";
                $ajil="";
                $surguuli="";
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
	</style>


<h3  >Багш бүртгэлийн хэсэг</h3>
<form action="process.php?action=teacheradd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id;?>"><br>
	Багшийн зургийг оруулна уу: <br><input type="file" name="photo" id="photo" value="<?php echo $photo;?>"><br><br>
	 Монголоор нэрээ бичнэ үү: <br><input type="text" name="ner" value="<?php echo $ner;?>"><br>
	 Хятадаар нэрээ бичнэ үү: <br><input type="text" name="ner1" value="<?php echo $ner1?>"><br>
         Багшийн заадаг хичээлийг бичнэ үү: <br><input type="text" name="hicheel" value="<?php echo $hicheel;?>"><br>
	
    
	Монголоор эцэг/эх-ийн нэр бичнэ үү: <br><input type="text" name="ovog" value="<?php echo $ovog;?>"><br>
    Хятадаар эцэг/эх-ийн нэр бичнэ үү: <br><input type="text" name="ovog1" id="" value="<?php echo $ovog1?>"><br><br>
	Монголоор амжилтаа бичнэ үү: <br>
	<textarea rows="4" cols="50" name="amjilt"  placeholder="Enter text here..."><?php echo $amjilt;?></textarea>
	<script type="text/javascript">
		CKEDITOR.replace('amjilt');
	</script><br>
    Хятадаар амжилтаа бичнэ үү: <br>
	<textarea rows="4" cols="50" name="amjilt1"  placeholder="Enter text here..."><?php echo $amjilt1;?></textarea>
	<script type="text/javascript">
		CKEDITOR.replace('amjilt1');
	</script><br>
	Монголоор багшийн зэргийг бичнэ үү: <br><input type="text" name="zereg" value="<?php echo $zereg;?>"><br>
    Хятадаар багшийн зэргийг бичнэ үү: <br><input type="text" name="zereg1" id="" value="<?php echo $zereg1?>"><br><br>
    <div class="check">
	Багшийн үндэс/угсааг сонгоно уу: <br>
	<input type="radio" name="undes" value="Хятад"> Хятад<br>
  <input type="radio" name="undes" value="Монгол" checked> Монгол<br></div>
  <div class="check1">
    Багшийн хүйс сонгоно уу: <br>
	<input type="radio" name="huis" value="Эрэгтэй"> Эрэгтэй<br>
  <input type="radio" name="huis" value="Эмэгтэй"> Эмэгтэй<br></div>
	Багшийн утасны дугаарыг оруулна уу: <br><input type="text" name="phone" value="<?php echo $phone;?>"><br>
            Ажилласан төлвийг бичнэ үү: <br>
	<textarea rows="4" cols="50" name="ajil"  placeholder="Enter text here..."><?php echo $ajil;?></textarea>
	<script type="text/javascript">
		CKEDITOR.replace('ajil');
	</script><br>
            Төгссөн сургуулиудаа оруулна уу: <br>
	<textarea rows="4" cols="50" name="surguuli"  placeholder="Enter text here..."><?php echo $surguuli;?></textarea>
	<script type="text/javascript">
		CKEDITOR.replace('surguuli');
	</script><br>
            Бусад нэмэлт мэдээллүүдээ оруулна уу: <br>
	<textarea rows="4" cols="50" name="nemelt"  placeholder="Enter text here..."><?php echo $nemelt;?></textarea>
	<script type="text/javascript">
		CKEDITOR.replace('nemelt');
	</script><br>
    <input type="submit" value="Бүртгэх" name="submit">
    <input type="submit" value="Буцах"><a href="/home/teacher/update-teacher.php"></a>
</form>
