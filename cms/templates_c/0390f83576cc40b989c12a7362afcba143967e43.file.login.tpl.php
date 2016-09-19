<?php /* Smarty version Smarty-3.1.13, created on 2016-09-18 21:09:48
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134457def48cdc69b2-67319562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1474172235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134457def48cdc69b2-67319562',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57def48cdcbef4_99628216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57def48cdcbef4_99628216')) {function content_57def48cdcbef4_99628216($_smarty_tpl) {?><br />
<br />
<div class="container" style="width:50%" >
    <form class="form-horizontal" action="index.php" method="post" enctype="multipart/form-data" name="login_form" onSubmit="return validateForm(this)">   
     <div class="form-group">
       <div class="col-sm-12">
         <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email"/>
       </div>
     </div>
     <div class="form-group">
      <div class="col-sm-12">
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password"/>
      </div>
     </div>    
    
    <div class="form-group">
        <div class="col-sm-8 col-sm-offset-2">    
        <input class="btn btn-primary" style="width:100%" type="submit" name="login" value="Login"/>
        </div>
    </div>
    <div class="text-center">
             <a href='forgot.php'>Forgot Password?</a>   
    </div>
	</form>
</div><?php }} ?>