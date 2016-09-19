<br />
<div class="container" style="width:70%">
<div class="panel panel-success">
<div class="panel-heading">
<h2 class="panel-title text-center">System Settings</h2>
</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-4">
            Website Name
            </div>  
            <div>
            {$site_name}
            </div> 
        </div>
        <br />
        <div class="row">
            <div class="col-sm-4">
            Website URL
            </div>  
            <div>
            {$site_url}
            </div> 
        </div>
        <br />
        <div class="row">
            <div class="col-sm-4">
            Website Email
            </div>  
            <div>
            {$site_email}
            </div> 
        </div>
        <br />
        <div class="row">
            <div class="col-sm-4">
            Website Icon
            </div>
            <div class="col-sm-4">
            <span class="thumbnail">
            <img src="../img/db_images/{$site_icon}" class="img-rounded"/>
            </span> 
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-12 text-justify">
            Meta elements provide information about a given Web page, most often to help search engines categorize 
            them correctly. Thus, aiding in search engine optimization. The description attribute provides a concise 
            explanation of a Web page's content while the keyword attribute specifies the words that represent 
            the page content.
            </div>  
        </div>
        <br />
        <div class="row">
            <div class="col-sm-4">
            Meta Tag Description
            </div>  
            <div>
            {$meta_tag_desc}
            </div> 
        </div>
        <br />
        <div class="row">
            <div class="col-sm-4">
            Meta Tag Key
            </div>  
            <div>
            {$meta_tag_key}
            </div> 
        </div>
        <br />
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center">
            <a href="edit_system.php"><input class="btn btn-primary" name="edit" value="Edit System Settings "/></a>
            </div>
        </div>
        <br />
        <br />
    </div>
</div>
</div>
                 