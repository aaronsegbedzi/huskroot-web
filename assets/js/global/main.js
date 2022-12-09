// Define API url.
var REMOTE_APPLICATION_URL = 'http://api.leefranco.com';

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function logout() {
  var access_key = getUrlParameter('token');
  $.ajax({
    type: 'DELETE',
    url: REMOTE_APPLICATION_URL + '/api/v2/auth.php?token=' + access_key,
    success: function(response) {
      $.removeCookie("default");
      swal({
          title: "Goodbye!", 
          text: "Successfully logged out. Redirecting to login page...", 
          icon: "success",
          timer: 2000, 
          button: false,
          closeOnClickOutside: false     
      }).then( function(){
        window.location.href = "/";
      });
    }
  });
}