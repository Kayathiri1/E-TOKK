<?php

if(isset($_POST['submit'])){
	$file=$_FILES['file'];

	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];

	$fileExt=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExt));

	$allowed=array('jpg','jpeg','png');

	if(in_array($fileActualExt,$allowed)){
		if($fileError==0){
			if($fileSize<10000000){
				$fileNameNew=uniqid('',true).".".$fileActualExt;
				$fileDestination="Profile_pic/".$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				header("Location:account.php?Uploadsuccess");
			}else{
				header("Location:pro_pic.php?Your_file_is_too_big");
			}
		}else{
			header("Location:pro_pic.php?There_is_an_error_in_uploading_your_file");
		}
	}else{
		header("Location:pro_pic.php?You_cannot_upload_files_of_this_type");
	}
}
?>