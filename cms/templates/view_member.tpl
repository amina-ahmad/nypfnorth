<br />
<br />
<div class="container" style="width:90%">
    <div class="row">
        <div class="col-sm-2 col-sm-offset-6 text-right">
          <a href="new_member.php">
          <input type="button" class="btn btn-primary" style="width:95%" value=" Add " name="new"/>
          </a>
        </div>
        <div class="col-sm-2 text-right">
          <a href="edit_member.php?mid={$mid}">
          <input type="button" class="btn btn-primary" style="width:95%" value=" Edit " name="edit"/>
          </a>
        </div>
        <div class="col-sm-2 text-right">
          <a href="member.php?mid={$mid}&del=1">
          <input type="button" class="btn btn-primary" style="width:95%" value="Delete" name="delete"/>
          </a>
        </div>
    </div>
<br />
<div class="panel panel-success">
  <div class="panel-heading text-center"><h2>{$fname}'s Profile</h2></div>
  <div class="panel-body">
  <div class="row">
  <div class="col-sm-12 text-center">
  <span class="thumbnail"><img src="../img/db_images/{$picture}" style="width:100%" class="img"/></span>
  </div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Full Name</div>
      <div class="col-sm-4 text-left">: {$fname} {$lname}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Profession</div>
      <div class="col-sm-4 text-left">: {$profession}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Location</div>
      <div class="col-sm-4">: {$state}, {$country}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Email</div>
      <div class="col-sm-4">: {$email}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Phone</div>
      <div class="col-sm-4">: {$phone}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Address</div>
      <div class="col-sm-4">: {$address}</div>
  </div>   
  <br />
  <div class="row">
      <div class="col-sm-2">Date of Birth</div>
      <div class="col-sm-4">: {$dob}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Gender</div>
      <div class="col-sm-4">: {$gender}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Role</div>
      {if $role == 0}
      <div class="col-sm-4">: Admin </div>
      {/if}
      {if $role == 1}
      <div class="col-sm-4">: Member </div>
      {/if}
      {if $role == 2}
      <div class="col-sm-4">: Blocked </div>
      {/if}
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Date Joined</div>
      <div class="col-sm-4">: {$date_joined}</div>
  </div>
  <br />
  {if isset ($unit)}
  {foreach from=$unit item=u}
  <div class="row">
      <div class="col-sm-2">Unit</div>
      <div class="col-sm-4">: {$u.uname}</div>
  </div>
  <br />
  <div class="row">
      <div class="col-sm-2">Position</div>
      <div class="col-sm-4">: {$u.position}</div>
  </div>
  <br />
  {/foreach}   
  {/if}
  <br />
  </div>
  <br />
</div>
</div>
