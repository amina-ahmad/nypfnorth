
{if (isset($member))}
  <table class="table table-stripped table-hover">
  <thead>
    <tr class="table success">
      <th>#</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Profession</th>
      <th>Location (Country)</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$member item=m}
    <tr>
        <td> </td>
        <td><a href="view_member.php?mid={$m.mid}">{$m.fname} {$m.lname}</a></td>
        <td>{$m.phone}</td>
        <td>{$m.email}</td>
        <td>{$m.profession}</td>
        <td>{$m.country}</td>
    </tr>
  {/foreach}
  </tbody>
  </table>
  <div class="panel-footer text-center">
  {if (isset($pagination))} 
    <ul class="pagination">{$pagination}</ul>
  {/if}
  </div>
{/if}