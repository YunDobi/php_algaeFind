<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
      include("goback.php")
    ?>
<div class="content">
    <div class="item_content">
      <img style="width: 50%; height: 50%" src="https://cdn11.bigcommerce.com/s-yvary2y55h/images/stencil/2560w/products/114/1881/02SB_ProductCarousel__12038.1651682064.jpg?c=1" alt="">

      <div class="text_contnet">
        <h2 style="margin-bottom: 40px">Triple your bone density increases</h2>
        <h3>Increase Bone Density</h3><br>

        <div class="text_and_link">
        <p>Combine with AlgaeCal Plus to triple your bone density increases. Strontium is the only material on earth— natural or otherwise— shown to stimulate bone-building cells while slowing down overactive bone-resorbing cells.
        </p>

        <?php
          $url = "https://www.algaecal.com/products/strontium-boost/";
          echo ("<a href='$url'>
            <button class='forward_button'>Click Me</button>
          </a>")
        ?>
        </div>
      </div>
    <div>
  </div>
</body>
</html>