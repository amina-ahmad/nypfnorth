
<div class="container" style="width:40%"> 
<form class="form-horizontal" action="password.php?mid={$mid}" method="post" enctype="multipart/form-data" onSubmit="return validateFormUser(this)">
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
</div>