<?php
session_start();
$status='awaiting';
$conn=mysqli_connect('localhost','root','','ddb');
$sql="SELECT uname FROM leave_table WHERE approval='$status';";
$result=mysqli_query($conn,$sql);
$app_array=array();
while($row1=mysqli_fetch_assoc($result)){ 
	$app_array[]=$row1;
}
foreach($app_array as $app){
	$y=$app['uname'];
	echo "<li><a href=\"approve_applications.php?sid=$y\">$y</a></li>";
}?>

	



