<?php
  $map = get_field('map');
  $map_heading = get_field('map_heading');
  $map_text = get_field('map_text');
  $opening_hours_text = get_field('opening_hours');

  $lat = $map['lat'];
  $lng = $map['lng'];

 ?>

<div class="contact bp-60">

  <div class="row align-middle">
    <div class="column  small-12 medium-6 column">
      <div class="column medium-12  map-text">
        <h2 class="text-center  bp-40"><?php echo $map_heading; ?></h2>
        <p><?php echo $map_text; ?></p>
      </div>
    </div>
    <div class="column small-12 medium-6 column  map">

        <div id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: <?echo $lat; ?>, lng: <? echo $lng ?>};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjEOCtSLQsEKUk7XnQ3p6G8f5jI8baaRA&callback=initMap">
        </script>
    </div>
  </div>

  <div class="row">

    <div class="small-12 medium-6 column small-order-2 medium-order-1">
      <div id="contact" class="column small-12 text-center tp-60 bp-60 "><h2>Kontakt</h2></div>
      <div class="form">
          <form  action="mailer.php"  method="post" v-bind:class="{fadeOut : success}">
            <input placeholder="Namn" type="text" name="name" v-model="form_fields.name" id="form_name" value="name" v-bind:class="{ 'warning' : attemptSubmit && missingName }" required>
            <input placeholder="E-mail" type="email" name="email"  v-model="form_fields.email" id="form_email" value="email" v-bind:class="{ 'warning' : attemptSubmit && notValidEmail }" required>
            <input placeholder="Telefonnummer" type="tel" name="phone" v-model="form_fields.phone" id="form_phone" value="phone" v-bind:class="{ 'warning' : attemptSubmit && wrongNumber }" required>
            <textarea placeholder="Ditt meddelande" name="message" id="form_message" v-model="form_fields.message" rows="8" cols="80" v-bind:class="{ 'warning' : attemptSubmit && missingMessage }"></textarea>
            <div class="message" v-if="success">
                <p>Vi hör av oss så fort vi kan!</p>
            </div>
            <div class="message" v-if="error">
                <p>Något gick fel, försök igen :)</p>
            </div>
            <div class="message" v-if="loading">
              <p>Skickar...</p>
            </div>
            <button :disabled="success" v-bind:class="{ 'disabled' : success }" class="float-right" v-on:click="validateForm()" type="button" name="button">Skicka</button>
          </form>
      </div>
    </div>

    <div class="small-12 medium-5 end column tp-60 small-order-1 medium-order-2">
      <h2 class="bp-60">Öppetider</h2>
      <div class="bp-40 opening-hours"><p><?php echo $opening_hours_text; ?></p></div>
      <h2 class="bp-60">Väder</h2>
      <!-- <div class="" id='wrapper-KKtf'><span id='h2-KKtf'><a id='url-KKtf' href="//www.vackertvader.se/styrsö">Vädret i Styrsö</a></span><div id='load-KKtf'></div><a id='url_detail-KKtf' href="//www.vackertvader.se/styrsö">Detaljerad väderprognos</a></div><script type="text/javascript" src="//widget.vackertvader.se/widgetv3/widget_request/2670996?bgcolor=ffffff&border=c4c3c3&days=5&key=-KKtf&lang=&maxtemp=no&size=x215&textcolor=363636&unit=C&wind=yes" charset="utf-8"></script> -->
    </div>
  </div>
  <div class="row">

  </div>


  </div>
</div>
