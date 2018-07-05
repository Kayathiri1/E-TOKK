<?php include('php/form.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>E-TOKK</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/login.css">

<?php include('php/header.php'); ?>

==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <div class="block-1">
          <div class="block-1-shadow">
            <h2 class="clr-6 p4">Logo</h2>
            <div class="box-1"> <a href="#" class="img-border"><img src="images/pic.png" height="175px" width="250px" alt=""></a>
            </div></div>
          </div>

        
        <h2 class="top-1 p2"><a href="">Results</a></h2>
        <h2 class="top-1 p2"><a href="registration.php">Registration</a></h2>
        <h2 class="top-1 p2"><a href="login.php">Apply leave</a></h2>

        <p class="text-1 p3">Intake</p>
        <p>We expect the students to submit the application form before 31st May 2018  <br>
          Do it!</p>
        <p class="text-1 top-2 p3">Entrance exam</p>
        <p>Entrance exam will be held on 20th June 2018 at our campus hall.</p>
       </div>
      <div class="grid_8">
        <div class="pad-1">
          <div class="header-w3l"><h1>
            <span>L</span>ogin
            <span>F</span>orm</h1>
          </div>
          
          <?php if(isset($_SESSION['wrong'])): ?>
          <?php
          echo $_SESSION['wrong'];
          unset($_SESSION['wrong']);
          ?>


          <?php endif ?>
          
        </div>
      <form style="border:1px solid #ccc" method ='POST'>
      <div class="container">
      
      <hr>
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Username" name="uname" required><br>
      
      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Password" name="psw" required><br>
      <input type="checkbox" id="brand1" value="">
            <label for="brand1">
              <span></span>Remember me</label><br>
      <div class="forgot-w3l">
          <a href="#">Forgot Password?</a>
        </div>
      <div class="clearfix">
        <button type="submit" class="signupbtn" name="login">Login &raquo;</button>
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
