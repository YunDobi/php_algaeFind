<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <body>
    <div class= "leftBox">
      <h2>Algea Finder</h2>
      <h1>01. Choose what you want to increase</h1>
      <p>© Copyright 2023 AlgaeCal.</p>
    </div>

  <div class="contentBox">

    <?php
          if(array_key_exists('button1', $_POST)) {
            include("loss.php");
          }
          else if(array_key_exists('button2', $_POST)) {
            include("plus.php");
          }
          else if(array_key_exists('button3', $_POST)) {
            include("boost.php");
          } else {
            echo "<h1>Please select your interest</h1> <br>";
            include("home.php");
          }
      ?>
  </div>

  
</body>
  
</html>