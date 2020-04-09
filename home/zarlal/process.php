
<meta charset="utf-8"><?php
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Таны оруулсан нэртэй file орсон байна.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 900000) {
    echo "Уучлаарай алдаа гарлаа таны зурагний хэмжээ хэтэрхий их байна.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "jpg") {
    echo "Уучлаарай, Таний оруулсан зураг JPG, JPEG, PNG & GIF зөвхөн эдгээр өргөтгөлтэй байх ёстой.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

include('config.php');

	// Ямар үйлдэл хийх гэж байгааг GET хүсэлтээр хүлээж авна
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	
	// Хүснэгтийн primarykey-г id-аар дамжуулна
	$id = isset($_POST['id']) ? $_POST['id'] : '';
    echo $file_name = $_FILES["photo"]["name"];
    if($file_name==''){
        echo $file_name='noimage.jpg';
    }

	if($action == 'zarlaladd'){
		if($id == ''){
			$qry = "
				insert into zarlal(title, body, title1, body1,photo)
				values ('{$_POST['title']}','{$_POST['body']}','{$_POST['title1']}','{$_POST['body1']}','{$file_name}')
				";
		}else{
			$qry = "
				update zarlal set
				title = '{$_POST['title']}',
                body = '{$_POST['body']}',
                title1 = '{$_POST['title1']}',
				body1 = '{$_POST['body1']}',
                                photo = '{$file_name}'
				where id = '{$id}'
			";
		}
		if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/zarlal/update-zarlal.php';</script>"; exit;
		}else{
			echo $conn->error;
        }
    }
    if($action == "zarlaldel"){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $qry = "delete from zarlal where id = '{$id}'";
        if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/zarlal/update-zarlal.php';</script>"; exit;
        }else{
            echo $conn->error;
        }
    } 
?>