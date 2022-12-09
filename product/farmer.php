<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/protect.php'); $scriptName = basename(__FILE__, '.php'); function HeaderContent() { ?>
<link href="/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<link href="/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
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
          <b>MY PRODUCT(S)
          </b>
        </li>
      </ul>
      <div class="page-title">
        <i class="material-icons">pageview
        </i> 
        <h3>My Products
        </h3>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>You are currently viewing your uploaded products.
              </h4>
              <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
                <a href="javascript:;" class="reload">
                </a>
              </div>
            </div>
            <div class="grid-body ">
              <table class="table table-condensed table-hover table-bordered" id="productTable" width="100%">
                <thead>
                  <tr>
                    <th class="text-center">#
                    </th>
                    <th class="text-center">
                      <i class="fa fa-camera">
                      </i>&nbsp;Image
                    </th>
                    <th class="text-center">
                      <i class="fa fa-edit">
                      </i>&nbsp;Name
                    </th>
                    <th class="text-center">
                      <i class="fa fa-tag">
                      </i>&nbsp;Price
                    </th>
                    <th class="text-center">
                      <i class="fa fa-map-marker">
                      </i>&nbsp;Location
                    </th>
                    <th class="text-center">
                      <i class="fa fa-calendar">
                      </i>&nbsp;Date Uploaded
                    </th>
                    <th class="text-center">
                      <i class="fa fa-calendar">
                      </i>&nbsp;Last Updated
                    </th>
                    <th class="text-center">
                      <i class="fa fa-cog">
                      </i>&nbsp;Actions
                    </th>
                  </tr>
                </thead>
              </table>
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
<script src="/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript">
</script>
<script src="/assets/plugins/datatables-responsive/js/datatables.responsive.js" type="text/javascript">
</script>
<script src="/assets/js/pages/product/farmer.min.js" type="text/javascript">
</script>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/footer.php"); ?>
