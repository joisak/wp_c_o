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
