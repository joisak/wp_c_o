<div class="hero">
  <div class="row">
    <div class="columns medium-12 text-center columns"><?php echo the_title(); ?>
    </div>
  </div>
  <div class="row">
    <div class=" columns medium-4 medium-offset-4">
      <?php echo the_content(); ?>
      <?php the_post_thumbnail();  ?>
    </div>
  </div>
</div>
