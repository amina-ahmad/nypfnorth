<br>

{if (isset($products))}
    <table align=center width=90% class="red_fill">
	<tr align="center"><td><div>Cars</div></td></tr></tr>
    </table>
	     <table align=center width=89% class="mystyle">
                 <tr><td class="bold_text">Name</td><td class="bold_text">Model</td><td class="bold_text">Manufacturer</td><td class="bold_text">Price</td><td colspan="2"></td></tr>
{foreach from=$products item=p}
    <tr><td>{$p.name}</td><td>{$p.model}</td><td>{$p.manufacturer}</td><td>RM{$p.price}</td><td width="80px"><img src="img/db_images/{$p.image}" class='img_border' width='80px' height = '50px'/></td><td width="80px" align="center"><a href="place_order.php?p_id={$p.product_id}"><input type=button class=button name=order value="View"/></a></td>
    </tr>
	{/foreach}
	     </table>
        <br>
{if (isset($pagination))}        
	 <table align=center width=80%>
             <tr><td width=20%></td><td colspan="7" align="center"><div class="pagination"><ul>{$pagination}</ul></div></td><td width=20%></td></tr>
    </table>
             {/if}
{/if}
