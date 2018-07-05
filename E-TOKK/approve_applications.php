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
          <?php include('php/leave_connectdb.inc.php');?>
          <div class="header-w3l"><h1>
            <span>A</span>pprove<br><br><br>
            <span>A</span>pplications<br><br><br>
          </div>         
      <!--content-->   
      <form style="border:1px solid #ccc" method ='POST' action="php/approve_leaveapplication.inc.php?stuid=<?php echo $stuid;?> ">
      <div class="container">
      
      <hr>
      
      <label for="fname"><b>User name</b></label><br>
      <input type="text" value= "<?php echo $uname; ?> "readonly><br>
      <br>
      <label for="type"><b>Type</b></label><br>
      <input type="text" value= "<?php echo $type; ?> "readonly><br>
      <br>
      <label for="num_days"><b>Number of days</b></label><br>
      <input type="text" value= "<?php echo $num_day; ?> "readonly><br>

      
      <hr>
      <label for="from_date">From   *</label>
      <input type="text" value= "<?php echo $from_date; ?> "readonly><br>

                   
      <label for="to_date">To   *</label>
      <input type="text" value= "<?php echo $to_date; ?> "readonly><br>
            
          

      
      
      <div class="clearfix">
        <button type="submit" class="signupbtn" name="approve">Approve</button>
        <button type="submit" class="signupbtn" name="reject">Reject</button>
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
