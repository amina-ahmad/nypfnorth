<div class="slideshow">
  <div id="slideshow" class="nivoSlider" style="width:980px; height:280px;">
    {foreach from=$banners item=k}
	<img src="img/db_images/{$k.pic}"/>
	{/foreach}
  </div>
</div>
<script>
    $(window).load(function()
    {
        $('#slideshow').nivoSlider();
    });
</script>

{if (isset($products))}
<table align=left width=100%>
<tr><td>
    <table align=center width=100%>
	<tr align="center"><td><div class="red_fill">Latest Cars</div></td></tr></tr>
    </table>
        </td>
</tr>
</table>
<br>
<table align=left>
<tr>
{foreach from=$products item=p}
    <td style="padding:16px;"><div><a href="place_order.php?p_id={$p.product_id}"><img src="img/db_images/{$p.image}" class='img_border' width='120px' height = '70px'/></a></div><b>{$p.name}</b><br>RM{$p.price}<br><a href="place_order.php?p_id={$p.product_id}"><input type=button class=button name=order value="Contact Dealer"/></a></td>{/foreach}
</tr>
</table>
<br>
    {/if}
            <br>
<table align=left width=100%>
    <tr><td width=45%>
{if (isset($latestview))}            
<table align=left width=100% class="border" valign=top>
    <tr><td width=100% align="center" valign=top colspan=4><strong>Recently Viewed Items</strong></td>
</tr>

 
<tr>
{foreach from=$latestview item=l}
    <td style="padding:5px;"><div><a href="place_order.php?p_id={$l.product_id}"><img src="img/db_images/{$l.image}" class='img_border' width='80px' height = '50px'/></a></div><b>{$l.name}</b><br>RM{$l.price}</td>{/foreach}
</tr>
{/if}
{if (!isset($latestview))}            
<table align=left width=100% valign='top'>
    <tr><td width=100% align="center" valign=top colspan=4>&nbsp;</td></tr>
{/if}    
</table>
</td>
<td valign=top width=40% align=right><br><br><br><br>
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fedealer.comyr.com%2F&amp;width=350&amp;height=80&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;send=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:80px;" allowTransparency="true"></iframe>
 </td>
 <td valign=top width=15% align=left><br><br><br><br>
     <a href="https://twitter.com/share" class="twitter-share-button" data-via="edealer1" data-size="large">Tweet</a>
{literal}<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>{/literal}</td>
</tr>
 </table>
        