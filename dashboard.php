<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/protect.php'); $scriptName = basename(__FILE__, '.php'); function HeaderContent() { ?>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/header.php"); ?>
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
  <?php include($_SERVER['DOCUMENT_ROOT']."/include/layouts/sidebar.php"); ?>
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE
          </p>
        </li>
        <li>
          <b>DASHBOARD
          </b>
        </li>
      </ul>
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <i class="material-icons">pageview
        </i> 
        <h3>Dashboard
        </h3>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="tiles bg-green m-b-10">
            <div class="tiles-body">
              <div class="tiles-title text-white">
                <b>OVERALL PRODUCT VIEWS
                </b>
              </div>
              <div class="heading" id="widget-views">
              </div>
              <div class="progress transparent progress-small no-radius">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="tiles bg-blue m-b-10">
            <div class="tiles-body">
              <div class="tiles-title text-white">
                <b>TOTAL UPLOADED PRODUCTS
                </b>
              </div>
              <div class="heading" id="widget-product">
              </div>
              <div class="progress transparent progress-small no-radius">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="tiles bg-yellow m-b-10">
            <div class="tiles-body">
              <div class="tiles-title text-white">
                <b>OVERALL PRODUCT REFERALS
                </b>
              </div>
              <div class="heading" id="widget-refer">
              </div>
              <div class="progress transparent progress-small no-radius">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="tiles bg-red m-b-10">
            <div class="tiles-body">
              <div class="tiles-title text-white">
                <b>OVERALL PRODUCT CLICKS
                </b>
              </div>
              <div class="heading" id="widget-clicks">
              </div>
              <div class="progress transparent progress-small no-radius">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%">
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
<script src="/assets/js/pages/dashboard.js" type="text/javascript">
</script>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/footer.php"); ?>
