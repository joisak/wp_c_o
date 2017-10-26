
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
      <!-- <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.obergska.se%2F&layout=button_count&size=small&mobile_iframe=true&appId=387998728074385&width=81&height=20" width="81" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
    </div>

</div>
<?php wp_footer(); ?>
</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/instafeed.js" async></script>
<script  type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/all.js" async></script>
</html>
