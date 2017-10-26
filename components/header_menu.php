<?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      $image_url = $image[0];
?>
<div class="header" v-bind:class="{ 'slide-in-menu': show }">
  <div class="row align-middle">
    <div class="columns header-logo small-12 medium-4">
      <img id="#hero" src="<? echo $image_url; ?>" alt="">
    </div>
    <div class="columns small-12 medium-8 header-menu">
      <ul class="">
        <li><a href="#menu">Meny</a></li>
        <li><a href="#gallery">Galleri</a></li>
        <li><a href="#events">Event</a></li>
        <li><a href="#about">Styrsö</a></li>
        <li><a href="#contact">Kontakt</a></li>
        <li><a href="#instagram"><i class="ion-social-instagram"></i></a></li>
        <li><a href="#facebook"><i class="ion-social-facebook"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
<div class="column small-12 main-bg bm-40">
