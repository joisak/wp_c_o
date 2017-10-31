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
    <div class="small-10 small-offset-1 medium-8 medium-offset-2 large-6 large-offset-3 bp-40">
      <h3 class="text-center bp-20"><?php echo $event_heading ?></h3>
      <span class=""><?php echo $event_text; ?></span>
    </div>
  </div>
  <div class="row">
    <?php foreach ($events as $event) : ?>
      <div class="small-10 small-offset-1 medium-8 medium-offset-2 large-6 large-offset-3  menu-item">
        <?php if($event['month']) :  ?>
          <h4 class="tp-20 bp-10 month"><?php echo $event['month']; ?></h4>
        <?php endif; ?>
          <div class="row event-line align-bottom">
              <div class="event-name p-text column "><?php echo $event['event_name']; ?></div>
              <div class="event-date p-text column text-right"><?php echo $event['event_date']; ?></div>
          </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="column small-12">
      <div class="text-center fb-page " data-href="https://www.facebook.com/pages/Caf%C3%A9-%C3%96bergska/204184162936752?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Caf%C3%A9-%C3%96bergska/204184162936752?fref=ts"><a href="https://www.facebook.com/pages/Caf%C3%A9-%C3%96bergska/204184162936752?fref=ts">Café Öbergska</a></blockquote></div></div>
  </div>
</div>
