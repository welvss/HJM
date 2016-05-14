<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HJM</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/app.css">
    
  </head>
  <body class="hjm-app">
<div class="off-canvas-wrapper">
<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
  <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
  <div class="row">
    <div class="app-logo"></div>
    <ul class="vertical menu app-menu">
          <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
          <li><a href="<?php echo base_url('Customer');?>"><i class="fa fa-user fa-fw"></i>Customer</a></li>
          <li><a href="<?php echo base_url('Order');?>"><i class="fa fa fa-pencil-square-o fa-fw"></i>Orders</a></li>
          <li><a href="#"><i class="fa fa-truck fa-fw"></i>Supplier</a></li>
         
        </ul>
  </div>
  </div>
  <div class="fixed">
      <nav class="top-bar hjm-secondary" data-topbar role="navigation">
       <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu id="admin-account-menu">
          <li>
            <a href="#">Hello Admin</a>
            <ul class="menu">
              <li><a href="#">Account Settings</a></li>
              <hr>
              <li><a href="Customer/Logout">Log Out</a></li>
            </ul>
          </li>
        </ul>
       </div>
      </nav>
    </div>
  <div class="off-canvas-content" data-off-canvas-content>
    <div class="title-bar hide-for-large">
    <div class="title-bar-left">
    <button class="menu-icon" type="button" data-open="my-info"></button>
    <div class="title-bar-title"><a href="#"><img src="<?php echo base_url();?>/assets/images/hjmlogo.png"><span>HJM Dental Laboratory</span></a></div>
    </div>
    </div>
    