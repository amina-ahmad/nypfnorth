{literal}
    <script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "../css/bootstrap.min.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "../js/tinymce/lists/template_list.js",
		external_link_list_url : "../js/tinymce/lists/link_list.js",
		external_image_list_url : "../js/tinymce/lists/image_list.js",
		media_external_list_url : "../js/tinymce/lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "nypf",
			staffid : "1"
		}
	});
</script>
<!-- /TinyMCE -->

 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
        
{/literal}

<br />
<br />
<div class="container" style="width:90%">
<div class="panel panel-success">
<div class="panel-heading text-center">Edit Site's Content</div>
<div class="panel-body"> 
{if $title != 'Newsletter'}
<form class="form-horizontal" action="content.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormUser(this)">
   <div class="form-group">
   {$date}
    {if $picture == 'none'}
    <div class="col-sm-4">   
      <input type="file" class="file" value="Add Picture" name="picture1"/>
     </div> 
    {/if}
    {if $picture !='none'}
    <div class="col-sm-4">
    <div class="thumbnail">
        <img src='../img/db_images/{$picture}' class="img img-rounded"/><br/>
    </div>
    </div> 
    <div class="col-sm-4">
        <input type="file" name='picture1'/>
        <input type="hidden" value="{$picture}" name='image'/>
    </div>            
    {/if}
    <div class="col-sm-1 text-right">
      <label for="date" class="control-label"> Date</label>
    </div>
    <div class="col-sm-3 text-right">
        <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="date" value="{$date}" />
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>    
    </div>
    </div>    
   <br />
    <div class="form-group">
    <div class="col-sm-2">
      <label for="title" class="control-label">Title</label>
    </div>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{$title}"/>
    </div>
    </div>
  
    <div class="form-group">    
    <div class="col-sm-2">
      <label for="summary" class="control-label">Summary</label>
    </div>
    
      <div class="col-sm-10">
        <textarea id="summary" rows="3" class="form-control" name="summary">{$summary}</textarea>
      </div>
    </div>
    <div class="form-group">
    <div class="col-sm-2">
    	<label for="full" class="control-label">Full Content</label>
	</div>
 
    <div class="col-sm-10">
     	<textarea id="full" rows="15" class="form-control" name="full">{$full}</textarea>
    </div>
    </div>

    <br />
    <div class="form-group">
    <div class="col-sm-3 col-sm-offset-3">
    <input type="hidden" name="cid" value="{$cid}"/>
    <input type="submit" name="edit" class="btn btn-primary" value="Edit" />
	</div>
    <div class="col-sm-3">
    	<input type="reset" name="reset" class="btn btn-primary" value="Reset" />
	</div>
    </div>
</form>
{/if}
{if $title == 'Newsletter'}
<div class="row">
<div class="col-sm-12 text-center">
<p class='alert alert-dismissible alert-warning'>
This is a newsletter content. Please go to the newsletter page to edit it.
</p>
</div>
</div>
{/if}

</div>
</div>
</div>
