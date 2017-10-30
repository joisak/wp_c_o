
  </div>
</div>
<?php $address = get_field('address'); ?>
<div class="footer tp-20 bp-20">
  <div class="row align-middle">
    <div class="small-12 medium-4 column text-left address">
      <address><?php echo $address['company_name']; ?></address>
      <address><?php echo $address['street_name']; ?></address>
      <address><?php echo substr($address['postal_number'],0,3).' '.substr($address['postal_number'],3,5);?> <?php echo $address['city']; ?></address>
    </div>
    <div class="tp-20 bp-20 small-12 medium-4 column footer-logo text-center">
      <h2><?php echo get_bloginfo(); ?></h2>
    </div>
    <div class="small-12 medium-4 column text-right share-icon">
      <div class="fb-share-button" data-href="http://www.obergska.se/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.obergska.se%2F&amp;src=sdkpreparse">Dela</a></div>
    </div>

</div>
<?php wp_footer(); ?>
</body>
<script  type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/all.js" async defer></script>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjEOCtSLQsEKUk7XnQ3p6G8f5jI8baaRA" async defer></script>
<!-- end Google Maps -->
</html>
