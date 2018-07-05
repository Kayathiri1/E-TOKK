<?php include('php/form.php'); 
//if user not logged in cannot access
if (empty($_SESSION['uname'])){
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Account</title>
<?php include('php/header.php'); ?>

==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <?php if(isset($_SESSION['success'])): ?>
        <h2 class="p2">
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h2>
        <?php endif ?><br>
         <div class="box-1"> <a href="#" class="img-border"><img src="images/profile.png" height="200px" width="200px" alt=""></a>
          <p><a href="pro_pic.php"><b>_________Upload_________</b></a></p>




            </div>
        <div class="block-1">
          <div class="block-1-shadow">
            <h2 class="clr-6 p4">
              <?php if(isset($_SESSION['uname'])): ?>
                Welcome <strong><?php echo $_SESSION['uname']; ?></strong>
                <p><a href="change_password.php">*Change password</a></p>
                <p><a href="index.php?logout='1'">*logout</a></p>
                <?php endif ?>
            </h2>
          </div>
        </div>
      </div>
            <div class="grid_8">

        <h2 class="clr-6 p4">
          <br>
        <div class="block-1">
          <div class="block-1-shadow">
            <h2 class="clr-4 p4">
              <p><a href="leave.php">Apply leave</a></p>
              ---------
              <p><a href="">View results</a></p>
              ---------<br>
              ---------
              <p><a href="">Subject 1</a></p>
              <p><a href="">Subject 2</a></p>
              <p><a href="">Subject 3</a></p>
              <p><a href="">Subject 4</a></p>
            </h2>
          </div>
        </div>
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
