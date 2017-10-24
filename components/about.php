<?php
  $about_us = get_field('about_us');
  $about_us_2 = get_field('about_us_2');
  $about_img = get_field('about_img');
  $about_img_2 = get_field('about_img_2');

 ?>

<div class="about">

  <div class="row">
    <div id="about" class="small-12 text-center tp-60 bp-60"><h2>Styrsö</h2></div>
  </div>

  <div class="small-12 medium-10 medium-offset-1">


    <div class="row align-middle">

        <div class="small-12 medium-6 column about-text">
          <div class="small-12 medium-10 medium-offset-1">
            <?php echo $about_us; ?>
          </div>
        </div>
        <div class="small-12 medium-6  column about-img">
          <img class="first-img" src="<?php echo $about_img['url'];?>">
        </div>

    </div>

    <div class="row align-middle">

        <div class="small-12 medium-6 medium-order-2 column about-text">
          <div class="small-12 medium-10 medium-offset-1">
            <?php echo $about_us_2; ?>
          </div>
        </div>

        <div class="small-12 medium-6 medium-order-1 column about-img">
          <img class="second-img" src="<?php echo $about_img_2['url']; ?>">
        </div>

    </div>

  </div>
</div>
