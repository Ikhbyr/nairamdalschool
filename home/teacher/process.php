<?php
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
	if($action == 'teacheradd'){ 
		if($id == ''){
			$qry = "
				insert into teacher(ovog, ner, ovog1, ner1,amjilt,zereg,undes,photo,huis,amjilt1,zereg1,phone,hicheel,ajil,nemelt,surguuli)
				values ('{$_POST['ovog']}','{$_POST['ner']}','{$_POST['ovog1']}','{$_POST['ner1']}','{$_POST['amjilt']}','{$_POST['zereg']}','{$_POST['undes']}','{$file_name}','{$_POST['huis']}','{$_POST['amjilt1']}','{$_POST['zereg1']}','{$_POST['phone']}','{$_POST['hicheel']}','{$_POST['ajil']}','{$_POST['nemelt']}','{$_POST['surguuli']}')
";
		}else{
			$qry = "
				update teacher set
				ovog = '{$_POST['ovog']}',
                ner = '{$_POST['ner']}',
                ovog1 = '{$_POST['ovog1']}',
				ner1 = '{$_POST['ner1']}',
				amjilt='{$_POST['amjilt']}',
				zereg='{$_POST['zereg']}',
				undes='{$_POST['undes']}',
				photo='{$file_name}',
				huis='{$_POST['huis']}',
				amjilt1='{$_POST['amjilt1']}',
				zereg1='{$_POST['zereg1']}',
				phone='{$_POST['phone']}',
                                hicheel='{$_POST['hicheel']}',
                                ajil='{$_POST['ajil']}',
                                nemelt='{$_POST['nemelt']}',
                                surguuli='{$_POST['surguuli']}'
				where id = '{$id}'
			";
		}
		if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/teacher/update-teacher.php';</script>"; exit;
		}else{
			echo $conn->error;
        }
    }
    if($action == "teacherdel"){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $qry = "delete from teacher where id = '{$id}'";
        if ($conn->query($qry) === true) {
            echo "<script type='text/javascript'>window.top.location='/home/teacher/update-teacher.php';</script>"; exit;
        }else{
            echo $conn->error;
        }
    } 
?>