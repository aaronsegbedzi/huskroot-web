$(function () {
  var access_key = getUrlParameter('token');
  var id = getUrlParameter('id');
  var form = $("#product-form");
  var map;
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
  $.getJSON(REMOTE_APPLICATION_URL + '/api/v2/product.php', { 'token':access_key, 'id':id }, function(data) {                     
    $('#name').val(data['name']);
    $('#price').val(data['price']);
    $('#currency').val(data['currency']);
    $('#unit').val(data['unit']);
    $('#location').val(data['location']);
    $('#description').val(data['description']);
    $('#lat').val(data['lat']);
    $('#lng').val(data['lng']);
    $("#subsubcategory_id").val(data['subsubCategoryid']).trigger("change");
    function initMap() {
      var centerOfMap = new google.maps.LatLng(parseFloat(data['lat']), parseFloat(data['lng']));
      map = new google.maps.Map(document.getElementById('map'), {
        center: centerOfMap,
        zoom: 12
      });
      marker = new google.maps.Marker({
        position: centerOfMap,
        map: map,
        title: 'Your current product location.',
        draggable: true
      });
      google.maps.event.addListener(marker, 'dragend', function(event){
        markerLocation();
      });
      google.maps.event.addListener(map, 'click', function(event) {                
          var clickedLocation = event.latLng;
          if(marker === false){

              marker = new google.maps.Marker({
                  position: clickedLocation,
                  map: map,
                  title: 'Your New Product Location.'
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
  form.submit(function(event) {
    event.preventDefault();
    var data = new FormData(this);
    $.ajax({
      type: 'POST',
      url: REMOTE_APPLICATION_URL + '/api/v2/product.php?id=' + id + '&update=true&token=' + access_key,
      data: data,
      async: false,
      cache: false,
      contentType: false,
      enctype: 'multipart/form-data',
      processData: false,
      statusCode: {
        413: function () { swal("Ooops!", "The file size of your upload is above the requirements. Please note Audio File Size: 1MB, Video File Size: 1MB and Image File Size: 500KB", "error"); },
        415: function () { swal("Ooops!", "The file type of your upload has an unsupported media type. Please note Audio File Type: mp3 only, Video File Type: mp4 only and Image File Size: jpg only.", "error"); }
      },
      success: function(response) {
        // Show the success notification.
        swal({
            title: "Product Updated!", 
            text: "Successfully updated your product. Redirecting you to view the product...", 
            icon: "success",
            timer: 2000, 
            button: false,
            closeOnClickOutside: false     
        }).then( function(){
          window.location.href = "/product/view?id=" + id + "&token=" + access_key;
        });
      },
      error: function(status) {
        if (status !== 413 || status !== 415) {
          swal("Ooops!", "Product failed to updated to Husk Root. Please try again later.", "error");
        }
      }
    });
  });
});