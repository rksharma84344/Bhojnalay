<?php 

/* Template Name: Homepage
*/
get_header();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bhojnalay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner slider-inner">
    <div class="carousel-item slider-items active">
      <img src="<?php echo get_template_directory_uri();?>/Assets/images/banner2.jpg" alt="Burger">
    </div>
    <div class="carousel-item slider-items">
      <img src="<?php echo get_template_directory_uri();?>/Assets/images/banner3.jpg" alt="Burger">
    </div>
    <div class="carousel-item slider-items">
      <img src="<?php echo get_template_directory_uri();?>/Assets/images/bannerimage.jpg" alt="Burger">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>
