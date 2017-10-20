<?php
  $menu_items = get_field('menu');
 ?>

<div class="course-menu">
  <div class="row">
    <div class="small-12 text-center tp-60 bp-60">Meny</div>
  </div>
  <div class="column small-12">
  <?php foreach ($menu_items as $menu_item) : ?>
    <div class="small-12 medium-6 medium-offset-3">
      <?php if($menu_item['course_label']) :  ?>
        <h3 class="tp-10 bp-20"><?php echo $menu_item['course_label']; ?></h3>
      <?php endif; ?>
        <p class=""><?php echo $menu_item['course']; ?>
        <span class="price float-right"><?php echo $menu_item['price']; ?></span></p>
    </div>
  <?php endforeach; ?>
  </div>
</div>
