var feed = new Instafeed({
        get: 'user',
        userId: '345510624',
        accessToken: '345510624.03a65d6.37ccfa5895a94beba7ae80d1cdd601aa',
        resolution: 'standard_resolution'
});

feed.run();


var form = new Vue({
  el : '.form',
  data : {
    show : false,
    form_fields : {
      name : 'joakim',
      lname : 'isaksson',
      email : 'joakim@isaksson.se',
      address  : 'marklandsgatan 57',
      message : 'Ni är så himla bra!'
    },
    error : false,
    success : false,
    loading : ''
  },
  methods : {
    sendEmail() {
      // var formData = $('form').serialize();
      // $.ajax({
      //   type: 'POST',
      //   url: 'http://localhost:8888/wp-content/themes/obergska/mailer.html',
      //   data: formData
      // })
      var httpRequest,
          t = this,
          name = $('#form_name').val(),
          lname = $('#form_lname').val(),
          email = $('#form_email').val(),
          address = $('#form_address').val();
          message = $('#form_message').val();

          dataString = 'name=' + name + '&lname=' + lname + '&email=' + email + '&address=' + address + '&message=' + message;

          var data = {
            name : $('#form_name').val(),
            lname : $('#form_lname').val(),
            email : $('#form_email').val(),
            address : $('#form_address').val(),
            message : $('#form_message').val()
          }

          var formData = $('form').serialize();

          var url = 'http://localhost:8888/wp-content/themes/obergska/mailer.php';

      // var makeRequest = function() {
      //   httpRequest = new XMLHttpRequest();
      //
      //
      //   if (!httpRequest) {
      //     alert('No new instance of requests...');
      //   }
      //
      //   httpRequest.onreadystatechange = alertThatShit;
      //   httpRequest.open('POST', 'http://localhost:8888/wp-content/themes/obergska/mailer.php');
      //   httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      //   httpRequest.send(formData);
      //
      // }();


          $.ajax({
            type : "POST",
            dataType: "json",
            url : url,
            data : formData,
            success : function (response) {

            }
        }).done(function (res, req) {
          t.success = true;
        }).fail(function (data) {
          console.log('wrong.....')
          console.log();
        });

  //       $.post(url, function() {
  //         alert('success')
  //         this.working = true;
  //       }).done(function() {
  //   alert( "second success" );
  // })
  // .fail(function() {
  //   alert( "error" );
  // })
  // .always(function() {
  //   alert( "finished" );
  // });


      function alertThatShit() {
      if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
          alert(httpRequest.responseText);
          t.working = true;
        } else {
          alert('There was a problem with the request.');
        }
      }
    }
    }
  }
});
