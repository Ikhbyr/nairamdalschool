<meta charset="utf-8">
<?php
$target_dir = "img/slide/";
$target_file = $target_dir . basename($_FILES["link"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["link"]["tmp_name"]);
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
    echo "Таны оруулсан нэртэй адилхан нэртэй file орсон байна.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["link"]["size"] > 500000) {
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
    echo "Зураг оруулахад алдаа гарлаа";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["link"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["link"]["name"]). " has been uploaded.";
    } else {
        echo "Зураг оруулахад алдаа гарлаа";
    }
}

include('config.php');

	// Ямар үйлдэл хийх гэж байгааг GET хүсэлтээр хүлээж авна
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	
	// Хүснэгтийн primarykey-г id-аар дамжуулна
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$file_name = $_FILES["link"]["name"];
	if($action == 'slideadd')
		if($id == ''){
			$qry = "
				insert into slide(title, body, status, link)
				values ('{$_POST['title']}','{$_POST['body']}','{$_POST['status']}','{$file_name}')
				";
		}else{
			$qry = "
				update slide set
				title = '{$_POST['title']}',
				body = '{$_POST['body']}',
				status = '{$_POST['status']}',
				link = '{$file_name}'
				where id = '{$id}'
			";
		}
		if ($conn->query($qry) === true) {
			echo "<script type='text/javascript'>window.top.location='slide-change.php';</script>"; exit;
		}else{
			echo $conn->error;
		}
?>