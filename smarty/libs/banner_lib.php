<?php

class banner
{
	
	var $id;
	var $pic;
	var $caption;
	var $link;
	
	//creates banner	
	public function banner($row=NULL)
	{
		$this->id = $row['ID'];
		$this->pic = $row['Pic'];
		$this->caption = $row['Caption'];
		$this->link = $row['Link'];
	}
    
	//creates new banner	
	public function new_banner($new_pic, $new_caption, $new_link)
	{
		$this->pic = $new_pic;
		$this->caption = $new_caption;
		$this->link = $new_link;
						
		$sql= "INSERT INTO banner (ID,pic,caption,link) VALUES (null, '$this->pic', '$this->caption','$this->link' )"; 
				
		if (!mysql_query($sql)) 
		{
			 $error = mysql_error(); 
			 echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>"; 
			 return false;
		}
					 
		else
		{
			 echo "<p align='center' class='alert alert-dismissible alert-success' >Banner Successfully Created!</p>"; 
			 return true;
					 
		}		
	}
	
    //creates new banner	
	public function update_banner($new_id, $new_caption, $new_link)
	{
	    $this->id = $new_id;
		$this->caption = $new_caption;
		$this->link = $new_link;
						
		$sql = "UPDATE `banner` SET `Caption` = '$this->caption', 
            `Link` = '$this->link' WHERE id = $this->id";
		
		if (!mysql_query($sql)) 
		{
			 $error = mysql_error(); 
			 echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>"; 
			 return false;
		}
					 
		else
		{
			 echo "<p align='center' class='alert alert-dismissible alert-success' >Banner Successfully Updated!</p>"; 
			 return true;
					 
		}		
	}
		
}