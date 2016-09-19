<?php /* Smarty version Smarty-3.1.13, created on 2016-09-18 21:09:20
         compiled from ".\templates\profile_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1417557def44dd492f1-57347708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bd60f5e5d423e7e77973a7901f9bf99671d432c' => 
    array (
      0 => '.\\templates\\profile_password.tpl',
      1 => 1474229355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1417557def44dd492f1-57347708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57def44ddf0629_22518959',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57def44ddf0629_22518959')) {function content_57def44ddf0629_22518959($_smarty_tpl) {?>
<div class="container" style="width:40%"> 
<form class="form-horizontal" action="profile_password.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormUser(this)">
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <label for="currPass" class="control-label">Enter Current Password</label>
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <input type="password" class="form-control" name="currPass"/>
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <label for="newPass" class="control-label">Enter New Password</label>
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <input type="password" class="form-control" name="newPass"/>
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <label for="reNewPass" class="control-label">Re-Enter New Password</label>
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <input type="password" class="form-control" name="reNewPass"/>
  </div>
  </div>
  <br />
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <input type="submit" style="width:100%" class="btn btn-primary" name="save"/>
  </div>
  </div>
</form>
</div><?php }} ?>