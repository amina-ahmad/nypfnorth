<br />
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
</div>