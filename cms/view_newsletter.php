<?php

    require 'loader.php';
    $query = new general();
    
    if (isset($_GET['success']))
    {
        if ($_GET['success'] == 'true')
            echo"<p align='center' class='alert alert-dismissible alert-info'>Newsletter is being sent. It might take a few minutes to complete the process.</p>";
    }
    
    if (isset($_GET['cid']))
    {
        $cid = $_GET['cid'];
        $sql = $query->get_by_value('content', 'ID', $cid);
        $row = $query->get_result($sql);

        if (!$row)
        {
            $error = mysql_error();
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There is no newsletter to display.</p>";
        }
        else if (count($row) < 1)
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There is no newsletter to display.</p>";
        }
        else
        {
            $newsletter= new content($row);
            $cid = $newsletter->id;
            $title = $newsletter->title;
            $full = $newsletter->full;
            $created = $newsletter->created;
            $modified = $newsletter->modified;
            $type = $newsletter->type;
            
            $smarty->assign('cid', $cid);
            $smarty->assign('title', $title);
            $smarty->assign('full', $full);
            $smarty->assign('created', $created);
            $smarty->assign('modified', $modified);
            $smarty->assign('type', $type);
        }
    }

    $smarty->display('view_newsletter.tpl');
    $smarty->display('footer.tpl');
?>
