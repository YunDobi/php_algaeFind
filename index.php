<!DOCTYPE html>
<html>
      
<?php
include("header.php")
?>
 <h1 style="color:green;">
      AlgeaFind
  </h1>
  
<body style="text-align:center;">
      
    <?php
        if(array_key_exists('button1', $_POST)) {
          include("first.html");
        }
        else if(array_key_exists('button2', $_POST)) {
          include("second.html");
        }
    ?>
  
    <form method="post" action="index.php">
        <input type="submit" name="button1" class="button" value="Bone Loss" />
          
        <input type="submit" name="button2" class="button" value="Bone healing" />

        <input type="submit" name="button3" class="button" value="Bone boost" />
    </form>
</body>
  
</html>