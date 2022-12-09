var access_key  = getUrlParameter('token');
$.getJSON(REMOTE_APPLICATION_URL + '/api/v2/category.php', { token:access_key }, function(data) {
    var tabs = [];      
    $.each(data, function(key, val) {
        var tab_content = [];
        if(key === 0){ tabs.push("<li class='active' style='width: 50%;' data-toggle='tab'  data-target='#" + val.name + "'><a href='#'><i class='material-icons'>shopping_basket</i><br>" + val.name + "</a></li>"); }else{           
        tabs.push("<li style='width: 50%;' data-toggle='tab'  data-target='#" + val.name + "'><a href='#'><i class='material-icons'>shopping_basket</i><br>" + val.name + "</a></li>");}

        $.getJSON(REMOTE_APPLICATION_URL + '/api/v2/subcategory.php', { token:access_key, category_id:val.id }, function(data_1) {                
            
            tab_content.push("<div class='row p-b-20'>");          
            
            $.each(data_1, function(key_1, val_1) {
                
                tab_content.push(        
                        "<a href='/categories?id=" + val_1.id + "&token=" + access_key + "' class='col-md-2 col-sm-6 col-xs-6 m-t-10' data-toggle='tooltip' title='" + val_1.description + "' data-placement='right'>"
                            + "<div class='tiles white weather-widget bordered'>"
                                + "<div class='tiles-body no-padding text-center'>"
                                    + "<img src='" + REMOTE_APPLICATION_URL + "/assets/img/subcategories/" + val_1.name + ".jpg' width='100%'>"
                                + "</div>"
                                + "<div class='tile-footer bg-brown'>"
                                    + "<div class='pull-left'>"
                                        + "<p class='text-white'>" + val_1.name + "</p>"
                                    + "</div>"
                                    + "<div class='pull-right'>"
                                        + "<span class='text-black label bg-husk'>"
                                            + "<span class='hidden-xs'>" + val_1.totalProducts + " CROP(S)</span>"
                                        + "</span>"
                                    + "</div>"
                                    + "<div class='clearfix'></div>"
                                + "</div>"
                            + "</div>"
                        + "</a>"
                );      
            });
            
            tab_content.push("</div>");
            
            if (key == 0) { var class_ = 'tab-pane active'; }else{ var class_ = 'tab-pane';}
            
            $( "<div/>", {
                "class": class_,
                "id": val.name,
                html: tab_content.join( "" )
                }).appendTo( ".tab-content" );
            });

        });   

    $( "<ul/>", {
        "class": "nav nav-tabs text-center",
        "id": "Tab1",
        html: tabs.join( "" )
    }).prependTo( "#tabs" );

});