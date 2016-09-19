<?php

    require 'loader.php';
    $query = new general();
    $sql = $query->query('system_settings');
    $row = $query->get_result($sql);

    if (!$row)
    {
        $error = mysql_error();
        echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>";
    }
    else if (count($row) < 1)
    {
        echo "<p align='center' class='alert alert-dismissible alert-danger'>There is no system settings to display.</p>";
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

        $smarty->assign('$id', $id);
        $smarty->assign('site_name', $site_name);
        $smarty->assign('site_url', $site_url);
        $smarty->assign('site_icon', $site_icon);
        $smarty->assign('site_email', $site_email);
        $smarty->assign('meta_tag_desc', $meta_tag_desc);
        $smarty->assign('meta_tag_key', $meta_tag_key);
        $smarty->assign('analytics', $analytics);
        $smarty->display('system.tpl');
    }
    $smarty->display('footer.tpl');
?>
