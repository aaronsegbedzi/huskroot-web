var access_key = getUrlParameter('token');
var form = $("#password-form");
$(function() {
  form.submit(function(event) {
    event.preventDefault();
    var password = $('#password').val();
    var confirm_password = $('#confirm_password').val();
    if (password == confirm_password) {
      var data = $("#password-form").serialize();
      $.ajax({
        type: 'POST',
        url: REMOTE_APPLICATION_URL + '/api/v2/user.php?action=password&token=' + access_key,
        data: data,
        success: function(response) {
            swal({
              title: "Good job!", 
              text: "Password has successfully been changed.", 
              icon: "success",
              timer: 2000, 
              button: false,
              closeOnClickOutside: false     
          }).then( function(){
            window.location.href = "/account/settings?token" + "=" + access_key;
          });
        },
        error: function(status) {
          swal("Error Message","Internal Server Error","error");
        }
      });
    }else{
      swal("Oooops!","Passwords do not match. Please check again.","error");
    }
  });
});