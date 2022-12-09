var access_key  = getUrlParameter('token');
var id  = getUrlParameter('id');

$.getJSON(REMOTE_APPLICATION_URL + '/api/v2/subsubcategory.php', { token:access_key, subcategory_id:id }, function(data) {                
    var tab_content = [];
    
    $('.subsubcategory-title').html(data[0]['subcategory']);

    tab_content.push("<div class='row-fluid'>");          
    
    $.each(data, function(key, val) {
        tab_content.push(        
                "<a href='/product/index?subsubcategory_id=" + val.id + "&token=" + access_key + "' class='col-md-2 col-sm-6 col-xs-6 m-t-10' data-toggle='tooltip' subsubcategory-title='' data-placement='right'>"
                    + "<div class='tiles white weather-widget bordered'>"
                        + "<div class='tiles-body no-padding text-center'>"
                            + "<img src='" + REMOTE_APPLICATION_URL + "/assets/img/subsubcategories/" + val.name + ".jpg' width='100%'>"
                        + "</div>"
                        + "<div class='tile-footer'>"
                            + "<div class='text-center'>"
                                + "<span class='text-black semi-bold'>" + val.name + "</span>"
                            + "</div>"
                            + "<div class='text-center'>"
                                + "<span class='text-white label bg-brown'>" + val.subcategory + " - " + val.totalProducts + " CROP(S)</span>"
                            + "</div>"
                            + "<div class='clearfix'></div>"
                        + "</div>"
                    + "</div>"
                + "</a>"
        );      
    });
    
    tab_content.push("</div>");
   
    
    $( "<div/>", {
        html: tab_content.join( "" )
    }).appendTo( "#grid-body" );
});
 