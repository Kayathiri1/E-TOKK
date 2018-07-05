
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
            <h2 class="p2"><a href="registrar_account.php">Back</a></h2>

          </div>
        </div>
      </div>
      <div class="grid_8">
        <div class="pad-1">
          <h2 class="p2">Leave Application List</h2>
          <div class="block-1">
            <div class="block-1-shadow">
          </div>
        </div>
      <form style="border:1px solid #ccc" method ='POST' action="php/approve_applicantions.inc.php">
      <div class="container">
       <ul>
        <?php
        include('php/applications_list.inc.php');
        ?>
       </ul>
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
