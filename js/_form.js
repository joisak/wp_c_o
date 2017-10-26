
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
