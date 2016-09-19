<br />
<div class="container" style="width:70%">
<form class="form-horizantal" action="edit_system.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormSystem(this)">
 
<div class="panel panel-success">
<div class="panel-heading">
<h2 class="panel-title text-center">System Settings</h2>
</div>
    <div class="panel-body">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
            Website Name
            </div>  
            <div class="col-sm-9">
            <input class="form-control" type="text" name="sname" value="{$site_name}"/>
            </div> 
        </div>
    </div>
    <br /> 
    
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
            Website URL
            </div>  
            <div class="col-sm-9">
            <input class="form-control" type="text" name="surl" value="{$site_url}"/>
            </div> 
        </div>
    </div>
    <br />
    
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
            Website Email
            </div>  
            <div class="col-sm-9">
            <input class="form-control" type="text" name="semail" value="{$site_email}"/>
            </div> 
        </div>
    </div>
    <br />
    
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
            Website Icon
            </div>  
            <div class="col-sm-4">
            <div class="thumbnail">
            <img src='../img/db_images/{$site_icon}' class="img-rounded"/><br/>
            </div>
            </div>
            <div class="col-sm-5">
             <input type="file" name='picture1'/>
             <input type="hidden" value="{$site_icon}" name='image1'/>
            </div>       
        </div> 
    </div>
    <br />
    
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12 text-justify">
            Meta elements provide information about a given Web page, most often to help search engines categorize 
            them correctly. Thus, aiding in search engine optimization. The description attribute provides a concise 
            explanation of a Web page's content while the keyword attribute specifies the words that represent 
            the page content.
            </div>  
        </div>
    </div>
    <br />
    
    <div class="form-group">
        <div class="row">
            <div class="col-sm-4">
            Meta Tag Description
            </div> 
            <div class="col-sm-8">
            <input class="form-control" type="text" name="mtdesc" value="{$meta_tag_desc}"/>
            </div>
        </div>
    </div>
    <br />
        
    <div class="form-group">
        <div class="row">
            <div class="col-sm-4">
            Meta Tag Key
            </div>  
            <div class="col-sm-8">
            <input class="form-control" type="text" name="mtkey" value="{$meta_tag_key}"/>
            </div> 
        </div>
        <input type="hidden" name="sid" value="{$id}"/>
    </div>
    <br />
        
    <div class="form-group">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
            <a href="edit_system.php"><input type="submit" class="btn btn-primary" name="edit" value="Edit System Settings "/></a>
            </div>
        </div>
    </div>
    <br />
    
</div>
</div>

<br />
</form>
</div>
                 