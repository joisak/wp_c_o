<?php /* Template Name: Main */ ?>
<?php get_header(); ?>
<?php
  setup_postdata( $post );
  $attachment_id = get_post_thumbnail_id( $post->ID );
?>
  <?php get_template_part( 'components/hero'); ?>
  <?php get_template_part( 'components/menu'); ?>
  <?php get_template_part( 'components/gallery'); ?>
  <?php get_template_part( 'components/events'); ?>
  <?php get_template_part( 'components/about'); ?>
  <?php get_template_part( 'components/contact'); ?>

<?php get_footer(); ?>
