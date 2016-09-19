<?php

    require '../smarty/libs/Smarty.class.php';
    require '../smarty/configs/config.php';
    require '../smarty/libs/general_lib.php';
    require '../smarty/libs/member_lib.php';
    require '../smarty/libs/system_settings_lib.php';
    
    connect();
    session_start();
    $smarty = new Smarty;
  
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
      $smarty->display('login_header.tpl');

    if (isset($_GET['session_exp']))
    {
        echo "<p align='center' class='alert alert-dismissible alert-danger'>Session Expired. Login again to continue.</p>";
    }
    else
    {
        //getting and validating login details
        if (isset($_POST['login']))
        {
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $login = new member();
            $login->login($email, $pass);
        }
    }
    $smarty->display('index.tpl');
    $smarty->display('login_footer.tpl');
    
?>
