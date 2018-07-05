<?php
session_start();
$fname="";
$uname="";
$gender="";
$maths="";
$science="";
$english="";
$course="";
$telephone="";
$email="";
$psw1="";
$psw2="";
$psw="";
$status="awaiting";

$db = mysqli_connect('localhost', 'root', '', 'ddb');
if (isset($_POST['apply'])) {

    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $uname=mysqli_real_escape_string($db,$_POST['uname']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $maths = mysqli_real_escape_string($db, $_POST['maths']);
    $science = mysqli_real_escape_string($db, $_POST['science']);
    $english = mysqli_real_escape_string($db, $_POST['english']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
    $telephone = mysqli_real_escape_string($db, $_POST['telephone']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $psw1 = mysqli_real_escape_string($db, $_POST['psw1']);
    $psw2 = mysqli_real_escape_string($db, $_POST['psw2']);
    
    if ($psw1==$psw2){
      $psw = md5($psw1);
      $query = "INSERT INTO applicants (fname, uname,  gender, maths ,science, english,course,telephone, email, psw,Approval)
            VALUES('$fname','$uname', '$gender' ,'$maths', '$science' ,'$english','$course','$telephone','$email', '$psw', '$status')";
       mysqli_query($db, $query);
       

       echo "##############You application submitted successfully";
       echo "<script type='text/javascript'>alert('Passwords don't match!')</script>";
    }else{
      echo "################################################################ERROR!!!! Passwords do not match. Please try again.";
      echo "<script type='text/javascript'>alert('Passwords don't match!')</script>";
    }
  }
//login
  if (isset($_POST['login'])){

    $uname=mysqli_real_escape_string($db,$_POST['uname']);
    $psw=mysqli_real_escape_string($db,$_POST['psw']);

    
    $data="Approved";
    $query="SELECT * FROM student WHERE uname='$uname' AND psw='$psw'";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
      $_SESSION['uname']=$uname;
      $_SESSION['success']="You are successfully logged in";
      header("location:account.php?Loginsuccessful");
    }else{
      $_SESSION['wrong']="Username/Password incorrect";
      header("location:login.php?LoginFailed");
      

    }
  }
  




  //logout
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['uname']);
    header('location: login.php');
  }
?>