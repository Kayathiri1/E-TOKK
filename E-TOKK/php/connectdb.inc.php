<?php
$conn=mysqli_connect('localhost','root','','ddb');
$sid=$_GET['sid'];
$sql="SELECT * FROM applicants WHERE uname='$sid';";
$result=mysqli_query($conn,$sql);
$applicantsarray=array();
while($row=mysqli_fetch_assoc($result)){
	$applicantsarray[]=$row;
}
foreach ($applicantsarray as $applicant){
	$fname=$applicant['fname'];
	$uname=$applicant['uname'];
	$gender=$applicant['gender'];
	$maths=$applicant['maths'];
	$science=$applicant['science'];
	$english=$applicant['english'];
	$course=$applicant['course'];
	$telephone=$applicant['telephone'];
	$email=$applicant['email'];
	$psw=$applicant['psw'];

}

