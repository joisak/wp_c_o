var feed = new Instafeed({get: 'user', userId: '345510624', accessToken: '345510624.03a65d6.37ccfa5895a94beba7ae80d1cdd601aa', resolution: 'standard_resolution'});

feed.run();



// var header = new Vue({
//   el: '.header',
//   data: {
//     show: false
//   },
//   mounted: function() {
//     var t = this;
//     setTimeout(function(){
//       t.show = true;
//     },800);
//   }
// });



//Mail validation and send mail-data to mail.php
var form = new Vue({
  el: '.form',
  data: {
    show: false,
    form_fields: {
      name: '',
      email: '',
      phone: '',
      message: ''
    },
    error: false,
    success: false,
    attemptSubmit: false,
    loading: false,
  },
  computed: {
    missingName: function() {
      if (this.form_fields.name === '') {
        return true;
        this.error = true;
      }else {
        this.error = false;
      }
    },
    missingMessage: function() {
      if (this.form_fields.message === '') {
        return true;
        this.error = true;
      } else {
        this.error = false;
      }
    },
    wrongNumber: function() {
      if (isNaN(this.form_fields.phone) || this.form_fields.phone === '') {
        this.error = true;
        return true;
      }else {
        this.error = false;
      }
    },
    notValidEmail: function() {
      var regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      if (!this.form_fields.email.match(regex)) {
        this.error = true;
        return true;
      } else {
        this.error = false;
      }
    }
  },
  methods: {
    sendEmail: function() {
      var t = this,
        formData = $('form').serialize(),
        url = 'http://joakimisaksson.com/wp/wordpress/wp-content/themes/obergska/mailer.php';
        t.error = false;

      $.ajax({type: "POST", dataType: "json", url: url, data: formData, success: function(response) {}}).done(function(res, req) {
        t.loading = false;
        t.success = true;
      }).fail(function(data) {
        console.log('wrong.....');
        t.error = true;
        t.loading = false;
      });

    },
    validateForm: function(event) {
      var t = this;
      this.attemptSubmit = true;
      if (this.missingName || this.wrongNumber || this.missingMessage || this.notValidEmail)
        event.preventDefault();
      if (!this.missingName && !this.wrongNumber && !this.missingMessage && !this.notValidEmail) {
        t.loading = true;
        t.sendEmail();
      }
    }
  }
});


//Smooth menu

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // Adding current class
    if($('.header-menu a').hasClass('current')) {
      $('.header-menu a').removeClass('current');
    }
    $(this).addClass('current');

    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      console.log(target);

      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        //Sets the header perfecty on screen after auto scroll
        var offset = 110;
        $('html, body').animate({
          scrollTop: target.offset().top - offset
        }, 1000);
      }
    }
  });


  (function($) {

  /*
  *  new_map
  *
  *  This function will render a Google Map onto the selected jQuery element
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$el (jQuery element)
  *  @return	n/a
  */

  function new_map( $el ) {

  	// var
  	var $markers = $el.find('.marker');


  	// vars
  	var args = {
  		zoom		: 16,
  		center		: new google.maps.LatLng(0, 0),
  		mapTypeId	: google.maps.MapTypeId.ROADMAP
  	};


  	// create map
  	var map = new google.maps.Map( $el[0], args);


  	// add a markers reference
  	map.markers = [];


  	// add markers
  	$markers.each(function(){

      	add_marker( $(this), map );

  	});


  	// center map
  	center_map( map );


  	// return
  	return map;

  }

  /*
  *  add_marker
  *
  *  This function will add a marker to the selected Google Map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$marker (jQuery element)
  *  @param	map (Google Map object)
  *  @return	n/a
  */

  function add_marker( $marker, map ) {

  	// var
  	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  	// create marker
  	var marker = new google.maps.Marker({
  		position	: latlng,
  		map			: map
  	});

  	// add to array
  	map.markers.push( marker );

  	// if marker contains HTML, add it to an infoWindow
  	if( $marker.html() )
  	{
  		// create info window
  		var infowindow = new google.maps.InfoWindow({
  			content		: $marker.html()
  		});

  		// show info window when marker is clicked
  		google.maps.event.addListener(marker, 'click', function() {

  			infowindow.open( map, marker );

  		});
  	}

  }

  /*
  *  center_map
  *
  *  This function will center the map, showing all markers attached to this map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	map (Google Map object)
  *  @return	n/a
  */

  function center_map( map ) {

  	// vars
  	var bounds = new google.maps.LatLngBounds();

  	// loop through all markers and create bounds
  	$.each( map.markers, function( i, marker ){

  		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

  		bounds.extend( latlng );

  	});

  	// only 1 marker?
  	if( map.markers.length == 1 )
  	{
  		// set center of map
  	    map.setCenter( bounds.getCenter() );
  	    map.setZoom( 16 );
  	}
  	else
  	{
  		// fit to bounds
  		map.fitBounds( bounds );
  	}

  }

  /*
  *  document ready
  *
  *  This function will render each map when the document is ready (page has loaded)
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	5.0.0
  *
  *  @param	n/a
  *  @return	n/a
  */
  // global var
  var map = null;

  $(document).ready(function(){

  	$('.acf-map').each(function(){

  		// create map
  		map = new_map( $(this) );

  	});

  });

  })(jQuery);
