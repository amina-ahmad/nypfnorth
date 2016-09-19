<?php

class picture
   {

   var $target;
   var $old_target;
   var $old_image;
   var $image;
   var $id;
   var $caption;

   function upload($new_target, $new_image, $pic_id)
   {
	  $this->image = $new_image;
	  $this->target = $new_target . $new_image;

	  if ((pathinfo($this->target, PATHINFO_EXTENSION) == 'jpg') || (pathinfo($this->target, PATHINFO_EXTENSION) == 'jpeg') || (pathinfo($this->target, PATHINFO_EXTENSION) == 'png' ) || (pathinfo($this->target, PATHINFO_EXTENSION) == 'gif'))
	  {
		 if ($_FILES["picture" . $pic_id]["error"] > 0)
		 {
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		 }
		 else
		 {
			if (move_uploaded_file($_FILES['picture'.$pic_id]['tmp_name'], $this->target))
			{
			   return true;
			   
			}
			else
			{
			   return false;
			}
		 }
	  }
	  else
	  {
		 echo "<p align ='center' class='alert alert-dismissible alert-danger'>Incorrect image format <strong>'" . pathinfo($this->target, PATHINFO_EXTENSION) . "'</strong>. Only 'jpeg','jpg','png' and 'gif' images are supported</p>";
		 return false;
	  }
   }

   }
?>