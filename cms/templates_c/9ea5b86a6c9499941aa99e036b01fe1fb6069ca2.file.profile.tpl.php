<?php /* Smarty version Smarty-3.1.13, created on 2016-09-18 21:14:19
         compiled from ".\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1547157def59b573e38-35119618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea5b86a6c9499941aa99e036b01fe1fb6069ca2' => 
    array (
      0 => '.\\templates\\profile.tpl',
      1 => 1474228995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547157def59b573e38-35119618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fname' => 0,
    'picture' => 0,
    'lname' => 0,
    'profession' => 0,
    'state' => 0,
    'country' => 0,
    'email' => 0,
    'phone' => 0,
    'address' => 0,
    'dob' => 0,
    'gender' => 0,
    'role' => 0,
    'date_joined' => 0,
    'unit' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57def59b726d27_77568870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57def59b726d27_77568870')) {function content_57def59b726d27_77568870($_smarty_tpl) {?><br />
<br />
<div class="container" style="width:90%">
    <div class="row">
    <div class="col-sm-2 text-right">
        <a href="edit_profile.php">
        <input type="button" class="btn btn-primary" style="width:95%" value=" Edit " name="edit"/>
        </a>
    </div>
    </div>
<br />
<div class="panel panel-success">
  <div class="panel-heading text-center"><h2><?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
's Profile</h2></div>
  <div class="panel-body">
  <div class="row">
  <div class="col-sm-12 text-center">
  <span class="thumbnail"><img src="../img/db_images/<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
" style="width:100%" class="img"/></span>
  </div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Full Name</div>
      <div class="col-sm-4 text-left">: <?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Profession</div>
      <div class="col-sm-4 text-left">: <?php echo $_smarty_tpl->tpl_vars['profession']->value;?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Location</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['state']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Email</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Phone</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Address</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</div>
  </div>   
  <br />
  <div class="row">
      <div class="col-sm-2">Date of Birth</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Gender</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Role</div>
      <?php if ($_smarty_tpl->tpl_vars['role']->value==0){?>
      <div class="col-sm-4">: Admin </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['role']->value==1){?>
      <div class="col-sm-4">: Member </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['role']->value==2){?>
      <div class="col-sm-4">: Blocked </div>
      <?php }?>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Date Joined</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['date_joined']->value;?>
</div>
  </div>
  <br />
  <?php if (isset($_smarty_tpl->tpl_vars['unit']->value)){?>
  <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
  <div class="row">
      <div class="col-sm-2">Unit</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['u']->value['uname'];?>
</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Position</div>
      <div class="col-sm-4">: <?php echo $_smarty_tpl->tpl_vars['u']->value['position'];?>
</div>
  </div>
  <br />
  <?php } ?>   
  <?php }?>
  <br />
  </div>
  <br />
</div>
</div>
<?php }} ?>