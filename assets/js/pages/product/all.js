var access_key = getUrlParameter('token');
var subsubcategory_id = getUrlParameter('subsubcategory_id');
$(function() {
  $.ajax({
    type: 'GET',
    url: REMOTE_APPLICATION_URL + '/api/v2/product.php',
    data: {'token':access_key, 'subsubcategory_id':subsubcategory_id},
    success: function(response) {
      var rows = [];
      $.each(response, function(key, val) {
        rows.push(
          "<tr>"
            + "<td class='text-center align-middle'>" + val.id + "</td>"
            + "<td class='text-center align-middle'><img src='" + REMOTE_APPLICATION_URL + "/assets/img/products/" + val.peopleid + "/" + val.id + ".jpg' width='100px' /></td>"
            + "<td class='text-center align-middle large-text'>" + val.name + "</td>"
            + "<td class='text-center align-middle large-text'>" + val.first_name + " " + val.last_name + "</td>"
            + "<td class='text-center align-middle'><span class='label bg-brown text-white larger-text'>" + val.currency + " " + val.price + " / " + val.unit.toUpperCase() + "</span></td>"
            + "<td class='text-center align-middle large-text'>" + val.location + "</td>"
            + "<td class='text-center align-middle large-text'>" + val.created_at + "</td>"
            + "<td class='text-center align-middle'><a href='/product/view?id=" + val.id + "&token=" + access_key + "' class='btn btn-block btn-primary btn-cons'><i class='fa fa-eye'></i>&nbsp;View</a></td>"
          + "</tr>"
        );
      });
      $( "<tbody/>", {
          html: rows.join( "" )
      }).appendTo( "#productTable" );

      $('#productTable').DataTable({
        responsive: true
      });
    }
  });
});