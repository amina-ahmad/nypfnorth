{include file="header.tpl"}
<div>
    <form action="banner.php" method="post" enctype="multipart/form-data" name="banner_form" onSubmit="return validateFormMessage(this)">
    <table align='center' width='500px' class=form>
	<tr>
	    <td>Banner<td><td><input type="file" name="picture"/></td>
	</tr>
	<tr>
	    <td>Description<td><td><input type="text" name="desc"/></td>
	</tr>
	<tr>
	    <td>Link<td><td><input type="text" name="link"/></td>
	</tr>
	<tr colspan='2'>
	    <td><input type="submit" name="save" value="Save"/></td>
	</tr>
    </table>
	</form>
</div>
{include file="footer.tpl"}