$(function () {

var access_key = getUrlParameter('token');
var form = $("#product-form");
var map, infoWindow;
var marker = false;

$.getJSON(REMOTE_APPLICATION_URL + '/api/v2/subsubcategory.php', { 'token':access_key }, function(data) {                     
    var options = [];
    $.each(data, function(key, val) {
      options.push("<option value='" + val.id + "'>" + val.name + "</option>");
    });
    $( "<select/>", {
        "id": "subsubcategory_id",
        "name": "subsubcategory_id",
        "style": 'width: 100%',
        html: options.join( "" )
    }).appendTo( "#subsubcategory" );

    $('#subsubcategory_id').select2();
});

form.submit(function(event) {
    event.preventDefault();
    var data = new FormData(this);
    $.ajax({
      type: 'POST',
      url: REMOTE_APPLICATION_URL + '/api/v2/product.php?token=' + access_key,
      data: data,
      async: false,
      cache: false,
      contentType: false,
      enctype: 'multipart/form-data',
      processData: false,
      statusCode: {
        413: function () { swal("Ooops!", "The file size of your uploads are above the maximum requirement.", "error"); },
        415: function () { swal("Ooops!", "The file types in your upload contains an unsupported media type.", "error"); }
      },
      success: function(response) {
        // Show the success notification.
        swal({
            title: "Product Added!", 
            text: "Successfully uploaded your product. Redirecting you to view the product...", 
            icon: "success",
            timer: 2000, 
            button: false,
            closeOnClickOutside: false     
        }).then( function(){
          window.location.href = "/product/view?id=" + response.inserted_id + "&token=" + access_key;
        });
      },
      error: function(status) {
        if (status !== 413 || status !== 415) {
          swal("Ooops!", "Product failed to upload to Husk Root. Please try again later.", "error");
        }
      }
    });
});


function initMap() {

    var centerOfMap = new google.maps.LatLng(5.596617, -0.223794);

    map = new google.maps.Map(document.getElementById('map'), {
      center: centerOfMap, //Set center.
      zoom: 7 //The zoom value.
    });
  
    infoWindow = new google.maps.InfoWindow;

    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        infoWindow.open(map);
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      handleLocationError(false, infoWindow, map.getCenter());
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }


    google.maps.event.addListener(map, 'click', function(event) {                
        var clickedLocation = event.latLng;
        if(marker === false){

            marker = new google.maps.Marker({
                position: clickedLocation,
                map: map,
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(event){
                markerLocation();
            });
        } else{
            marker.setPosition(clickedLocation);
        }
        markerLocation();
    });
}

function markerLocation(){
    var currentLocation = marker.getPosition();

    document.getElementById('lat').value = currentLocation.lat();
    document.getElementById('lng').value = currentLocation.lng();
}

google.maps.event.addDomListener(window, 'load', initMap);
});