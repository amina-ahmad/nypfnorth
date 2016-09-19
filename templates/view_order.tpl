<div>
    <table align=center width=70% class="insert">
	<tr align="center"><td><div class="box-heading">Orders</div></td></tr></tr>
    </table>
<table align=center width=70% class="border">
     {foreach from=$orders item=o}
	<tr valign='top'>
	    <td width="30%">Order Date</td><td width="30%">{$o.order_date}</td>
	    <td width="22%">Shipping Date</td><td width="16%">{$o.shipping_date}</td>
	    
	</tr>
	<tr valign='top'>
	    <td colspan='2'>
		<table width='100%' align=left border=0><tr>
		
		<tr><td width="50%">Name</td><td>{$o.product_name}</td></tr>
		<tr><td>Model</td><td>{$o.product_model}</td></tr>
		<tr><td colspan="2"><img class='img_border'src="../img/db_images/{$o.image}" width='270px' height = '140px'/></td></tr>
		</tr></table>
	    </td>
	    <td valign='top' colspan="2">
		<table width='80%' align=left><tr>
		<tr><td class="blue">Quantity</td><td>{$o.qty}</td></tr>
		<tr><td class="blue">Unit Price (MYR)</td><td>{$o.price}</td></tr>
		<tr><td class="blue">Extended Price</td><td>{$o.extended_price}</td></tr>
		<tr><td class="blue">Discount</td><td>{$o.discount}</td></tr>
		<tr><td class="blue">Shipping & Handling</td><td>{$o.shipping}</td></tr>
		<tr><td class="blue">Tax</td><td>{$o.tax}</td></tr>
		<tr><td class="blue">Total (MYR)</td><td>{$o.total}</td></tr>
		</tr></table>
	    
	    </td>
	</tr>
	<tr valign='top'>
	    <td>Shipping Method</td><td>{$o.shipping_method}</td>
	    <td>Payment Received?</td><td>{$o.payment}</td>
	</tr>
	<tr valign='top'>
	    <td>Payment Date?</td>
	    <td>
		{if $o.payment_date != '1 January 1970'}
		    {$o.payment_date}
		{/if}
		{if $o.payment_date = '1 January 1970'}
		   
		{/if}
	    </td>
	    
	    <td rowspan="2">Remark</td><td align='left'>{$o.remark}</td>
	</tr>
	<tr valign='top'>
	    <td>Order Status</td><td>{$o.status}</td>
	    <td colspan='2'></td>
	    
	</tr>
	<tr valign='top'>
	    <td>Date Updated</td><td>{$o.date_placed}</td>
	    <td colspan='2'></td>
	</tr>
	
	
	<tr valign='top' align='center' style='background-color: #F8F8F8'><td colspan='4' class="bold_text">Customer Information</td></tr>
	<tr>
	    <td>Name</td><td>{$o.fname} {$o.lname}</td>
	</tr>
	<tr>
	    <td>Phone</td><td>{$o.phone}</td>
	</tr>
	<tr>
	    <td>Email</td><td>{$o.email}</td>
	</tr>
	<tr>
	    <td>Address</td><td>{$o.address}</td>
	</tr>
	<tr colspan='2'>
	    <td><a href="edit_order.php?o_no={$o.order_no}"><input type=button class=button name=edit value="Edit"/></a></td>
	
	</tr>{/foreach}
    </table>
</div>
		