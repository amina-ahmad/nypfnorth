<?php /* Smarty version Smarty-3.1.13, created on 2016-09-18 21:08:54
         compiled from ".\templates\password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1374057def456f2ca19-87551926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e0efc43803c2957582f5a590dcbfc69d2e224' => 
    array (
      0 => '.\\templates\\password.tpl',
      1 => 1474226794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374057def456f2ca19-87551926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57def4570a46e8_71081093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57def4570a46e8_71081093')) {function content_57def4570a46e8_71081093($_smarty_tpl) {?>
<div class="container" style="width:40%"> 
<form class="form-horizontal" action="password.php?mid=<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
" method="post" enctype="multipart/form-data" onSubmit="return validateFormUser(this)">
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