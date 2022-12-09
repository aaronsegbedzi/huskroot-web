var access_key = getUrlParameter('token');
var id = getUrlParameter('id');

$(function() {
  $.ajax({
    type: 'GET',
    url: REMOTE_APPLICATION_URL + '/api/v2/product.php',
    data: {'token':access_key, 'id':id},
    success: function(response) {
      // Set farmer name.
      $('#full_name').text(response.first_name + " " + response.last_name);

      // Set product name.
      $('#name').text(response.name);

      // Set product description.
      $('#description').text(response.description);

      // Set product published date.
      $('#created_at').text(response.created_at);

      // Set product image src.
      $( "<img/>", {
          "class": "lazy hover-effect-img",
          "src": REMOTE_APPLICATION_URL + "/assets/img/products/" + response.peopleid + "/" + response.id + ".jpg",
          "width": "600"
          }).appendTo( "#product" );

      $( "<img/>", {
          "class": "",
          "src": REMOTE_APPLICATION_URL + "/assets/img/farmers/" + response.peopleid + "/profile.jpg"
          }).appendTo( "#farmer-profile" );

      // Set product audio.
      $("<audio></audio>").attr({
          'src': REMOTE_APPLICATION_URL + '/assets/audio/products/' + response.peopleid + '/' + response.id + '.wav',
          'controls': 'controls',
          'type': 'audio/wav'
      }).appendTo("#audio");

      // Set product video.
      $("<video></video>").attr({
          'src': REMOTE_APPLICATION_URL + '/assets/video/products/' + response.peopleid + '/' + response.id + '.mp4',
          'controls': 'controls',
          'width': '100%',
          'height': '240'
      }).appendTo("#video");

      // Set product price.
      $('#price').html("<i class='fa fa-tag'></i> " + response.currency + " " + response.price + " / " + response.unit.toUpperCase());

    }
  });
});

$(function() {
  var button = $('#btn-contact');
  button.click(function(event) {
    event.preventDefault();
      $.ajax({
        type: 'GET',
        url: REMOTE_APPLICATION_URL + '/api/v2/product.php',
        data: {'token':access_key, 'id':id},
        success: function(response) {
          swal("Mobile: " + response.phone, "", "info");
        }
      });
  });
});

$(function() {
  var button_email = $('#btn-email');
  button_email.click(function(event) {
    event.preventDefault();
      $.ajax({
        type: 'GET',
        url: REMOTE_APPLICATION_URL + '/api/v2/product.php',
        data: {'token':access_key, 'id':id},
        success: function(response) {
          swal("Email: " + response.email, "", "info");
        }
      });
  });
});

function initMap() {
   $.ajax({
    type: 'GET',
    url: REMOTE_APPLICATION_URL + '/api/v2/product.php',
    data: {'token':access_key, 'id':id},
    success: function(response) {
      var myLatLng = {lat: parseFloat(response.lat), lng: parseFloat(response.lng)};

      // Create a map object and specify the DOM element for display.
      var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 16
      });

      // Create a marker and set its position.
      var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'Product Location.'
      });
    }
  });     
} 