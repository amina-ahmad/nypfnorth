<?php

    session_start();
    require '../smarty/libs/Smarty.class.php';
    require '../smarty/configs/config.php';
    require '../smarty/libs/general_lib.php';
    require '../smarty/libs/member_lib.php';
    require '../smarty/libs/picture_lib.php';
    require '../smarty/libs/banner_lib.php';
    require '../smarty/libs/content_lib.php';
    require '../smarty/libs/newsletter_lib.php';
    require '../smarty/libs/unit_lib.php';
    require '../smarty/libs/user_lib.php';
    require '../smarty/libs/system_settings_lib.php';
    require 'pagination.php';
    connect();
    $smarty = new Smarty;
    if (!isset($_SESSION['id']))
    {
        header("location:index.php?session_exp=1");
    }
    else
    {
        $session_id = $_SESSION['id'];
    }
   
    $new = new general();
    
    $sql = $new->query('system_settings');
    $row = $new->get_result($sql);

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
        $site_name = $setting->site_name;
        $site_url = $setting->site_url;
        $site_icon = $setting->site_icon;
        $site_email = $setting->site_email;
        $meta_tag_desc = $setting->meta_tag_desc;
        $meta_tag_key = $setting->meta_tag_key;

        $smarty->assign('site_name', $site_name);
        $smarty->assign('site_url', $site_url);
        $smarty->assign('site_icon', $site_icon);
        $smarty->assign('meta_tag_desc', $meta_tag_desc);
        $smarty->assign('meta_tag_key', $meta_tag_key);
    }
    $smarty->display('header.tpl');
?>
