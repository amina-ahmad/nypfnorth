<?php

    require 'loader.php';
    if (isset($_GET['empty']))
    {
        $error = $_GET['empty'];
        echo "<p align='center' class='alert alert-dismissible alert-danger'>$error can not be empty</p>";
        
    }
    
    $smarty->display('new_newsletter.tpl');
    $smarty->display('footer.tpl');
?>
