<?php
  $map = get_field('map');
  $lat = $map['lat'];
  $lng = $map['lng'];
 ?>

<div class="contact">
  <div class="row">
    <div class="small-12 medium-6 columns">
      <div class="form">

          <form  action="mailer.php"  method="post" v-bind:class="{fadeOut : success}">
            <input type="text" name="name" v-model="form_fields.name" id="form_name" value="name" v-bind:class="{ 'warning' : attemptSubmit && missingName }" required>
            <input type="email" name="email"  v-model="form_fields.email" id="form_email" value="email" v-bind:class="{ 'warning' : attemptSubmit && notValidEmail }" required>
            <input type="tel" name="phone" v-model="form_fields.phone" id="form_phone" value="phone" v-bind:class="{ 'warning' : attemptSubmit && wrongNumber }" required>
            <textarea name="message" id="form_message" v-model="form_fields.message" rows="8" cols="80" v-bind:class="{ 'warning' : attemptSubmit && missingMessage }"></textarea>
            <div class="message" v-if="success">
                <p>Vi hör av oss så fort vi kan!</p>
            </div>
            <div class="message" v-if="error">
                <p>Något gick fel, försök igen :)</p>
            </div>
            <!-- <button type="button" name="" value="Send" v-on:click="sendEmail()">Skicka</button> -->
            <button v-on:click="validateForm()" type="button" name="button">Skicka</button>
          </form>
      </div>

    </div>
    <div class="small-12 medium-6 columns">
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
</div>
