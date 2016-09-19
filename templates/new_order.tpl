{literal}
<script type="text/javascript">
        $(document).ready(function(){
            $('#product').change(function(){
		if($(this).val() !='select')
		{
                //Retrieve Content from the back-end PHP page, and pass the ID selected
                var url = 'div_product.php?p_id=' + $(this).val();
            $('#display_area').show();    
	    $('#display_area').load(url);
		}
		else 
		    {
			$('#display_area').hide();
		    }
		    
            });
        });
	

$(function() {
$( "#o_datepicker" ).datepicker();
});

$(function() {
$( "#s_datepicker" ).datepicker();
});

$(function() {
$( "#p_datepicker" ).datepicker();
});

</script>
{/literal}
<div>
    <table align=center width=80% class="red_fill">
	<tr align="center"><td><div>Orders</div></td></tr></tr>
    </table>
    <form action="new_order.php" method="post" enctype="multipart/form-data" onSubmit="return validateFormOrder(this)">
	<table align=center width=80% class="border">
	<tr valign='top'>
	    <td>Car</td>
	    <td>
		<select name='product' id='product'>
		
		<option value="select">Select</option>
		    {foreach from=$products item=p}
			<option value="{$p.product_id}-{$p.price}-{$p.name}-{$p.qty}">{$p.name}</option>
		    {/foreach}
		</select>
			
	    </td><td colspan="2" valign='top'><div id='display_area'></div></td>
	</tr>
	<tr valign='top'>
	    <td>Order Date</td><td><input type="text" id="o_datepicker" name="o_date" readonly='true' /></td>
	    <td>Shipping Date</td><td><input type="text" id="s_datepicker" name="s_date" readonly='true'/></td>
	</tr>
	<tr valign='top'>
	    <td>Quantity</td><td><input type="text" name="qty"/></td>
	    <td>Shipping Method</td><td><input type="text" name="method"/></td>
	</tr>
	<tr valign='top'>
	    <td>Discount</td><td><input type="text" name="discount"/></td>
	    <td>Shipping & Handling</td><td><input type="text" name="shipping"/></td>
	</tr>
	<tr valign='top'>
	    <td>Tax</td><td align='left'><input type="text" name="tax"/></td>
	    <td>Remark</td><td  align='left' rowspan='4'>
		<textarea name="remark" cols="25" rows='4'></textarea>
	    </td>
	</tr>
	<tr valign='top'>
	    <td>Payment Recieved?</td><td colspan="2" align='left'>
		<select name="payment">
		   <option value="Yes">Yes</option>
		   <option value="No">No</option>
		</select>
	    </td> 
	    </tr>
	    <tr>
		<td>Payment Date</td><td colspan="2" align='left'><input type="text" id="p_datepicker" name="p_date" value='00-00-0000' readonly='true'/></td>
	    </tr>
	    <tr>
	    <td>Order Status</td><td align='left' colspan='2'>
		<select name="order_status">
		   <option value="Pending">Pending</option>
		   <option value="In Progress">In Progress</option>
		   <option value="Complete">Complete</option>
		   <option value="Cancelled">Cancelled</option>
		</select>
	    </td>
	</tr>
	
	<tr valign='top' align='center' style='background-color: #F8F8F8' class="bold_text"><td colspan='4'>Customer Information</td></tr>
	<tr>
	    <td>First Name</td><td><input type="text" name="fname"/></td>
	</tr>
	<tr>
	    <td>Last Name</td><td><input  type="text" name="lname"/></td>
	</tr>
	<tr>
	    <td>Phone</td><td><input  type="text" name="phone"/></td>
	</tr>
	<tr>
	    <td>Email</td><td><input  type="text" name="email"/></td>
	</tr>
	<tr>
	    <td>Address</td><td><textarea cols="30" rows="2" name="address"/></textarea></td>
	</tr>
	<tr colspan='2'>
	    <td><input class=button type="submit" name="save" value="Save"/></td>
	</tr>
    </table>
	</form>
</div>
		