<?php

    require 'loader.php';
    $query = new general();
    $sql = $query->query('system_settings');
    $row = $query->get_result($sql);

    if (isset($_POST['edit']))
    {

        $sid = $_POST['sid'];
        $sname = mysql_real_escape_string($_POST['sname']);
        $surl = mysql_real_escape_string($_POST['surl']);
        $semail = mysql_real_escape_string($_POST['semail']);
        $mtdesc = mysql_real_escape_string($_POST['mtdesc']);
        $mtkey = mysql_real_escape_string($_POST['mtkey']);
       
        if(!empty($_FILES['picture1']['name']))
        {
            $path = "../img/db_images/";
            $icon = ($_FILES['picture1']['name']);
            $random_digit = rand(0000, 9999);
            $icon = $random_digit . $icon;
        
            $pictures = new picture();    
            if($pictures->upload($path, $icon, 1))
            {
                $query->update('system_settings', 'site_icon', $icon, 'id', $sid);
            }
            
        }
            
        $system = new system();
        $system->update_settings($sid, $sname, $surl, $mtdesc, $mtkey, $semail);
    }

    if (!$row)
    {
        $error = mysql_error();
        echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>";
    }
    else if (count($row) < 1)
    {
        echo "<p align='center' class='alert alert-dismissible alert-warning'>There is no system settings to display.</p>";
    }
    else
    {

        $setting = new system($row);

        $id = $setting->id;
        $site_name = $setting->site_name;
        $site_url = $setting->site_url;
        $site_icon = $setting->site_icon;
        $site_email = $setting->site_email;
        $meta_tag_desc = $setting->meta_tag_desc;
        $meta_tag_key = $setting->meta_tag_key;
        $analytics = $setting->analytics;

        $smarty->assign('id', $id);
        $smarty->assign('site_name', $site_name);
        $smarty->assign('site_url', $site_url);
        $smarty->assign('site_icon', $site_icon);
        $smarty->assign('site_email', $site_email);
        $smarty->assign('meta_tag_desc', $meta_tag_desc);
        $smarty->assign('meta_tag_key', $meta_tag_key);
        $smarty->assign('analytics', $analytics);

        $smarty->display('edit_system.tpl');
    }
    $smarty->display('footer.tpl');
?>
