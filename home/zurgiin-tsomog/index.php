<?php
	include('config.php');

	$qry = "select * from zurag order by id asc";
	$result = $conn->query($qry);
?>
<?php 
include'headernew.php'
?>
<!DOCTYPE html>
<!-- Code writer  O. Ikhbayar-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/gallery.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/gallery.js"></script>
    <title>Document</title>
</head>
<body>
<h2 style="text-align:center;width:100%;font-size:25px;">Зургийн цомог</h2>
<div style="height:2px;width:100%;background:black;"></div>
    <div class="container p-3">

        <div class="fg-gallery">
        <?php while($row = $result->fetch_assoc()){?>
            <img src="images/<?php echo $row['photo'];?>" alt="zurgiin tsomog" title="<?php echo $row['body'];?>">
            <?php }?>
        </div>

    </div>

    
    
    <script>
        var a = new FgGallery('.fg-gallery', {
            cols: 3,
            style: {
                border: '10px solid #fff',
                height: '230px',
                boxShadow: '0 2px 10px -5px #000'
            }
        })
    </script>
</body>
</html>
<?php 
include'footernew.php';?>