{literal}
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
<div class="container" style="width:95%">
    <div class="row">
     <div class="col-sm-3">
        <a href="new_member.php">
        <input type="button" class="btn btn-primary" value="Add Member" name="new_member"/>
        </a>
    </div>     
   
    <div class="col-sm-9 text-right">
    <form class="navbar-form navbar-right" role="search" action="search_member.php" method="post" enctype="multipart/form-data" name="search" onSubmit="return validateFormSearch(this)">
        <div class="form-group-group">
            <input type="text" class="form-control" style="border:1px solid #f5e625" placeholder="Search by first name..."/>
            <input type="submit" class="btn btn-primary" value="Search" name="submit"/>
        </div>
    </form>
    </div>
    </div>
  

 <div class="panel panel-success">
  <div class="panel-heading text-center">NYPF Northern Region's Members</div>
  <br />
  <div class="panel-body">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-8 text-right">
      {if (isset($unit))}
      <select id='getMembers' name="unit" style="width:100%;padding:12px;border-radius:3px;border-color:#f5e625">
      <option value="showAll" selected="selected">All</option>
      {foreach from=$unit item=u}
        <option value="{$u.uid}">{$u.uname}</option>
      {/foreach}
      </select> 
      {/if} 
    </div>
  </div>
  <br />
  <div id="display"> 
 
 
  </div> 
  </div>
</div>
</div>
