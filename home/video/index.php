<?php
	include('config.php');

	$id = isset($_GET['search']) ? $_GET['search'] : '';

	
	$qry = "select * from video where body like '%{$id}%' or title like '%{$id}%' ";
	$result = $conn->query($qry);
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="olon-video.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
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
        <div>
		
		
		<div class="topnav">
  
  <h3>Видео мэдээ</h3>
  <div class="search-container">
  <form>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
		</div>
		<div id="line"></div>
		<?php while($row = $result->fetch_assoc()){?>
		
		<div class="box">
                <a href="Negvideomed.php?id=<?php echo $row['id'];?>">
			<div class="row">
				<iframe width="500" height="305" class="float-video" src="https://www.youtube.com/embed/<?php echo $row['link'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<a href="Negvideomed.php?id=<?php echo $row['id'];?>"><h4><?php echo $row['title'];?></h4></a>
				<div id="date-news"><p>Огноо:<?php echo $row['date'];?></p></div>
			</div>
                        </a>
  <?php }?>
                        

			


			
			
		</div>
		</div>

</body>

</html>
<?php 
include'footernew.php'
?>