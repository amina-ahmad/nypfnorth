<?php

    class system
    {

        var $id;
        var $site_name;
        var $site_url;
        var $site_icon;
        var $meta_tag_desc;
        var $meta_tag_key;
        var $analystics;
        var $site_email;

        //constructor	
        public function system($row = Null)
        {

            $this->id = $row['ID'];
            $this->site_name = $row['site_name'];
            $this->site_url = $row['site_url'];
            $this->site_icon = $row['site_icon'];
            $this->meta_tag_desc = $row['meta_tag_desc'];
            $this->meta_tag_key = $row['meta_tag_key'];
            $this->analytics = $row['analytics'];
            $this->site_email = $row['site_email'];
        }

        //creates (site)settings	
        public function new_settings($new_site_name, $new_site_url, $new_site_icon, $new_meta_tag_desc, $new_meta_tag_key, $new_analytics, $new_site_email)
        {
            $this->site_name = $new_site_name;
            $this->site_url = $new_site_url;
            $this->site_icon = $new_site_icon;
            $this->meta_tag_desc = $new_meta_tag_desc;
            $this->meta_tag_key = $new_meta_tag_key;
            $this->analystics = $new_analytics;
            $this->site_email = $new_site_email;

            $sql = "INSERT INTO system_settings (`ID`, `site_name`, `site_url`, `site_icon`, `meta_tag_desc`, `meta_tag_key`, `analytics`, `site_email`) VALUES (null, '$this->site_name', '$this->site_url', '$this->site_icon', '$this->meta_tag_desc','$this->meta_tag_key', '$this->analystics', '$this->site_email')";


            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Settings saved successfully!</p>";
            }
        }
        
        //updates system (site) settings
        public function update_settings($new_id,$new_site_name, $new_site_url, $new_meta_tag_desc, $new_meta_tag_key, $new_site_email)
        {
            $this->id = $new_id;
            $this->site_name = $new_site_name;
            $this->site_url = $new_site_url;
            $this->meta_tag_desc = $new_meta_tag_desc;
            $this->meta_tag_key = $new_meta_tag_key;
            $this->site_email = $new_site_email;

            $sql = "UPDATE system_settings SET `site_name` = '$this->site_name', `site_url` = '$this->site_url', `meta_tag_desc` = '$this->meta_tag_desc', `meta_tag_key`= '$this->meta_tag_key', `site_email` = '$this->site_email' WHERE `ID` = $new_id";

            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Settings updated successfully!</p>";
            }
        }
        
        //updates sites google analytics in system settings	
        public function update_analytics($new_id, $new_analytics)
        {
            $this->id = $new_id;
            $this->analytics = $new_analytics;

            $sql = "UPDATE system_settings SET `analytics` = '$this->analytics' WHERE `ID` = $new_id";
           
            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Google Analytics Code updated successfully!</p>";
            }
        }
        
      
    }