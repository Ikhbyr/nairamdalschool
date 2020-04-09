<?php
include('config.php');

	// Ямар үйлдэл хийх гэж байгааг GET хүсэлтээр хүлээж авна
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	
	// Хүснэгтийн primarykey-г id-аар дамжуулна
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	if($action == 'videoadd'){
		if($id == ''){
			$qry = "
				insert into video(title, body, title1, link)
				values ('{$_POST['title']}','{$_POST['body']}','{$_POST['title1']}','{$_POST['link']}')
				";
		}else{
			$qry = "
				update video set
				title = '{$_POST['title']}',
                body = '{$_POST['body']}',
                title1 = '{$_POST['title1']}',
				link = '{$_POST['link']}'
				where id = '{$id}'
			";
		}
		if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/video/update-video.php';</script>"; exit;
		}else{
			echo $conn->error;
        }
    }
    if($action == "videodel"){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $qry = "delete from video where id = '{$id}'";
        if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/video/update-video.php';</script>"; exit;
        }else{
            echo $conn->error;
        }
    } 
?>