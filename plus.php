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
      <img style="width: 50%; height: 50%" src="https://cdn11.bigcommerce.com/s-yvary2y55h/images/stencil/2560w/products/113/1877/02AP_ProductCarousel__24632.1651681811.jpg?c=1" alt="">

      <div class="text_contnet">
        <h2 style="margin-bottom: 40px">Bone Builder Pack</h2>
        <h3>Increase Bone Density</h3><br>

        <div class="temp">
        <p>Rock-based calcium can only slow bone loss. But AlgaeCal’s plant-based calcium does what others can’t — actually stops bone loss. And builds new bone!</p>

        <?php
          $url = 'https://www.algaecal.com/products/algaecal-plus/';
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