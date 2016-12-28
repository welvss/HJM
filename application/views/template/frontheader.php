<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>HJM Dental Laboratory</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo base_url('appclient');?>/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?php echo base_url('appclient');?>/favicon.ico">
        <link rel="stylesheet" href="<?php echo base_url('appclient');?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('appclient');?>/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="<?php echo base_url('appclient');?>/vendor/fullcalendar-3.0.1/fullcalendar.min.css">
        
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url('appclient');?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url('appclient');?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('appclient');?>/vendor/font-awesome-4.6.3/css/font-awesome.min.css" />
        <script src="<?php echo base_url('appclient');?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top top-header-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('appclient');?>/img/w-hjm.png" class="hidden-xs"alt="" style="height: 35px; position: relative; bottom: 7px;">
            <img src="<?php echo base_url('appclient');?>/img/w-hjm.png" class="visible-xs"alt="" style="height: 25px;">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a class="hvr-underline-from-center" href="<?php echo base_url('Dashboard');?>">Dashboard</a></li>
          <!--<li><a class="hvr-underline-from-center" href="#">Transactions</a></li>-->
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('Customer/Profile');?>">Profile</a></li>
                  <li><a href="<?php echo base_url('Customer/AccountSettings');?>">Account Settings</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?php echo base_url('Dashboard/Logout');?>">Log Out</a></li>
                </ul>
          </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>