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
        <h3>Account Settings
        </h3>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title">
              <h4>You are editing your account settings. Complete this form to continue.
              </h4>
            </div>
            <div class="grid-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="alert alert-info">
                    <i class="fa fa-info-circle">
                    </i>&nbsp;You will begin to see someupdated account details after next successful login.
                  </div>
                  <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active">
                        <a href="#personal" role="tab" data-toggle="tab">
                          <i class="fa fa-user">
                          </i>&nbsp;Personal Information
                        </a>
                      </li>
                      <li>
                        <a href="/account/password?token=<?php echo $user['token']; ?>">
                          <i class="fa fa-key">
                          </i>&nbsp;Passsword
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="personal">
                        <form id="personal-form">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">First Name
                                </label>
                                <span class="help">e.g. "Aaron"
                                </span>
                                <div class="controls">
                                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="form-label">Last Name
                                </label>
                                <span class="help">e.g. "Segbedzi"
                                </span>
                                <div class="controls">
                                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Phone
                                </label>
                                <span class="help">e.g. "0540845619"
                                </span>
                                <div class="controls">
                                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="form-label">Email
                                </label>
                                <span class="help">e.g. "aaronsegbedzi@outlook.com"
                                </span>
                                <div class="controls">
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <button class="btn btn-cons btn-primary btn-large btn-block" type="submit">
                                <i class="material-icons">check_circle
                                </i>&nbsp;<br>Update
                              </button>
                            </div>
                            <div class="col-md-6">
                              <button class="btn btn-cons btn-danger btn-large btn-block" type="reset">
                                <i class="material-icons">refresh
                                </i>&nbsp;<br>Reset
                              </button>
                            </div>
                          </div>
                        </form>
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
<script type="text/javascript" src="/assets/js/pages/account/settings.min.js">
</script>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/footer.php"); ?>
