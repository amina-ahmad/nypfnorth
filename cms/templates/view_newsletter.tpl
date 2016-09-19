<br />
<br />
<div class="container" style="width:90%">
    <div class="row">
        <div class="col-sm-2 col-sm-offset-6 text-right">
          <a href="new_newsletter.php">
          <input type="button" class="btn btn-primary" style="width:95%" value=" Add " name="new"/>
          </a>
        </div>
        <div class="col-sm-2 text-right">
          <a href="edit_newsletter.php?cid={$cid}">
          <input type="button" class="btn btn-primary" style="width:95%" value=" Edit " name="edit"/>
          </a>
        </div>
        <div class="col-sm-2 text-right">
          <a href="newsletter.php?cid={$cid}&del=1">
          <input type="button" class="btn btn-danger" style="width:95%" value="Delete" name="delete"/>
          </a>
        </div>
    </div>
<br />
<div class="panel panel-success">
  <div class="panel-heading text-center">{$title}</div>
  <div class="panel-body">
  <div class="row">
  <div class="col-sm-12 text-justify">
  <h3>Newsletter's Content</h3>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12 text-justify">
  {$full}
  </div>
  </div>
  <br />
  <div class="row">
  <div class="col-sm-12 text-left">Type: {$type}</div>
  </div>
  <br />
  <div class="row">
  <div class="col-sm-12 text-left">Date Created: {$created}</div>
  </div>
  <br />
  <div class="row">
  <div class="col-sm-12 text-left">Date Modified: {$modified}</div>
  </div>
  <br />
  <div class="row">    
  <div class="col-sm-4 col-sm-offset-2 text-center">
      <a href="sendtest_newsletter.php?cid={$cid}">
      <input type="button" class="btn btn-primary" style="width:95%" value="Send to Test Account"/>
      </a>
  </div>
  
  <div class="col-sm-4 text-center">
      <a href="send_newsletter.php?cid={$cid}&all=true">
      <input type="button" class="btn btn-primary" name="sendAll" style="width:95%" value="Send to all subscribed users"/>
      </a>
  </div>
  </div>
    
  </div>
  <br />
  <br />
  
  </div>
  </div>
