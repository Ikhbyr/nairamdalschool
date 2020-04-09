<?php
	$servername = "pdb35.awardspace.net"; // сервер комьютерийн хаяг буюу нэр
	$username = "3001877_nairamdal";     // MySQL-ийн бааз руу хандах хэрэглэгчийн нэр
	$password = "nairamdal123"; // MySQL-ийн бааз руу хандах нууц үг
	$database = "3001877_nairamdal"; // Баазын нэр

	// Өгөгдлийн сантай холбох объект үүсгэх
	$conn = new mysqli($servername, $username, $password, $database);
?>