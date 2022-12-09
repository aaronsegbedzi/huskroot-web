var access_key = getUrlParameter('token');
var id = getUrlParameter('id');

$(function() {
  $.ajax({
    type: 'GET',
    url: REMOTE_APPLICATION_URL + '/api/v2/product.php',
    data: {token:access_key, farmer_id:id},
    success: function(response) {
      var rows = [];
      $.each(response, function(key, val) {
        rows.push(
          "<tr id='row_" + val.id + "'>"
            + "<td class='text-center align-middle'>" + val.id + "</td>"
            + "<td class='text-center align-middle'><img src='" + REMOTE_APPLICATION_URL + "/assets/img/products/" + val.peopleid + "/" + val.id + ".jpg' width='100px' /></td>"
            + "<td class='text-center align-middle large-text'>" + val.name + "</td>"
            + "<td class='text-center align-middle'><span class='badge bg-brown text-white larger-text'>" + val.currency + " " + val.price + " / " + val.unit.toUpperCase() + "</span></td>"
            + "<td class='text-center align-middle large-text'>" + val.location + "</td>"
            + "<td class='text-center align-middle large-text'>" + val.created_at + "</td>"
            + "<td class='text-center align-middle large-text'>" + val.updated_at + "</td>"
            + "<td class='text-center align-middle'>"
              + "<div class='btn-group'>"
                + "<a href='/product/view?id=" + val.id + "&token=" + access_key + "' class='btn btn-primary'><i class='fa fa-eye'></i></a>"
                + "<a href='/product/edit?id=" + val.id + "&token=" + access_key + "' class='btn btn-warning'><i class='fa fa-pencil'></i></a>"
                + "<a onclick='deleteProduct(" + val.id + "," + val.peopleid + ")' class='btn btn-danger'><i class='fa fa-trash'></i></a>"
              + "</div>"
            + "</td>"
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

function deleteProduct(id, peopleid) {
  $.ajax({
    type: 'DELETE',
    url: REMOTE_APPLICATION_URL + '/api/v2/product.php?id=' + id + '&farmer_id=' + peopleid + '&token=' + access_key,
    contentType: "text/plain",
    success: function(response) {
      swal("Product Deleted", "Product has successfully been deleted.", "success");
      $('#row_' + id).fadeOut();
    },
    error: function(status) {
      swal("Ooops!", "Deleting this product was not successful. Please try again.", "error");
    }
  });
}

