<br />
<br />
<div class="container" style="width:90%">
    <div class="row">
        <div class="col-sm-2 col-sm-offset-6 text-right">
          <a href="new_content.php">
          <input type="button" class="btn btn-primary" style="width:95%" value=" Add " name="new"/>
          </a>
        </div>
        <div class="col-sm-2 text-right">
          <a href="edit_content.php?cid={$cid}">
          <input type="button" class="btn btn-primary" style="width:95%" value=" Edit " name="edit"/>
          </a>
        </div>
        <div class="col-sm-2 text-right">
          <a href="content.php?cid={$cid}&del=1">
          <input type="button" class="btn btn-primary" style="width:95%" value="Delete" name="delete"/>
          </a>
        </div>
    </div>
<br />
<div class="panel panel-success">
  <div class="panel-heading text-center">{$title}</div>
  <div class="panel-body">
  <div class="row">
  <div class="col-sm-12 text-right"><p class="date">{$date}</p></div>
  </div>
  {if $picture != 'none'}
  <div class="row">
  <div class="col-sm-7"><span class="thumbnail"><img src="../img/db_images/{$picture}" style="width:100%" class="img"/></span></div>
  <div class="col-sm-5 text-justify">
  <h3>Summary</h3>
  <p>{$summary}</p>
  </div>
  </div>
  {/if}
  {if $picture == 'none'}
  <div class="row">
  <div class="col-sm-12 text-justify">
  <h3>Summary</h3>
  <p class="text">{$summary}</p>
  </div>
  </div>
  {/if}
  
  <div class="row">
  <div class="col-sm-12 text-justify">
  <h3>Full Content</h3>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12 text-justify">
  {$full}
  </div>
  </div>
  <br />
  <div class="row">
  <div class="col-sm-2">Type: {$type}</div>
  <div class="col-sm-5">Date Created: {$created}</div>
  <div class="col-sm-5">Date Modified: {$modified}</div>
  </div>
  </div>
  <br />
  <br />
  
  </div>
  </div>
