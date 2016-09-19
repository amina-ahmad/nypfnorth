<?php

    require '../smarty/libs/Smarty.class.php';
    require '../smarty/configs/config.php';
    require '../smarty/libs/general_lib.php';
    require '../smarty/libs/member_lib.php';
    require '../smarty/libs/user_lib.php';
    connect();
    session_start();
    $smarty = new Smarty;
    $smarty->display('login_header.tpl');

    if (isset($_GET['session_exp']))
    {
        echo "<p align='center' class='alert alert-dismissible alert-danger'>Session Expired. Login again to continue.</p>";
    }
    else
    {

        //recovering password
        if (isset($_POST['recover']))
        {
            $email = $_POST['email'];
            $query = new general();
            $sql = $query->get_by_value('members', 'Email', $email);
            $row = $query->get_result($sql);

            if (!$row)
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>";
                echo "<p align='center' class='alert alert-dismissible alert-danger'>Cannot find this account.</p>";
            }
            else
            {
                $recover = new user($row);
                $password = $recover->password;
                $recover->password_recovery($email, $password);
            }
        }
    }
    $smarty->display('forgot.tpl');
?>
