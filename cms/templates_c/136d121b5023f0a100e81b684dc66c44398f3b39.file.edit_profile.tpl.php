<?php /* Smarty version Smarty-3.1.13, created on 2016-09-18 21:20:47
         compiled from ".\templates\edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38457def4333f2183-59482395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136d121b5023f0a100e81b684dc66c44398f3b39' => 
    array (
      0 => '.\\templates\\edit_profile.tpl',
      1 => 1474229927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38457def4333f2183-59482395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57def4334613c2_78557583',
  'variables' => 
  array (
    'picture' => 0,
    'fname' => 0,
    'lname' => 0,
    'gender' => 0,
    'dob' => 0,
    'email' => 0,
    'phone' => 0,
    'country' => 0,
    'state' => 0,
    'address' => 0,
    'profession' => 0,
    'date_joined' => 0,
    'role' => 0,
    'units' => 0,
    'u' => 0,
    'newsletter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57def4334613c2_78557583')) {function content_57def4334613c2_78557583($_smarty_tpl) {?>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>  
        
   <script type="text/javascript">
$(document).ready(function()
{  
 // function to get all records from table
 function getAll(){
  
  $.ajax
  ({
   url: 'members.php',
   data: 'action=showAll',
   cache: false,
   success: function(r)
   {
    $("#display").html(r);
   }
  });   
 }
 
 getAll();
 // function to get all records from table
 
 
 // code to get all records from table via select box
 $("#getMembers").change(function()
 {    
  var id = $(this).find(":selected").val();

  var dataString = 'action='+ id;
    
  $.ajax
  ({
   url: 'members.php',
   data: dataString,
   cache: false,
   success: function(r)
   {
    $("#display").html(r);
   } 
  });
 })
 // code to get all records from table via select box
});
</script>     
        


<br />

<div class="container" style="width:90%">
<div class="panel panel-success">
<div class="panel-heading text-center">Edit Profile</div>
<div class="panel-body"> 
<form class="form-horizontal" action="profile.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormUser(this)">
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <span class="thumbnail"><img src="../img/db_images/<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
" style="width:100%" class="img"/></span>
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-12 text-center">
  <input type="file" class="file" value="Add Picture" name="picture1"/>
  </div>
  </div>
  <br />
   <div class="form-group">
    <div class="col-sm-2">   
      <label for="name" class="control-label">Full Name</h3>
    </div>
    <div class="col-sm-5">   
      <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
" name="fname"/>
    </div> 
    <div class="col-sm-5">   
      <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
" name="lname"/>
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-2">
      <label class="control-label"> Gender </label>
    </div>
    <div class="col-lg-10">
      <div class="radio">
          <label>
          <?php if ($_smarty_tpl->tpl_vars['gender']->value=='Male'){?>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="male" value="Male" checked=""/> Male
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gender']->value!='Male'){?>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="male" value="Male" /> Male
          <?php }?>
          </label>
          <label>
          <?php if ($_smarty_tpl->tpl_vars['gender']->value=='Female'){?>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="female" value="Female" checked=""/> Female
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['gender']->value!='Female'){?>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="female" value="Female" /> Female
          <?php }?>
          </label>
      </div>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="date" class="control-label">Date of Birth</label>
    </div>
    <div class="col-sm-4">
        <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="dob" value="<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
" />
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>    
    </div>
    </div>    
   <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Email</label>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Password</label>
    </div>
    <div class="col-sm-3">
      <a href="profile_password.php"><input type="button" onClick="profile_password.php" value="Change Password" name="password" class="btn btn-primary"/></a>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="phone" class="control-label">Phone</label>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" name="phone"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
    <label for="country" class="control-label">Country</label>
    </div>
    <div class="col-sm-4">
        <select id="country" class="form-control" name ="country"></select>
    </div>
    <div class="col-sm-2 text-right">
    <label for="state" class="control-label">State</label>
    </div>
    <div class="col-sm-4">
    <select name ="state" class="form-control" id ="state"></select>
     <script language="javascript">
    populateCountries("country", "state");
     </script>
    </div>
    <input type="hidden" name="country-2" value="<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
" />
    <input type="hidden" name="state-2" value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
" />
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Address</label>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" name="address"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Profession</label>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="profession" value="<?php echo $_smarty_tpl->tpl_vars['profession']->value;?>
" name="profession"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="date" class="control-label">Date Joined</label>
    </div>
    <div class="col-sm-4">
        <div class='input-group date' id='datetimepicker2'>
            <input type='text' class="form-control" name="date_joined" value="<?php echo $_smarty_tpl->tpl_vars['date_joined']->value;?>
" />
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>    
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
        <label for="role" class="control-label">Role</label>
    </div>
    <div class="col-sm-4">
    <select class="form-control" id="role" name="role">
    <?php if ($_smarty_tpl->tpl_vars['role']->value==1){?>
    <option value="Member" selected="selected">Member</option>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['role']->value!=1){?>
    <option value="Member">Member</option>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['role']->value==0){?>
    <option value="Admin" selected="selected">Admin</option>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['role']->value!=0){?>
    <option value="Admin">Admin</option>
    <?php }?>
    </select>    
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="basic" class="control-label">Unit</label>
    </div>
      <div class="col-sm-4">
      <?php if ((isset($_smarty_tpl->tpl_vars['units']->value))){?>
      <select id='getMembers' name="unit_list[]" class="form-control" multiple="multiple">
      <option value="showAll">All</option>
      <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['u']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['uname'];?>
</option>
      <?php } ?>
      </select> 
      <?php }?> 
      </div>
    </div>
    <br />
    <div class="form-group">    
    <div class="col-sm-2">
      <label for="newsletter" class="control-label">Newsletter</label>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['newsletter']->value=='Y'){?>
    <div class="col-sm-1 text-left">
       <input type="checkbox" name="newsletter" value="Y" checked="true"/>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['newsletter']->value!='Y'){?>
    <div class="col-sm-1 text-left">
       <input type="checkbox" name="newsletter" value="Y"/>
    </div>
    <?php }?>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <input type="submit" name="edit" class="btn btn-primary" style="width:90%" value="Continue" />
	</div>
    </div>
</form>
</div>
</div>
</div>
<?php }} ?>