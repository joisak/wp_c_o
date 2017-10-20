<?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      $image_url = $image[0];
?>
<div class="header">
  <div class="row align-middle">
    <div class="columns header-logo small-12 medium-4">
      <img src="<? echo $image_url; ?>" alt="">
    </div>
    <div class="columns small-12 medium-8 header-menu">
      <ul class="">
        <li><a href="">Meny</a></li>
        <li><a href="">Galleri</a></li>
        <li><a href="">Event</a></li>
        <li><a href="">Styrsö</a></li>
        <li><a href="">Kontakt</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="column small-12">
