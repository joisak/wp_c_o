<?php
  $map = get_field('map');
  $lat = $map['lat'];
  $lng = $map['lng'];
 ?>

<div class="contact">
  <div class="row">
    <div class="small-12 medium-6 columns">
      <div class="form">
          <form  action="mailer.php"  method="post">
            <input type="text" name="name" v-model="form_fields.name" id="form_name" value="name" required>
            <input type="text" name="lname" v-model="form_fields.lname" id="form_lname" value="lname" required>
            <input type="email" name="email" v-if="" v-model="form_fields.email" id="form_email" value="email" required>
            <input type="text" name="address" v-model="form_fields.address" id="form_address" value="address" required>
            <textarea name="message" v-if="form_fields.message" id="form_message" v-model="form_fields.message" rows="8" cols="80"></textarea>
            <div class="message" v-if="success">
                <p>Nice!</p>
            </div>
            <div class="message" v-if="error">
                <p>Somethings wrong...</p>
            </div>
            <input type="button" name="" :disabled="false" value="Send" v-on:click="sendEmail()">


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
