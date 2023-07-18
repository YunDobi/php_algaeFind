<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <div class="content">
    <?php
      include("goback.php")
    ?>
      <div class="item_content">
      <img style="width: 50%; height: 50%" src="https://cdn11.bigcommerce.com/s-yvary2y55h/images/stencil/2560w/products/115/1886/02A_ProductCarousel__20743.1651682173.jpg?c=1" alt="">

      <div class="text_contnet">
        <h2 style="margin-bottom: 40px">AlgaeCal Bone Loss</h2>
        <h3>Stop Bone Loss</h3><br>

        <div class="temp">
        <p>Rock-based calcium can only slow bone loss. AlgaeCal’s plant-based calcium, together with vitamin D, does what others can’t — actually stop bone loss.</p>

        <?php
          $url = 'https://www.algaecal.com/products/algaecal-basic/';
          echo ("<a href='$url'>
            <button class='forward_button'>Click Me</button>
          </a>")
        ?>

        </div>
        
      </div>
    </div>
  </div>
</body>
</html>