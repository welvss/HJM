<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HJM | Dental Laboratory</title>
</head>
<link rel="stylesheet" href="<?php echo base_url();?>app/bower_components/semantic/dist/semantic.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>app/bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>app/css/app.css">
<link rel="stylesheet" href="<?php echo base_url();?>app/css/hover-min.css">
<link rel="shortcut icon" href="<?php echo base_url();?>app/favicon.ico">
<body class="app">
<!--Sidebar-->
  <div class="ui left vertical sidebar menu" id="app-main-sidebar">
    <div class="app-avatar">
      <div id="circle" class="circle">
        <h1 id="app-avatar-initial"><?php echo substr($dentist->firstname, 0,1).substr($dentist->lastname, 0,1);?></h1>
      </div>
    </div>
    <div class="ui right dropdown item">
     <div class="ui sub header"><?php echo $dentist->firstname.' '.$dentist->lastname;?></div>
          Admin
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item"><i class="settings icon"></i>
        Edit Username</div>
        <div class="item"> <i class="user icon"></i>
        Change Avatar</div>
        <div class="divider"></div>
        <div class="item"> <i class="browser icon"></i>
        Manage Site</div>
        <div class="item"> <i class="configure icon"></i>
        Account settings</div>
        <div class="item"> <a href="Dashboard/Logout"><i class="sign out icon"></i>
        Sign Out</a></div>
      </div>
    </div>
    <hr>
     <a href="<?php echo base_url('Dashboard');?>" class="<?php if($active==1){ echo "active blue";}?> item">
        <i class="large home icon"></i>
        Home
      </a>
      <a href="<?php echo base_url('Customer');?>" class="<?php if($active==2){ echo "active blue";}?> item">
        <i class="large doctor icon"></i>
        Customer
      </a>
      <a href="<?php echo base_url('Order');?>" class="<?php if($active==3){ echo "active blue";}?> item" id="new_count_sidebar">
        <i class="large file text outline icon" ></i>
        <?php if($this->mdlOrder->countOrder(array('status'=>'New'))!=0) echo
     '<div class="ui left label" id="number-notif" >'.$this->mdlOrder->countOrder(array('status'=>'New')).'</div>';
      ?>
    
        Cases
      </a>
      <a class="item">
        <i class="large shipping icon"></i>
        Suppliers
      </a>
      <a href="<?php echo base_url('Inventory');?>" class="<?php if($active==4){ echo "active blue";}?> item">
        <i class="large cubes icon"></i>
         <div class="ui left red label" id="number-notif">9</div>
        Inventory
      </a>
  </div>


<div class="pusher">
  <!--Header-->
    <div class="computer tablet only row">
      <div class="ui inverted fixed menu navbar page grid" id="app-top-bar">
        <button class="sidebar-button ui basic inverted button">
        <i class="icon align justify big icon"></i>
        </button>
      <div class="brand">
        <img src="<?php echo base_url();?>app/img/hjm.png" alt="" style="">
        <p style="display: inline-block;">DENTAL LABORATORY</p>
      </div>
      <div class="right menu">
        <div class="ui transparent inverted icon input">
          <input type="text" placeholder="Search HJM Dental La..">
          <i class="search icon"></i>
        </div>
      </div>
      </div>
    </div>