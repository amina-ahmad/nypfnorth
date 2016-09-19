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
        echo "<p align='center' class='alert alert-dismissible alert-danger'>There is no analytics information to display.</p>";
    }
    else
    {

        $setting = new system($row);

        $id = $setting->id;
        $site_name = $setting->site_name;
        $site_url = $setting->site_url;
        $analytics = $setting->analytics;

        $smarty->assign('$id', $id);
        $smarty->assign('site_name', $site_name);
        $smarty->assign('site_url', $site_url);
        $smarty->assign('analytics', $analytics);
        $smarty->display('analytics.tpl');
    }
    $smarty->display('footer.tpl');
?>
