<?php include('php/change_psw.inc.php'); ?>



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
              
              <h2 class="clr-6 p4"><p><a href="account.php">Back</a></p></h2>

            </div></div>
          </div>
       </div>
      <div class="grid_8">
        <div class="pad-1">
          <div class="header-w3l"><h1>
            <span>C</span>hange<br><br><br>
            <span>P</span>assword</h1>
          </div>
          
         
          
        </div>
      <form style="border:1px solid #ccc" method ='POST' action="php/change_psw.inc.php">
      <div class="container">
      
      <hr>
      <label for="u_name"><b>User name</b></label><br>
      <input type="text" placeholder="User name" name="u_name" required><br>
      
      <label for="cu_psw"><b>Current password</b></label><br>
      <input type="text" placeholder="Current password" name="cu_psw" required><br>
      
      <label for="psw"><b>New Password</b></label><br>
      <input type="password" placeholder="New password" name="new_psw1" required><br>

      <label for="psw"><b>Re-enterPassword</b></label><br>
      <input type="password" placeholder="New password" name="new_psw2" required><br>
      
      <div class="clearfix">
        <button type="submit" class="signupbtn" name="change">Change &raquo;</button>
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
