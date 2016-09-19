
<div>
    {if (isset($p_id))}
<table align=center width=81% class="red_fill">
	<tr align="center"><td><div>Cars</div></td></tr></tr>
    </table>
    <form action="order.php?p_id={$p_id}" method="post" enctype="multipart/form-data" onSubmit="return validateFormUserOrder(this)">
<table align=center width=80% class="border">
    <tr align="left"><td rowspan="6" width="340px" class='box-product'>
		    <div><img src='img/db_images/{$image_1}' width="280px" height="170px" class="img_border"/></div>
		    <span class="image">
		    {if isset($image_2)}<img src='img/db_images/{$image_2}' width="130px" height="70px"/>{/if}
		    &nbsp
		    {if isset($image_3)}<img src='img/db_images/{$image_3}' width="130px" height="70px"/>{/if}
		    </span>
		</td>
	    <td>Manufacturer</td><td class="blue">:{$manufacturer}</td></tr>
	    <tr height=40px><td>Name</td><td class="blue">:{$name}</td></tr>
	    <tr height=40px><td>Model</td><td class="blue">:{$model}</td></tr>
	    <tr height=40px><td>Price (MYR)</td><td class="blue">:{$price}</td></tr>
	    <tr height=40px><td>Availability</td><td class="blue">:{$status}</td></tr>
            <tr valign='top'><td class="text">Description</td><td class="blue">:{$description}</td></tr>
	  {if $status=='Out of Stock'}
              <tr valign='top' align='center' style='background-color: #FF0000' class="bold_text"><td colspan='3'><font color='#FFFFFF'>This Car is {$status}</font></td></tr>
              {/if}
         {if $status!='Out of Stock'}
              <tr valign='top' align='center' style='background-color: #F8F8F8' class="bold_text"><td colspan='3'>Fill the form below to place an order for the item above</td></tr>
         
	<tr>
	    <td>First Name</td><td colspan='2'><input type="text" name="fname"/></td>
	</tr>
	<tr>
	    <td>Last Name</td><td colspan='2'><input  type="text" name="lname"/></td>
	</tr>
	<tr>
	    <td>Phone</td><td colspan='2'><input type="text" name="phone"/></td>
	</tr>
	<tr>
	    <td>Email</td><td colspan='2'><input type="text" name="email"/></td>
	</tr>
	<tr>
	    <td>Address</td><td colspan='2'><textarea cols="30" rows="2" name="address"/></textarea></td>
	</tr>
        <tr>
            <td>Quantity</td><td colspan='2'><input type="text" name="qty"/></td>
	</tr>
        <tr>
	    <td>Subscribe to Newsletter</td><td colspan='2'><input type="checkbox" name="newsletter" value="Y"/></td>
	</tr>
	<tr align=center>
	    <td colspan='3'>
                <input type="submit" class=button name='save' value="Place Order"/>
                <input type="hidden" name="available_qty" value="{$available_qty}"/>
                <input type="hidden" name="name" value="{$name}"/>
                <input type="hidden" name="price" value="{$price}"/>
                <input type="hidden" name="manufacturer" value="{$manufacturer}"/>
                <input type="hidden" name="model" value="{$model}"/>
	       </td>
	    </tr>    
            {/if}
	</table>
</form>
	{/if}
</div>