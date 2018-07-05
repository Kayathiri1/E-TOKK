<?php
$conn=mysqli_connect('localhost','root','','ddb');
$sid=$_GET['sid'];
$sql="SELECT * FROM leave_table WHERE uname='$sid';";
$result=mysqli_query($conn,$sql);
$applicantsarray=array();
while($row=mysqli_fetch_assoc($result)){
	$applicantsarray[]=$row;
}
foreach ($applicantsarray as $applicant){
	$uname=$applicant['uname'];
	$type=$applicant['type'];
	$num_day=$applicant['num_day'];
	$from_date=$applicant['from_date'];
	$to_date=$applicant['to_date'];


}

