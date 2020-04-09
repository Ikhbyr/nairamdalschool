<?php
   include('config.php');
   ?>
<?php 
include'headernew.php';
?>
<?php
$id = isset($_GET['search']) ? $_GET['search'] : '';

	
	$qry = "select * from medee where body like '%{$id}%' or title like '%{$id}%' ";
	$result = $conn->query($qry);
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
</head>
<style>
        form{
                float: right;
                
        }
</style>
<body>
	<div class="container">
		<h2> Мэдээ мэдээлэл </h2>
		<form action="search.php" method="get" enctype="multipart/form-data">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
		<div id="line"></div>	
                
	<?php
		if(mysqli_num_rows($result)> 0){
            while($rowimg = mysqli_fetch_assoc($result)){
                $id= $rowimg['id'];
                $link= $rowimg['photo'];
                $title=$rowimg['title'];
                echo "<div class='box'>";
                    echo "<div class='row'>";
                        echo "<a href='Negmedeelel.php?id=".$id."'><img src='/home/medee/image/".$link."' width='140' height='140' alt='Дарж орно уу' title='дарж орно уу' class='float-img'/></a>";
                        echo "<a href='Negmedeelel.php?id=".$id."'><h3>".$title."</h3></a>";
                    echo "</div>";			
                echo "</div>";
            }
		}else{
			echo "Хайлт олдсонгүй.";
		}
	?>	
	</div>
	<br>
</body>
</html>