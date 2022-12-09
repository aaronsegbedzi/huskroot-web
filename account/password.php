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
        <li>ACCOUNT
        </li>
        <li>
          <b>SETTINGS
          </b>
        </li>
      </ul>
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <i class="material-icons">settings_applications</i>
        <h3>Change Password
        </h3>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>You are currently changing your password. Please complete this form to continue.
              </h4>
              <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
              </div>
            </div>
            <div class="grid-body no-border">
              <br>
              <div class="row">
                <div class="col-md-12">
                  <form id="password-form">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Your New Password
                          </label>
                          <span class="help">Enter your new password.
                          </span>
                          <div class="controls">
                            <input type="password" id="password" name="password" class="form-control" required="true">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Confirm Password
                          </label>
                          <span class="help">Enter your new password.
                          </span>
                          <div class="controls">
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" required="true">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="controls">
                            <button type="submit" class="btn btn-primary btn-cons btn-block">
                              <i class="material-icons">check_circle
                              </i>&nbsp;
                              <br>Change My password
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="controls">
                            <button type="reset" class="btn btn-danger btn-cons btn-block">
                              <i class="material-icons">refresh
                              </i>&nbsp;
                              <br>Reset
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
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
<script src="/assets/js/pages/account/password.min.js" type="text/javascript">
</script>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/footer.php"); ?>
