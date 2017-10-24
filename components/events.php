<?php
  $event_heading = get_field('event_heading');
  $event_text = get_field('event_text');
  $events = get_field('events');
 ?>
<div class="events">
  <div class="row">
    <div id="events" class="column small-12 text-center tp-60 bp-40"><h2>Events</h2></div>
  </div>
  <div class="row">
    <div class="small-10 small-offset-1 medium-8 medium-offset-2">
      <h3 class="text-center bp-30"><?php echo $event_heading ?></h3>
      <span class="text-center"><?php echo $event_text; ?></span>
    </div>
  </div>
  <div class="row">
    <div class="column small-10 small-offset-1 medium-10 medium-offset-1">
    <?php foreach ($events as $event) : ?>
      <div class="small-12 medium-8 medium-offset-2 menu-item">
        <?php if($event['month']) :  ?>
          <p class="tp-20 bp-10 month"><?php echo $event['month']; ?></p>
        <?php endif; ?>
          <div class="row event-line align-bottom">
              <div class="event-name column "><?php echo $event['event_name']; ?></div>
              <div class="event-date column text-right"><?php echo $event['event_date']; ?></div>
          </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
