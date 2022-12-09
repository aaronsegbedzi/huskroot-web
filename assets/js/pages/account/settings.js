  var access_key = getUrlParameter('token');
  var form = $("#personal-form");
  $(function () {
    $.getJSON(REMOTE_APPLICATION_URL + '/api/v2/user.php', {
      'token':access_key }
              , function(data) {
      $('#first_name').val(data['first_name']);
      $('#last_name').val(data['last_name']);
      $('#email').val(data['email']);
      $('#phone').val(data['phone']);
    }
             );
    form.submit(function(event) {
      event.preventDefault();
      var data = form.serialize();
      $.ajax({
        type: 'POST',
        url: REMOTE_APPLICATION_URL + '/api/v2/user.php?token=' + access_key,
        data: data,
        success: function(response) {
          swal("Good job!", "Personal information has successfully been updated.", "success");
        },
        error: function(status) {
          swal("Error Message","Internal Server Error","error");
        }
      }
            );
    }
               );
  }
   );