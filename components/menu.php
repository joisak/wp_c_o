<?php
  $menu_items = get_field('menu');
 ?>

<div class="course-menu bp-60">
  <div class="row">
    <div class="small-12 text-center tp-60 bp-20"><h2>Meny</h2></div>
  </div>
  <div class="column small-12">
  <?php foreach ($menu_items as $menu_item) : ?>
    <div class="small-12 medium-6 medium-offset-3 menu-item">
      <?php if($menu_item['course_label']) :  ?>
        <h3 class="tp-20 bp-10"><?php echo $menu_item['course_label']; ?></h3>
      <?php endif; ?>
        <div class="row">
          <div class="column shrink"><?php echo $menu_item['course']; ?></div>
          <div class="menu-dots column"></div>
          <div class="price column shrink  text-right"><?php echo $menu_item['price']; ?></div>
        </div>
    </div>
  <?php endforeach; ?>
</div>
</div>
