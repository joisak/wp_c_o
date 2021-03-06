<?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      $image_url = $image[0];
?>
<div class="header">
  <div class="row align-middle">
    <div class="columns header-logo small-12 medium-12 large-4">
      <img id="#hero" src="<? echo $image_url; ?>" alt="">
    </div>
    <div class="columns small-12 medium-12 large-8 header-menu">
      <ul class="">
        <li><a href="#menu">Meny</a></li>
        <li><a href="#gallery">Galleri</a></li>
        <li><a href="#events">Event</a></li>
        <li><a href="#about">Styrsö</a></li>
        <li><a href="#contact">Kontakt</a></li>
        <li><a class="icon-instagram icon" href="https://www.instagram.com/obergska/"><img src="<?php echo get_template_directory_uri()?>/img/instagram.svg"></a></li>
        <li><a class="icon-facebook icon" href="https://www.facebook.com/cafeobergska/"><img src="<?php echo get_template_directory_uri()?>/img/facebook.svg"></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
<div class="column small-12 main-bg bm-40">
