<?php $user = json_decode($_COOKIE['default'], true); ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo ucfirst(str_replace("_", " ", $scriptName)); ?> | HuskRoot</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Farm Market Application Assignment - Coventry University" name="description" />
    <meta content="Aaron Segbedzi #050915014" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <?php if (function_exists('HeaderContent')) { HeaderContent(); } ?>
    <link href="/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/assets/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <body>
  <!-- BEGIN HEADER -->
  <div class="header navbar navbar-inverse ">
    <?php include($_SERVER['DOCUMENT_ROOT']."/include/layouts/nav.header.php"); ?>
  </div>
  <!-- END HEADER