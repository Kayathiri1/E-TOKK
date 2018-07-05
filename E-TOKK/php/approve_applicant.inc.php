<?php 
$conn=mysqli_connect('localhost','root','','ddb');
$stuid=$_GET['stuid'];
if (isset($_POST['approve'])) {
	$data="Approved";
	$sql1="UPDATE applicants SET Approval = '$data' WHERE uname='$stuid';";
	mysqli_query($conn,$sql1);
	header("Location: ../applicants_list.php?approved");
}else if(isset($_POST['reject'])){
	$data="Rejected";
	$sql1="UPDATE applicants SET Approval = '$data' WHERE uname='$stuid';";
	mysqli_query($conn,$sql1);
	header("Location: ../applicants_list.php?rejected");
}