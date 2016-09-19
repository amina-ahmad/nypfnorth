{literal}
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
        
{/literal}

<br />

<div class="container" style="width:90%">
<div class="panel panel-success">
<div class="panel-heading text-center">New Member</div>
<div class="panel-body"> 
<form class="form-horizontal" action="members.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormUser(this)">
   <div class="form-group">
    <div class="col-sm-2">   
      <label for="name" class="control-label">Full Name</h3>
    </div>
    <div class="col-sm-5">   
      <input type="text" class="form-control" placeholder="First Name" name="fname"/>
    </div> 
    <div class="col-sm-5">   
      <input type="text" class="form-control" placeholder="Last Name" name="lname"/>
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-2">
      <label class="control-label"> Gender </label>
    </div>
    <div class="col-lg-10">
      <div class="radio">
          <label>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="male" value="Male" checked=""/> Male
          </label>
          <label>
          <input type="radio" name="gender" id="female" value="Female"/> Female
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
            <input type='text' class="form-control" name="dob" />
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
      <input type="text" class="form-control" id="email" placeholder="Email" name="email"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Password</label>
    </div>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="password" name="password"/>
    </div>
    <div class="col-sm-3 text-right">
      <label for="password" class="control-label">Confirm Password</label>
    </div>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="confirm" name="confirm"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="phone" class="control-label">Phone</label>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone"/>
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
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Address</label>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="address" placeholder="Address" name="address"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Profession</label>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="profession" placeholder="profession" name="profession"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="date" class="control-label">Date Joined</label>
    </div>
    <div class="col-sm-4">
        <div class='input-group date' id='datetimepicker2'>
            <input type='text' class="form-control" name="date_joined" />
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>    
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="picture" class="control-label">Picture</label>
    </div>
    <div class="col-sm-4">   
      <input type="file" class="file" value="Add Picture" name="picture1"/>
     </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
        <label for="role" class="control-label">Role</label>
    </div>
    <div class="col-sm-4">
    <select class="form-control" id="role" name="role">
    <option value="Member" selected="selected">Member</option>
    <option value="Admin">Admin</option>
    </select>    
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="basic" class="control-label">Unit</label>
    </div>
      <div class="col-sm-4">
      {if (isset($unit))}
      <select id='getMembers' name="unit_list[]" class="form-control" multiple="multiple">
      <option value="showAll" selected="selected">All</option>
      {foreach from=$unit item=u}
        <option value="{$u.uid}">{$u.uname}</option>
      {/foreach}
      </select> 
      {/if} 
      </div>
    </div>
    <br />
    <div class="form-group">    
    <div class="col-sm-2">
      <label for="newsletter" class="control-label">Newsletter</label>
    </div>
    <div class="col-sm-1 text-left">
       <input type="checkbox" name="newsletter" value="Y"/>
    </div>
    </div>
    <br />
    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <input type="submit" name="save" class="btn btn-primary" style="width:90%" value="Continue" />
	</div>
    </div>
</form>
</div>
</div>
</div>
