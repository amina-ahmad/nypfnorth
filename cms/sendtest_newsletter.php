<?php

    require 'loader.php';
    
    if (isset($_POST['test']))
    {
            $email = $_POST['email'];
            header("location:cron_test_newsletter.php?e=$email");

            
    }
    
    
    if (isset($_GET['cid']))
    {   
        $cid = $_GET['cid'];
        $smarty->assign('cid', $cid);
        $smarty->display('sendtest_newsletter.tpl');
    }
    $smarty->display('footer.tpl');
?>
