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
            <span>A</span>pplication
            <span>T</span>o<br><br><br>
            <span>R</span>egister</h1>
          </div>         
         <p class="text-1"><br><br><br>The selected applicants will be called for the entrance examination.
            <br>
          We brighten your future!!!</p>
        </div>
      <form style="border:1px solid #ccc" method ='POST'>
      <div class="container">
       <h2 class="pad_bot1">Fill the given form</h2>
      
      <hr>
    <label for="fname"><b>Full Name</b></label><br>
      <input type="text" placeholder="Full Name" name="fname" required><br>
      <br>
      <label for="uname"><b>User Name</b></label><br>
      <input type="text" placeholder="User Name" name="uname" required >Please give a meaningful name
      <br>
      <label for="gender"><b>Gender</b></label><br>
        <input type="radio" name="gender" value="Male" />
        <label class="gender" >Male</label><br>
        <input type="radio" name="gender" value="Female"/>
        <label class="gender">Female</label><br><br>
      <label><b>Ordinary level Resuls</b></label><br>
      
      <hr>
      <label for="maths">Maths   *</label>
                    <input type="radio" name="maths" value="A" />
                    <label class="maths" >A</label>
                    <input type="radio" name="maths" value="B" />
                    <label class="maths" >B</label>
                    <input type="radio" name="maths" value="C" />
                    <label class="maths" >C</label>
                    <input type="radio" name="maths" value="S" />
                    <label class="maths" >S</label>
                    <input type="radio" name="maths" value="F" />
                    <label class="maths" >F</label><br>
      <label for="science">Science   *</label>
                    <input type="radio" name="science" value="A" />
                    <label class="science" >A</label>
                    <input type="radio" name="science" value="B" />
                    <label class="science" >B</label>
                    <input type="radio" name="science" value="C" />
                    <label class="science" >C</label>
                    <input type="radio" name="science" value="S" />
                    <label class="science" >S</label>
                    <input type="radio" name="science" value="F" />
                   <label class="science" >F</label><br>              
       <label for="science">English   *</label>
                    <input type="radio" name="english" value="A" />
                    <label class="english" >A</label>
                    <input type="radio" name="english" value="B" />
                    <label class="english" >B</label>
                    <input type="radio" name="english" value="C" />
                    <label class="english" >C</label>
                    <input type="radio" name="english" value="S" />
                    <label class="english" >S</label>
                    <input type="radio" name="english" value="F" />
                   <label class="english" >F</label><br>                    
      <hr>
      <label for="course"><b>Course</b></label><br>
      <select name="course">
        <option value="course 1">Course 1</option>
        <option value="course 2">Course 2</option>
        <option value="course 3">Course 3</option>
        <option value="course 4">Course 4</option>

      </select>
      <br><br>
      <label for="telephone"><b>Phone Number</b></label><br>
      <input type="phonenumber" placeholder="Phone Number" name="telephone" required value="<?php echo $fname; ?>"><br>
      <label for="email"><b>Email</b></label><br>
      <input type="email" placeholder="Email" name="email" required value="<?php echo $fname; ?>"><br>
     <label for="psw1"><b>Password</b></label><br>
      <input type="password" placeholder="Password" name="psw1" required><br>
      <label for="psw2"><b>Repeat Password</b></label><br>
      <input type="password" placeholder="Repeat Password" name="psw2" required><br> 

      
      <div class="infobox"><h4>Helpful Information</h4>
                    <p>You have to fill every box inorder to submit a valued application form otherwise your registration form will be rejected without further explanation.</p>
                </div> 
      <div class="clearfix">
        <button type="submit" class="signupbtn" name="apply">Submit Application</button>
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
