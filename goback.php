<?php
if(array_key_exists('back', $_POST)) {
  echo "<script>window.history.back()</script>";
}
 ?>

<div class="content">
<form method="post" action="index.php" style="margin-bottom:30px; margin-right: 50rem">
      <input type="submit" name="back" class="back_button" value="back" />
    </form>
</div>
