<br />
<br/>
<div class="container" style="width:90%">
    <div class="row">
        <div class="col-sm-12 text-right">
          <a href="new_newsletter.php">
          <input type="button" class="btn btn-primary" value="Add Newsletter" name="new_newsletter"/>
          </a>
        </div> 
    </div>
    <br />
<div class="panel panel-success">
  <div class="panel-heading text-center">Newsletter</div>
 {if (isset($newsletters))}
 <div class="panel-body">
  <div class="row">
  <div class="col-sm-6 text-left"><h4>Title</h4></div>
  <div class="col-sm-3 text-center"><h4>Date</h4></div>
  <div class="col-sm-3 text-center"><h4>Modified</h4></div>
  </div>
  {foreach from=$newsletters item=n}
  <div class="row">
  <div class="col-sm-6 text-left"><a href="view_newsletter.php?cid={$n.cid}">{$n.title}</a></div>
  <div class="col-sm-3 text-center">{$n.date}</div>
  <div class="col-sm-3 text-center">{$n.modified}</div>
  </div>
  <br />
  {/foreach}
  </div>
  <div class="col-sm-12 text-center">
  {if (isset($pagination))} 
  <ul class="pagination">
  <li>{$pagination}</li>
  </ul>
  {/if}
  </div>
 {/if}
 </div>
 </div>