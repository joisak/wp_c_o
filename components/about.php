<?php
  $about_us = get_field('about_us');
  $about_us_2 = get_field('about_us_2');
  $about_img = get_field('about_img');
  $about_img_2 = get_field('about_img_2');

 ?>

<div class="about">
  <div class="row">
    <div class="small-12 text-center tp-60 bp-60">Styrsö</div>
  </div>
  <div class="row align-middle">
    <div class="small-12 medium-6 column">
      <?php echo $about_us; ?>
    </div>
    <div class="small-12 medium-6 columns">
      <img src="<?php echo $about_img['url'];?>">
    </div>

    <div class="small-12 medium-6 medium-order-2 columns">
      <?php echo $about_us_2; ?>
    </div>

    <div class="small-12 medium-6 medium-order-1 columns">
      <img src="<?php echo $about_img_2['url']; ?>">
    </div>

  </div>
</div>
