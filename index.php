<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <body>
    <div class= "leftBox">
      <h2>Algea Finder</h2>
      <h3>01. Choose what you want to increase</h3>
    </div>

  <div class="contentBox">
    <form method="post" action="index.php" class="buttonList">
      <input type="submit" name="button1" class="button" value="Bone Loss" />
          
        <input type="submit" name="button2" class="button" value="Bone healing" />

        <input type="submit" name="button3" class="button" value="Bone boost" />
    </form>

    <?php
          if(array_key_exists('button1', $_POST)) {
            include("first.php");
          }
          else if(array_key_exists('button2', $_POST)) {
            include("second.php");
          }
          else if(array_key_exists('button3', $_POST)) {
            include("third.php");
          } else {
            echo "<h1>Welcome and choose your health!</h1> <br>";
          }
      ?>
  </div>

  
</body>
  
</html>