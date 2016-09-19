<br />
<div class="container" style="width:85%">
<div class="panel panel-success">
<div class="panel-heading">
<h2 class="panel-title text-center">Banner Management</h2>
</div>
<div class="panel-body">
  <div class="slideshow">
  <div id="slideshow" class="nivoSlider">
    <img src="../img/db_images/{$pic1}" alt="" style="width:100%; height:280px;" title="{$caption1}"/>            
    <img src="../img/db_images/{$pic2}" alt="" style="width:100%; height:280px;" title="{$caption2}"/>
    <img src="../img/db_images/{$pic3}" alt="" style="width:100%; height:280px;" title="{$caption3}"/>
    <img src="../img/db_images/{$pic4}" alt="" style="width:100%; height:280px;" title="{$caption4}"/>
  </div> 
  </div>          
<script>
    $(window).load(function()
    {
        $('#slideshow').nivoSlider();
        
    });
</script>

 {literal}
<script type="text/javascript">
        $(document).ready(function(){
            $('#add').click(function(){
		
            $('#display_area').show();   
				    
            });
        });
</script>
{/literal}
<form class="form-horizantal" action="banner.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormBanner2(this)">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
            <div class="thumbnail">
            <img src='../img/db_images/{$pic1}' class="img img-rounded"/>
            </div>  
            </div>
            <div class="col-sm-3">
            <div class="thumbnail">
            <img src='../img/db_images/{$pic2}' class="img img-rounded"/>
            </div>  
            </div>
            <div class="col-sm-3">
            <div class="thumbnail">
            <img src='../img/db_images/{$pic3}' class="img img-rounded"/>
            </div>  
            </div>
            <div class="col-sm-3">
            <div class="thumbnail">
            <img src='../img/db_images/{$pic4}' class="img img-rounded"/>
            </div>  
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-3 text-left">
            <input name="picture1" type="file" class="btn btn-file"/>
            <input type="hidden" value="{$pic1}" name='image1'/> 
            </div>
            <div class="col-sm-3">
            <input name="picture2" type="file" class="btn btn-file"/>
            <input type="hidden" value="{$pic2}" name='image2'/> 
            </div>
            <div class="col-sm-3">
            <input name="picture3" type="file" class="btn btn-file"/>
            <input type="hidden" value="{$pic3}" name='image3'/> 
            </div>
            <div class="col-sm-3">
            <input name="picture4" type="file" class="btn btn-file"/>
            <input type="hidden" value="{$pic4}" name='image4'/> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
            Caption
            </div>
            <div class="col-sm-2">
            <input name="caption1" class="form-control" type="text" value="{$caption1}"/>
            </div>
            <div class="col-sm-1">
            Caption
            </div>
            <div class="col-sm-2">
            <input name="caption2" class="form-control" type="text" value="{$caption2}"/>
            </div>
            <div class="col-sm-1">
            Caption
            </div>
            <div class="col-sm-2">
            <input name="caption3" class="form-control" type="text" value="{$caption3}"/>
            </div>
           <div class="col-sm-1">
            Caption
            </div>
            <div class="col-sm-2">
            <input name="caption4" class="form-control" type="text" value="{$caption4}"/>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-1">
            Link
            </div>
            <div class="col-sm-2">
            <input name="link1" class="form-control" type="text" value="{$link1}"/>
            </div>
            <div class="col-sm-1">
            Link
            </div>
            <div class="col-sm-2">
            <input name="link2" class="form-control" type="text" value="{$link2}"/>
            </div>
            <div class="col-sm-1">
            Link
            </div>
            <div class="col-sm-2">
            <input name="link3" class="form-control" type="text" value="{$link3}"/>
            </div>
           <div class="col-sm-1">
            Link
            </div>
            <div class="col-sm-2">
            <input name="link4" class="form-control" type="text" value="{$link4}"/>
            </div>
        </div>
    <br />
    <br />
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4 text-center">
    <input type="submit" name="save" value="Save Banner" class="btn btn-default btn-block"/>
	</div>
    </div>
    </div>
	</form>
    </div>
</div>
</div>
