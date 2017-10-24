<div class="hero">
  <div class="row">
    <div id="hero" class="columns medium-12 text-center tp-60 bp-20"><h1 class="uppercase"><?php echo the_title(); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="columns small-10 small-offset-1 medium-6 medium-offset-3 ">
      <?php echo the_content(); ?>
    </div>
  </div>
  <div class="row">
    <div class="small-12">
      <div class="hero-img text-center">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>
  </div>
</div>
