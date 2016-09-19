<?php

    require 'loader.php';

    $query = new general();

    if (isset($_GET['cid']))
    {
        $cid = $_GET['cid'];
        $sql = $query->get_by_value('content', 'id', $cid);
        $row = $query->get_result($sql);

        if (!$row)
        {
            $error = mysql_error();
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no contents to display.</p>";
        }
        else if (count($row) < 1)
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no contents to display.</p>";
        }
        else
        {
            $contents = new content($row);
            $cid = $contents->id;
            $title = $contents->title;
            $summary = $contents->summary;
            $full = $contents->full;
            $picture = $contents->picture;
            $date = $contents->date;
            $created = $contents->created;
            $modified = $contents->modified;
            $type = $contents->type;
            
            $dateTime = new DateTime($date);
            $date = date_format($dateTime,"j F Y");
            $dateTime = new DateTime($created);
            $created = date_format($dateTime,"j F Y g:ia");
            $dateTime = new DateTime($modified);
            $modified = date_format($dateTime,"j F Y g:ia");
        
            
            $smarty->assign('cid', $cid);
            $smarty->assign('title', $title);
            $smarty->assign('full', $full);
            $smarty->assign('summary', $summary);
            $smarty->assign('picture', $picture);
            $smarty->assign('date', $date);
            $smarty->assign('created', $created);
            $smarty->assign('modified', $modified);
            $smarty->assign('type', $type);
        }
    }

    $smarty->display('view_content.tpl');
    $smarty->display('footer.tpl');
?>
