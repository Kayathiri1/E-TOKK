<!DOCTYPE html>
<html lang="en">
<head>
<title>Approve leave application</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/login.css">
<?php include('php/header.php'); ?>

==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <div class="block-1">
        </div>
      </div>
      <div class="grid_8">
        <?php $stuid=$_GET['sid'];?>

        <div class="pad-1">
          <?php include('php/connectdb.inc.php');?>
          <div class="header-w3l"><h1>
            <span>C</span>reate<br><br><br>
            <span>A</span>ccount<br><br><br>
          </div>         
      <!--content-->   
      <form style="border:1px solid #ccc" method ='POST' action="php/create_account.inc.php?stuid=<?php echo $stuid;?> ">
      <div class="container">
      
      <hr>
      
      <label for="fname"><b>Full Name</b></label><br>
      <input type="text" name="fname" value= "<?php echo $fname; ?> "><br>
      <br>
      <label for="uname"><b>User Name</b></label><br>
      <input type="text" name="uname"><br>
      <br>
      <label for="gender"><b>Gender</b></label><br>
      <input type="text" name="gender" value= "<?php echo $gender; ?> "><br>

      <label><b>Ordinary level Resuls</b></label><br>
      
      <hr>
      <label for="maths">Maths   *</label>
      <input type="text" name="maths" value= "<?php echo $maths; ?> "><br>

                   
      <label for="science">Science   *</label>
      <input type="text" name="science" value= "<?php echo $science; ?> "><br>
            
       <label for="english">English   *</label>
      <input type="text" name="english" value= "<?php echo $english; ?> "><br>

       <label for="course">Course   *</label>
      <input type="text" name="course" value= "<?php echo $course; ?> "><br>
        
      <hr>
      <label for="telephone"><b>Phone Number</b></label><br>
      <input type="text" name="telephone" value= "<?php echo $telephone; ?> "><br>

      <label for="email"><b>Email</b></label><br>
      <input type="text" name="email" value= "<?php echo $email; ?> "><br>

     

      
      
      <div class="clearfix">
        <button type="submit" class="signupbtn" name="create">Create</button>
      </div>

      
    </div>
</form>
    </div>
        <!--==============================footer=================================-->
        <footer>
          <p>© 2018 E_TOKK Technical College</p>
          
        </footer>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
</body>
</html>
