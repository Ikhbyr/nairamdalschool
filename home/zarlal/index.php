<?php
   include('config.php');
?>
<?php
$sql = "SELECT * from zarlal order by id desc limit 2";
		$result = $conn->query($sql);
		if(mysqli_num_rows($result)> 0){
			while ($row = mysqli_fetch_assoc($result)){
				$title=$row['title'];
                                 echo "<marquee behavior='scroll' direction='left'>".$title."</marquee>";
			}
		}
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="medee.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	

	
	
        <style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-image:linear-gradient(90deg, #1b4588 10%, #5e1b88);
}

.topnav h3 {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav h3:hover {
  background-color: #1b4588
  color: black;
}

.topnav h3.active {
  background-color: #1b4588
  color: white;
}

.topnav .search-container {
  float: right;
  top:-10%;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #8B8CF9;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: rgba(255, 0, 0, 0.2);
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav h3, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
   
    
  }
  .topnav input[type=text] {
    border: 1px solid rgba(255, 0, 0, 0.2); 
  }
  
        </style>
</head>

<body>
	<div class="container">
        <header>
		<div class="topnav">
  
  <h3>Зарлал</h3>
  <div class="search-container">
  <form action="search.php" method="get" enctype="multipart/form-data">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>
  </header>
		<div id="line"></div>		
	<?php
        $id = isset($_GET['search']) ? $_GET['search'] : '';
		$sql = "SELECT * from zarlal where body like '%{$id}%' or body like '%{$id}%' order by date desc";
		$result = $conn->query($sql);
		if(mysqli_num_rows($result)> 0){
			while ($row = mysqli_fetch_assoc($result)){
				$id= $row['id'];
				$link= $row['photo'];
				$title=$row['title'];
                                $body=$row['body'];
                                $title1=$row['title1'];
                                $body1=$row['body1'];
                                $date=$row['date'];
				$sqlimg = "SELECT * FROM zarlal WHERE id='$id' order by id desc";
				$resultimg=  $conn->query($sqlimg);
				while($rowimg = mysqli_fetch_assoc($resultimg)){
					echo "<div class='box'>";
						echo "<div class='row'>";
							echo "<a href='negzarlal.php?id=".$id."'><h2>".$title."<sp>&nbsp;".$title1."</h2></a><br>";
						echo "</div>";
                                                echo $row['date'];
					echo "</div>";
				}
			}
		}else{
			echo "Хараахан мэдээ ороогүй байна.";
		}
	?>	
	</div>	
</body>
</html>
<?php 
include'footernew.php'
?>