<?php
	include('config.php');

        $id = isset($_GET['search']) ? $_GET['search'] : '';

	
	$qry = "select * from tugsugch where body like '%{$id}%' or ner like '%{$id}%' or ovog like '%{$id}%' or year like '%{$id}%' order by year asc";
	$result = $conn->query($qry);
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Амжилт</title>
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
  
  <h3>Төгсөгчид</h3>
  <div class="search-container">
  <form>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>
</header>
<?php while($row = $result->fetch_assoc()){?>
 <div class="well"><a href="/home/tugsugchid/one-tugsugch.php?id=<?php echo $row['id'];?>">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width:50%" src="/home/tugsugchid/image/<?php echo $row['photo'];?>" alt="nairamdal">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><?php echo $row['ovog'];?><sp> <?php echo $row['ner'];?></h3>
                        <small>Төгссөн он:  <?php echo $row['year'];?> </small>
                    </div>
                </div>
                </a>
            </div>
<?php }?>

</div>
</body>
</html>
<?php 
include'footernew.php'
?>