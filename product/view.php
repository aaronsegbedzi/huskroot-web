<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/protect.php'); $scriptName = basename(__FILE__, '.php'); function HeaderContent() { ?>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/header.php"); ?>
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
  <?php include($_SERVER['DOCUMENT_ROOT']."/include/layouts/sidebar.php"); ?>
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <div class="content">
      <!-- BEGIN PAGE TITLE -->
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE
          </p>
        </li>
        <li>PRODUCTS
        </li>
        <li>
          <b>VIEW PRODUCT
          </b>
        </li>
      </ul>
      <div class="page-title">
        <i class="material-icons">library_add
        </i>
        <h3>View Product
        </h3>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row fluid">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="row fluid">
            <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="widget-item">
                <div class="tiles white overflow-hidden full-height text-center" style="max-height:350px" id="product">
                  <div class="overlayer bottom-right fullwidth">
                    <div class="overlayer-wrapper">
                      <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                        <div class="pull-right"> 
                          <a href="#" class="hashtags transparent">#Image of Product
                          </a> 
                        </div>
                        <div class="clearfix">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tiles white ">
                  <div class="tiles-body">
                    <div class="row">                
                      <div class="p-l-15 p-r-20" id="audio">
                        <h4>
                          <b>AUDIO DESCRIPTION
                          </b>
                        </h4>
                      </div>
                      <hr>
                      <div class="p-l-15 p-r-20" id="video">
                        <h4>
                          <b>VIDEO DESCRIPTION
                          </b>
                        </h4>
                      </div>
                    </div>          
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="grid-title no-border">
                      <h4>
                        <b>PRODUCT INFORMATION
                        </b>
                      </h4>
                    </div>
                    <div class="grid-body no-border">
                      <div class="row">
                        <div class="col-md-6 text-center">
                          <b>
                            <span class="text-black text-center" style="font-size: 35px;" id="name">
                            </span>
                          </b>
                        </div>
                        <div class="col-md-6 text-center">
                          <span class="badge bg-brown text-white" style="font-size: 35px;" id="price">
                          </span>
                        </div>            
                      </div><hr/>
                      <div class="row">
                        <div class="col-md-6">
                          <button type="button" class="btn bg-brown btn-block btn-cons text-white" id="btn-contact">
                            <i class="fa fa-phone fa-2x">
                            </i>
                            <br>&nbsp;
                            <b>Show Telephone
                            </b>
                          </button>
                        </div>
                        <div class="col-md-6">
                          <button class="btn bg-brown text-black btn-cons btn-block text-white" id="btn-email">
                            <i class="fa fa-envelope fa-2x">
                            </i>
                            <br>&nbsp;
                            <b>Show Email
                            </b>
                          </button>
                        </div>
                      </div><hr/>
                      <div class="row">
                        <div class="col-md-6">
                          <div>
                            <h4>
                              <b>FARMER'S INFORMATION
                              </b>
                            </h4>
                            <span class="larger-text" id="full_name">
                            </span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div>
                            <h4>
                              <b>DESCRIPTION
                              </b>
                            </h4>
                            <span id="description">
                            </span>
                          </div>
                          <div>
                            <h5>
                              <b>PUBLISHED:
                                <span id="created_at">
                                </span>
                              </b>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple">
                    <div class="row-fluid">
                      <div id="map" style="width: 100%; height: 340px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div> 
  <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT -->
<?php function FooterContent() { ?>
<script type="text/javascript" src="/assets/js/pages/product/view.min.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB59XziNtopRDb7unsQ7nXDXS9HdsdidPU&callback=initMap" async defer>
</script>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/footer.php"); ?>
