<?php 
$fname="";
$uname="";
$gender="";
$maths="";
$science="";
$english="";
$course="";
$telephone="";
$email="";
$data="etokk";
$status='created';
$db = mysqli_connect('localhost', 'root', '', 'ddb');
$stuid=$_GET['stuid'];

if (isset($_POST['create'])) {

    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $uname=mysqli_real_escape_string($db,$_POST['uname']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $maths = mysqli_real_escape_string($db, $_POST['maths']);
    $science = mysqli_real_escape_string($db, $_POST['science']);
    $english = mysqli_real_escape_string($db, $_POST['english']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
    $telephone = mysqli_real_escape_string($db, $_POST['telephone']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $psw = $data;
    
    
    $query = "INSERT INTO student (fname, uname,  gender, maths ,science, english,course,telephone, email, psw)
            VALUES('$fname','$uname', '$gender' ,'$maths', '$science' ,'$english','$course','$telephone','$email', '$psw')";
       mysqli_query($db, $query);

    $query1="UPDATE applicants SET Approval='$status' WHERE uname='$stuid';";
        mysqli_query($db, $query1);
    header("location:  ../students_list.php?created");

}