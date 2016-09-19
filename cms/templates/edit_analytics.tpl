<br />
<div class="container" style="width:70%">
<form class="form-horizantal" action="edit_analytics.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormSystem(this)">
 
<div class="panel panel-success">
<div class="panel-heading">
<h2 class="panel-title text-center">Google Analytics</h2>
</div>
    <div class="panel-body">
     <div class="row">
            <div class="col-sm-12 text-justify">
            Google Analytics is a service offered by Google that generates detailed statistics about a 
            website's traffic and traffic sources and measures conversions and sales.  It is the most 
            widely used website statistics service which allows you to track visitors from all referrers, 
            including search engines and social networks, direct visits and referring sites. It also 
            displays advertising, pay-per-click networks, email marketing and digital collateral such 
            as links within PDF documents.               
            </div>  
     </div>
     <br />
    
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
            Analytic's Code
            </div>  
            <div class="col-sm-9">
            <input class="form-control" type="text" name="analytics" value="{$analytics}"/>
            </div> 
        </div>
        <input type="hidden" name="sid" value="{$id}"/>
    </div>
    <br />
        
    <div class="form-group">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
            <input type="submit" class="btn btn-primary" style="width:80%" name="edit" value="Edit Google Analytics Settings"/>
            </div>
        </div>
    </div>
    <br />
    
</div>
</div>

<br />
</form>
</div>
                 