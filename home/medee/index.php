<?php
   include('config.php');
   $showRecordPerPage = 15;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT * FROM medee order by id desc";
$allEmpResult = mysqli_query($conn, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT *
FROM `medee` order by id desc LIMIT $startFrom, $showRecordPerPage";
$empResult = mysqli_query($conn, $empSQL);
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<!-- code writer  O. Ikhbayar-->
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
  
  <h3>Мэдээ мэдээлэл</h3>
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
		if(mysqli_num_rows($empResult)> 0){
            while($rowimg = mysqli_fetch_assoc($empResult)){
                $id= $rowimg['id'];
                $link= $rowimg['photo'];
                $title=$rowimg['title'];
                $date=$rowimg['date_day'];
                echo "<div class='box'>";
                    echo "<div class='row'>";
                        echo "<a href='Negmedeelel.php?id=".$id."'><img src='/home/medee/image/".$link."' width='140' height='140' alt='Дарж орно уу' title='дарж орно уу' class='float-img'/></a>";
                        echo "<a href='Negmedeelel.php?id=".$id."'><h3>".$title."</h3></a><br>";
                        
                        
                    echo "</div>";
                    echo"<small style=''>".$date."</small>";
                echo "</div>";
            }
		}else{
			echo "Хараахан мэдээ ороогүй байна.";
		}
	?>	
	</div>
	<br>
<nav aria-label="Page navigation">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">First</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php } ?>
</ul>
</nav>
</body>
</html>
<?php 
include'footernew.php'
?>