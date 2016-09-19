<br />
<br />
<div class="container" style="width:90%">
<div class="panel panel-success">
  <div class="panel-heading text-center">Newsletter</div>
  <div class="panel-body">
  <form action="send_newsletter.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormEmail(this)"> 
   <div class="form-group">
    <div class="col-sm-5">
    	<label for="test" class="control-label">Send Newsletter to Test Email Account</label>
	</div>
 
    <div class="col-sm-5">
     	<input type="text" name="email" id="email" class="form-control" placeholder="Test Email Account" />
    </div>
    
    <div class="col-sm-2">
     	<input type="submit" name="test" id="test" value="Send" class="btn btn-primary" style="width:95%" />
        <input type="hidden" name="cid" value="{$cid}"/>
    </div>
    </div>
  </form>
  </div>
</div>
</div>
  