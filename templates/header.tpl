<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$site_name}</title>

<meta name="description" content="{$meta_tag_desc}" />
<meta name="keywords" content="{$meta_tag_key}" />
<link rel="shortcut icon" href="img/db_images/{$site_icon}" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
<link rel="stylesheet" type="text/css" href="css/pagination.css" />
<script type="text/javascript" src="js/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/jquery/nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery/nivo-slider/jquery.nivo.slider.pack"></script>
</head>

<body>
<div id="container">
<div style="min-height: 100%">
    <table id="header" width="100%">
<tr>
   <td id="logo"><a href=""><img src="img/edealer_2.png" title="" alt="" /></a></td>
  
   <td align="right">
    <form action="search_cars.php" method="post" enctype="multipart/form-data" name="search" onSubmit="return validateFormSearch(this)">
 <input id="search-box" name="search_item" size="40" type="text" placeholder="Search..."/>
<input id="search-btn" value="Search" type="submit"/>
</form>
  </td>
</tr>
    </table>
</div>
    
<div id="menu">
  <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="cars.php">Cars</a></li>      
      <li><a href="about.php">About Us</a></li>
      <li><a href='contact.php'>Contact Us</a></li>
      <li><a href="faq.php">FAQ</a></li>
   
  </ul>
</div>
