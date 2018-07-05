<?php include('php/formleave.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>E-TOKK</title>
<?php include('php/header.php'); ?>

==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <div class="block-1">
          <div class="block-1-shadow">
            <h2 class="clr-6 p4">
              <p><a href="account.php">My Page</a></p>
              ----------
              <p><a href="index.php?logout='1'">logout</a></p>
            </h2>
          </div>
        </div>

        <p class="text-1 p3">############</p>
        <p>*******************************************  <br>
          +++++++++++!</p>
        <p class="text-1 top-2 p3">################</p>
        <p>*************************************</p>
      </div>
      <div class="grid_8">
        <div class="pad-1">
          <h2 class="p2">Leave Application Sumbission</h2>
          <p class="text-1">Don't try to apply leave near semester exams and other evaluation periods. Then your application will be rejected without further clarifications.
            <br>
          Fill all the details!!!</p>
        </div>
      <div class="block-1">
        <div class="block-1-shadow">
        </div>
      </div>
      <form method ='POST'>
      <div class="container">
        <h2 class="pad_bot1">Fill the given form</h2><hr>
        <label for="fname"><b>Full Name</b></label><br>
        <input type="text" placeholder="Full Name" name="fname" required><br>
        <label for="uname"><b>User Name</b></label><br>
        <input type="text" placeholder="User Name" name="uname" required><br>
        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Password" name="psw" required><br>
        <label for="email"><b>E-mail</b></label><br>
        <input type="email" placeholder="Email" name="email" required><br>
        <label for="type"><b>Type<br></b>(It is compulsory to choose one option in order to submit a valued application)</label><br>
        <input type="radio" name="type" value="Medical" />
        <label class="type" >Medical</label><br>
        <input type="radio" name="type" value="Personal" />
        <label class="type" >Personal</label><br>
        <input type="radio" name="type" value="Vacation" />
        <label class="type" >Vaccation</label><br>
        <input type="radio" name="type" value="Other" />
        <label class="type" >Other</label><br>
        <label for="num_day"><b>Number of days</b></label><br>
        <input type="text" placeholder="Number of days" name="num_day" required><br>
        <label for="from_date"><b>From</b>(mm/dd/yyyy)</label><br>
        <input type="date"  name="from_date" required><br>
        <label for="to_date"><b>To</b>(mm/dd/yyyy)</label><br>
        <input type="date"  name="to_date" required><br>
        <label for="comment"><b>Comment</b></label><br>
        <input type="text" placeholder="Text here" name="comment"><br>

        <br>
        <div class="infobox"><h4>Helpful Information</h4>
          <p>You have to fill every box inorder to submit a valued application form otherwise your leave application form will be rejected without further explanation.</p>
        </div> 
        <div class="clearfix">
        <button type="submit" class="signupbtn" name="apply_leave">Apply leave</button></div>
    
      </div>
      </form>
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
