<?php
if(isset($_POST['sumbit'])) {
$file = $_FILES[];

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['erroe'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.' $fileName);
$fileActualExt = strtolower(end($fileExt)):

$allowed = array('jpg', 'jpeg', 'png', 'pdf');

if(in_array( $fileActualExt, $allowerd)){
	if ($fileError === 0) {
		if ($fileSize < 1000000){
			$fileNameNew = uniqid('', true).".".$fileActualExt;
			$file Destinnation = 'uploads/'.$fileNameNew;
			move_upload_file($fileTmpName, $fileDestination);
			header("Location; ProfileS.html?uploadsuccess");
			
		} else {
			echo "Your file is too big"
		}
			
		} else {
	echo "There was error uploading your file!";
        }
} else {
	echo "you cannot upload files of this type!";
}
}