<?php include('session.php')?>
<meta charset="utf-8">
<?php
include('config.php');

	// Ямар үйлдэл хийх гэж байгааг GET хүсэлтээр хүлээж авна
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	// Хүснэгтийн primarykey-г id-аар дамжуулна
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $aldaa = " ";
	if($action == "useradd1"){

		if($id == ''){
			$qry = "
				insert into users(username, password, email)
				values ('{$_POST['username']}','{$_POST['password']}','{$_POST['email']}')
				";
		}else{
			$qry = "
				update users set
				username = '{$_POST['username']}',
				password = '{$_POST['password']}',
				email = '{$_POST['email']}'
				where id = '{$id}'
			";
		}
		if ($conn->query($qry) === true) {
            //header('location: welcome.php');
            echo "<script type='text/javascript'>window.top.location='/home/welcome.php';</script>"; exit;
            
		}else{
            echo $aldaa="Алдаа гарлаа";
            echo $conn->error;
           
        }
	}
	if($action == "userdel"){
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$qry = "delete from users where id = '{$id}'";
		if ($conn->query($qry) === true) {
			 echo "<script type='text/javascript'>window.top.location='/home/welcome.php';</script>"; exit;
		}else{
            echo $aldaa="Алдаа гарлаа";
            echo $conn->error;
            
		}
	} 
	if($action == "upload"){
		
	}
?>
