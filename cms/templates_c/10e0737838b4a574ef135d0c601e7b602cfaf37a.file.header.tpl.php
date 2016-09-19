<?php /* Smarty version Smarty-3.1.13, created on 2016-09-18 21:08:19
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1587557def433266de7-44133630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1474169815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587557def433266de7-44133630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'site_icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57def4333135c9_16729644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57def4333135c9_16729644')) {function content_57def4333135c9_16729644($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
<link rel="shortcut icon" href="../img/db_images/<?php echo $_smarty_tpl->tpl_vars['site_icon']->value;?>
" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/slideshow.css"/>
<link rel="stylesheet" type="text/css" href="../css/fonts/glyphicons-halflings-regular.ttf" />
<link rel="stylesheet" href="../css/date.css" />
<link rel="stylesheet" href="../css/bootstrap-datetimepicker.css"/>

<script type="text/javascript" src="../js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/country.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../js/moment-with-locales.js"></script>
<script type="text/javascript" src="../js/nivo-timelined-captions.js"></script>
<script type="text/javascript" src="../js/jquery/nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="../js/jquery/nivo-slider/jquery.nivo.slider.pack"></script>

</head>
<body style="padding-top: 70px;">
<div class='container-fluid'>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand"><img src="../img/nypf_logo.png" width="110px"/></span>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="nav navbar-nav" href="home.php">Home</a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
          Management <span class="caret"></span></span>
          <ul class="dropdown-menu" role="menu">
           <li class="divider"></li>
            <li><a href="system.php">System</a></li>
           <li class="divider"></li>
            <li><a href="members.php">Member</a></li>
           <li class="divider"></li>
            <li><a href="banner.php">Banner</a></li>
           <li class="divider"></li>
            <li><a href="content.php">Content</a></li>
           <li class="divider"></li>
            <li><a href="newsletter.php">Newsletter</a></li>
           <li class="divider"></li>
            <li><a href="analytics.php">Google Analytics</a></li>
          </ul>
        </li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
    </div>
</nav>


        <?php }} ?>