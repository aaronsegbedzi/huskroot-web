<?php

  function check_token($key){
    $APPLICATION_URL = 'https://huskroot-api.cocoware.co.uk';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $APPLICATION_URL.'/api/v2/auth.php?token='.$key);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_exec($ch);
    $http_status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $http_status_code;
  }

  if (isset($_COOKIE)) {  
    $user = json_decode($_COOKIE['default'], true);
    if (!empty($user['token'])) {
      if (check_token($user['token']) == 202) {    
        header("Location: /explore?token=".$user['token']);
      }
    }
  }

?>
<!DOCTYPE html>
<html>
  <!-- BEGIN HEAD -->
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Husk Root - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Authentication Page for Farm Yeild Network" name="description" />
    <meta content="Aaron Segbedzi" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/pace/pace-theme-flash.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="/assets/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="error-body no-top lazy" data-original="/assets/img/bg/login.jpg" style="background: url('/assets/img/bg/login.jpg'); background-size: 100%; ">
    <div class="container">
      <div class="row login-container animated fadeInUp">
        <div class="col-md-7  tiles white no-padding">
          <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
            <h2 class="normal">Sign in to Husk Root
            </h2>
            <p>Use your email to sign in.
            </p>
            <p class="p-b-20">
              Sign up Now! for a Husk Root account, it's free and always will be..
            </p>
            <div role="tablist">
              <a href="#tab_login" class="btn btn-info btn-cons" role="tab" data-toggle="tab">Login
              </a>&nbsp;or&nbsp;
              <a href="#tab_register" class="btn btn-white btn-cons" role="tab" data-toggle="tab">Create an account
              </a>
            </div>
          </div>
          <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab_login">
              <div class="row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                <div class="col-md-12 col-sm-12">
                  <!-- <div id="alert"></div> -->
                  <div id="login-alert-success" class="alert alert-success" style="display: none;">
                    <button class="close" data-dismiss="alert">
                    </button>
                    <i class="fa fa-spinner fa-spin fa-lg"></i>&nbsp;
                    <span id="login-alert-success-text">
                    </span>
                  </div>
                </div>
              </div>
              <form class="animated fadeIn" id="login-form" name="login-form">
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="username" name="username" placeholder="Email or Phone Number" type="text" required="true">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password" required="true">
                  </div>
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <a href="#tab_recovery" class="btn btn-link" role="tab" data-toggle="tab">Forgot password?
                    </a>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block btn-cons">
                      <i class="fa fa-check">
                      </i>&nbsp;Continue
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab_register">
              <div id="register-alert-error" class="alert alert-error" style="display: none;">
                <button class="close" data-dismiss="alert">
                </button>
                <span>Username or phone number has already been registered. Please check your details and try again.
              </div>
              <div id="register-alert-success" class="alert alert-success" style="display: none;">
                <button class="close" data-dismiss="alert">
                </button>
                <span>
                  <i class="fa fa-check fa-lg">
                  </i>
                  &nbsp;Successfully registered. Please log in now.
                </span>
              </div>
              <form class="animated fadeIn" id="register-form" name="register-form">
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="reg_username" name="reg_username" placeholder="Email" type="text" required="true">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="reg_phone" name="reg_phone" placeholder="Phone" type="tel" required="true">
                  </div>
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="reg_password" name="reg_password" placeholder="Password" type="password" required="true">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="reg_confirm_password" name="reg_confirm_password" placeholder="Confirm Password" type="password" required="true">
                  </div>
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="reg_first_name" name="reg_first_name" placeholder="First Name" type="text" required="true">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="reg_last_name" name="reg_last_name" placeholder="Last Name" type="text" required="true">
                  </div>
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <select style="width:100%" id="reg_question" name="reg_question" required="true">
                      <option value="What is your father's middle name?" selected="true">What is your father's middle name?
                      </option>
                      <option value="What is your favorite color?">What is your favorite color?
                      </option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" id="reg_answer" name="reg_answer" placeholder="Answer" type="text" required="true">
                  </div>
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-12 col-sm-12">
                    <label>I want to register as a
                    </label>
                    <select style="width:100%" id="reg_type" name="reg_type" required="true">
                      <option value="0" selected="true">Buyer
                      </option>
                      <option value="1">Farmer
                      </option>
                    </select>
                  </div>
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6">
                    <button class="btn btn-danger btn-cons btn-block" type="reset">
                      <i class="fa fa-refresh">
                      </i>&nbsp;Reset
                    </button>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-primary btn-cons btn-block" type="submit">
                      <i class="fa fa-check">
                      </i>&nbsp;Continue
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab_recovery">
              <div id="recovery-alert-error" class="alert alert-error" style="display: none;">
                <button class="close" data-dismiss="alert">
                </button>
                <span>Ooops! Incorrect details. Hmmm, please contact HuskRoot support at recovery@huskroot.com.gh.
                </span>
              </div>
              <div id="recovery-alert-success" class="alert alert-success" style="display: none;">
                <button class="close" data-dismiss="alert">
                </button>
                <span>
                  <i class="fa fa-check fa-lg">
                  </i>
                  &nbsp;We successfully recovered your password. But!, we changed it to be sure. Use this password 
                  <b>
                    <span class="label label-danger" id="temp_password">
                    </span>
                  </b> in your next login. Change your password to a 
                  <b>new
                  </b> and 
                  <b>easier
                  </b> but 
                  <b>stronger
                  </b> password in your account settings.
                </span>
              </div>
              <form class="animated fadeIn" id="recovery-form" name="recovery-form">
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-6 col-sm-6">
                    <label>What is your email or mobile number?
                    </label>
                    <input class="form-control" id="rec_username" name="rec_username" placeholder="Email or Phone Number" type="text" required="true">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <label>Choose a security question:
                    </label>
                    <select style="width:100%" id="rec_question" name="rec_question" required="true">
                      <option value="What is your father's middle name?" selected="true">What is your father's middle name?
                      </option>
                      <option value="What is your favorite color?">What is your favorite color?
                      </option>
                    </select>
                  </div>
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-12 col-sm-12">
                    <label>Your answer to the security question:
                    </label>
                    <input class="form-control" id="rec_answer" name="rec_answer" placeholder="Answer" type="text" required="true">
                  </div>
                  <!-- <div class="col-md-6 col-sm-6">
                    <label>What is 
                      <?php $num1 = random_int(10, 20); $num2 = random_int(1, 10); echo $num1." + ".$num2; ?>:
                    </label>
                    <select style="width:100%" id="rec_check" name="rec_check" required="true">
                      <option value="false" selected="true">
                        <?php $ans = $num2 - $num1; echo $ans; ?>
                      </option>
                      <option value="true">
                        <?php $ans = $num2 + $num1; echo $ans; ?>
                      </option>
                      <option value="false">
                        <?php $ans = $num2 - $num1 + $num2; echo $ans; ?>
                      </option>
                      <option value="false">
                        <?php $ans = $num2 + $num1 + $num2; echo $ans; ?>
                      </option>
                    </select>
                  </div> -->
                </div>
                <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary btn-cons btn-block">Recover my password
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
    </div>
    <!-- END CONTAINER -->
    <script src="/assets/plugins/pace/pace.min.js" type="text/javascript">
    </script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript">
    </script>
    <!-- END CORE JS DEPENDECENCIES-->

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/assets/js/global/webarch.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/jquery-notifications/js/sweetalert.min.js" type="text/javascript">
    </script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN CUSTOM PAGE JS -->
    <script src="/assets/js/global/jquery.cookie.js" type="text/javascript"></script>
    <script src="/assets/js/pages/login.js" type="text/javascript">
    </script>
    <!-- END CUSTOM PAGE JS -->
  </body>
</html>
