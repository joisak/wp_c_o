var feed = new Instafeed({get: 'user', userId: '345510624', accessToken: '345510624.03a65d6.37ccfa5895a94beba7ae80d1cdd601aa', resolution: 'standard_resolution'});

feed.run();

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
    attemptSubmit: false
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
        url = 'http://localhost:8888/wp-content/themes/obergska/mailer.php';
        t.error = false;

      $.ajax({type: "POST", dataType: "json", url: url, data: formData, success: function(response) {}}).done(function(res, req) {
        t.success = true;
      }).fail(function(data) {
        console.log('wrong.....');
      });

    },
    validateForm: function(event) {
      var t = this;
      this.attemptSubmit = true;
      if (this.missingName || this.wrongNumber || this.missingMessage || this.notValidEmail)
        event.preventDefault();
      if (!this.missingName && !this.wrongNumber && !this.missingMessage && !this.notValidEmail) {
        t.sendEmail();
      }
    }
  }
});
