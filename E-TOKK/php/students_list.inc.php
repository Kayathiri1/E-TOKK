<?php
session_start();
$conn=mysqli_connect('localhost','root','','ddb');
$sql="SELECT uname FROM applicants WHERE Approval='Approved';";
$result=mysqli_query($conn,$sql);
$app_array=array();
while($row1=mysqli_fetch_assoc($result)){ 
	$app_array[]=$row1;
}
foreach($app_array as $app){
	$y=$app['uname'];
	echo "<li><a href=\"create_account.php?sid=$y\">$y</a></li>";
}?>

	



