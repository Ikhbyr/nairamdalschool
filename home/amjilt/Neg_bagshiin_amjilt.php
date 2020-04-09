<?php
session_start();
include('config.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from amjilt where id = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['body'];
                $type=$row['type'];
		$photo=$row['photo'];
                $date=$row['date'];

	}else{
		$title = "";
		$body = "";
                $type="";
		$photo="";
                $date="";

	}
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Сурагчын амжилт</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
   background-image: linear-gradient(to right, blue , pink);
  text-align: center;
  font-size: 35px;
  color: white;
  padding: 5px;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-image: linear-gradient(to right, blue , pink);
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
#line
{
	width: 100%;
	height: 2px;
	background-color: blue;
}
</style>
</head>
<body>
<div class="container">

<header>
  <h2><?php echo $title;?></h2>
</header>
<div class="cont">
<section>
<div class="video">
			<img src="/home/amjilt/image/<?php echo $photo;?>" width="350" height="250" class="imgrow">
</div>
  
  <article>
    <h1><?php echo $body;?></h1>
    <p></p>
    <p></p>
  <div class="date"><p>Огноо:<?php echo $date;?></p></div>
  </article>
</section>
</div>

</div>

</div>
</body>
</html>
<?php 
include'footernew.php'
?>
