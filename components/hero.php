<div class="hero">
  <div class="row">
    <div class="columns medium-12 text-center tp-60 bp-20"><h1 class="uppercase"><?php echo the_title(); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="columns small-12 medium-6 medium-offset-3 ">
      <span><?php echo the_content(); ?></span>
    </div>
  </div>
  <div class="row">
    <div class="columns small-12 medium-12">
      <div class="hero-img" style="background-image:url('' ?>')">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>
  </div>
</div>
