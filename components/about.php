<?php
  $about_us = get_field('about_us');
  $about_us_2 = get_field('about_us_2');
  $about_img = get_field('about_img');
  $about_img_2 = get_field('about_img_2');

 ?>

<div class="about">
  <div class="row">
    <div class="small-12 text-center tp-60 bp-60"><h2>Styrsö</h2></div>
 </div>
  <div class="row align-middle">
    <div class="small-12 medium-6 columns lp-60 rp-20 about-text">
      <?php echo $about_us; ?>
    </div>
    <div class="small-12 medium-6 columns">
      <img class="first-img" src="<?php echo $about_img['url'];?>">
    </div>

    <div class="small-12 medium-6 medium-order-2 columns rp-60 lp-20 about-text">
      <?php  echo $about_us_2; ?>
    </div>

    <div class="small-12 medium-6 medium-order-1 columns">
      <img class="second-img" src="<?php echo $about_img_2['url']; ?>">
    </div>

  </div>
</div>
