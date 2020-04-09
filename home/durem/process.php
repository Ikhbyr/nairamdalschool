<meta charset="utf-8"><?php
include('config.php');

	// Ямар үйлдэл хийх гэж байгааг GET хүсэлтээр хүлээж авна
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	
	// Хүснэгтийн primarykey-г id-аар дамжуулна
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	if($action == 'duremadd'){
		if($id == ''){
			$qry = "
				insert into durem(title, body,type)
				values ('{$_POST['title']}','{$_POST['body']}','{$_POST['type']}')
				";
		}else{
			$qry = "
				update durem set
				title = '{$_POST['title']}',
				body = '{$_POST['body']}',
				type = '{$_POST['type']}'
				where id = '{$id}'
			";
		}
		if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/welcome.php';</script>"; exit;
		}else{
			echo $conn->error;
        }
    }
    if($action == "duremdel"){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $qry = "delete from durem where id = '{$id}'";
        if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/welcome.php';</script>"; exit;
        }else{
            echo $conn->error;
        }
    } 
?>