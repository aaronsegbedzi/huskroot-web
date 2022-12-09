var REMOTE_APPLICATION_URL = 'http://api.leefranco.com';
// alert(response[0]);
$(function() {
  var form = $("#login-form");
  form.submit(function(event) {
    event.preventDefault();
    var data = $("#login-form").serialize();
    $.ajax({
      type: 'POST',
      url: REMOTE_APPLICATION_URL + '/api/v2/auth.php',
      data: data,
      statusCode: {
        401: function () { swal("Login Failure", "Username or password is incorrect. Please try again.", "error"); }
      },
      success: function(response) {
        // Show the success notification.
        swal({
            title: "Welcome", 
            text: "Successfully logged in. Redirecting to dashboard...", 
            icon: "success",
            timer: 3000, 
            button: false,
            closeOnClickOutside: false     
        }).then( function(){
          $.cookie("default", JSON.stringify(response), { path: '/', expires: 12 });
          window.location.href = "/explore?token" + "=" + response.token;
        });

      },
      error: function(status) {
        if (status !== 401) {
          swal("Login Failure", "", "error");
        }
      }
    });
  });
});

$(function() {
  var form = $("#register-form");
  form.submit(function(event) {
    event.preventDefault();
      var pass1 = $('#reg_password').val();
      var pass2 = $('#reg_confirm_password').val();
    if ($.trim(pass1) == $.trim(pass2)) {
      var data = $("#register-form").serialize();
      $.ajax({
        type: 'POST',
        url: REMOTE_APPLICATION_URL + '/api/v2/user.php?action=register',
        data: data,
        success: function(response) {
          swal("Welcome to Husk Root.","Congratulations, you have successfully been registered. Please log in to begin.","success");
        },
        error: function(status){
          swal("Error","Internal services are down. Please try again later.","error");
        }
      });
    }else{
      swal("Ooops!","Password do not match. Please try again.","error");
    }
  });
});

$(function() {
  var form = $("#recovery-form");
  form.submit(function(event) {
    event.preventDefault();
    var data = $("#recovery-form").serialize();
    $.ajax({
      type: 'POST',
      url: REMOTE_APPLICATION_URL + '/api/v2/user.php?action=forgot_password',
      data: data,
      statusCode: {
        401: function () { swal("Recovery Unauthorized", "Security question or answer is incorrect. Please try again.", "error"); },
        404: function () { swal("Opps!", "You do not exist in our database. Register?", "error"); }
      },
      success: function(response) {
        swal("Password Recovered","Please copy and paste this password: " + response + " in a safe place. Use this in you next login. Please dont forget to change your password.","success");
      }
    });
  });
});