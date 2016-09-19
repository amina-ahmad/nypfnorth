
<div>
    <form action="register.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormUser(this)">
    <table width='300px'class=form>
	<tr>
	    <td>First Name<td><td><input type="text" name="fname"/></td>
	</tr>
	<tr>
	    <td>Last Name<td><td><input type="text" name="lname"/></td>
	</tr>
	<tr>
	    <td>User Name<td><td><input type="text" name="username"/></td>
	</tr>
	<tr>
	    <td>Password</td><td><input class=input type="password" name="password" id="password" /></td>
	</tr>
	<tr>
	    <td>confirm</td><td><input type="password" name="confirm" id="confirm" /></td>
	</tr>
	<tr>
	    <td>Email<td><td><input type="text" name="email"/></td>
	</tr>
	<tr>
	    <td>Phone<td><td><input type="text" name="phone"/></td>
	</tr>
	<tr>
	    <td>Subscribe to Newsletter<td><td><input type="checkbox" name="newsletter" value="Y"/></td>
	</tr>
	<tr colspan='2'>
	    <td><input class=button type="submit" name="save" value="Register"/></td>
	</tr>
    </table>
	</form>
</div>
{include file="footer.tpl"}