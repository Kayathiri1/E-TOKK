<?php
session_start();
$u_name="";
$cu_psw="";
$new_psw1="";
$new_psw2="";
$psw="";

$db = mysqli_connect('localhost', 'root', '', 'ddb');
if (isset($_POST['change'])) {

    $u_name=mysqli_real_escape_string($db,$_POST['u_name']);
    $cu_psw = mysqli_real_escape_string($db, $_POST['cu_psw']);
    $new_psw1 = mysqli_real_escape_string($db, $_POST['new_psw1']);
    $new_psw2 = mysqli_real_escape_string($db, $_POST['new_psw2']);


    $query="SELECT * FROM student WHERE uname='$u_name' AND psw='$cu_psw';";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1){
    
      if ($new_psw1==$new_psw2){
        $query="UPDATE student SET psw='$new_psw1' WHERE uname='$u_name';";
        mysqli_query($db, $query);
        echo "##############Your password changed successfully";

        echo "<script type='text/javascript'>alert('Success')</script>";
        header("location: ./account.php?SuccessfullyChanged");
      }else{
        echo "<script type='text/javascript'>alert('Passwords don't match!')</script>";
        header("location: ./change_password.php?Error");

      }
  }
}
