<?php

    require 'loader.php';

    if (isset($_POST['save']))
    {
            $cid = $_POST['cid'];
            $title = mysql_real_escape_string($_POST['title']);
            $summary = "none";
            $full = $_POST['full'];
            $entity_full = htmlentities($full);
            $entity_full = mysql_real_escape_string($full);
            $date = date("Y/m/d");
            $type = "newsletter";
            
            
            $contents = new content();       
            $contents->update_content($cid, $title, $summary, $full, $date, $type);
    }

  
    if (isset($_GET['cid']))
    {
        $cid = $_GET['cid'];
        
        $query = new general();
        $sql = $query->get_by_value('content', 'ID', $cid);
        $row = $query->get_result($sql);

        if (!$row)
        {
            $error = mysql_error();
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no Newsletters to display.</p>";
        }
        
        else if (count($row) < 1)
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no Newsletters to display.</p>";
        }
        
        else
        {
            $contents = new content($row);
            $cid = $contents->id;
            $title = $contents->title;
            $full = $contents->full;
            $date = $contents->date;
            $dateTime = new DateTime($date);
            $date = date_format($dateTime,"m/d/Y g:i");
            
            
            $smarty->assign('cid', $cid);
            $smarty->assign('title', $title);
            $smarty->assign('full', $full);
            $smarty->assign('date', $date);
            $smarty->display('edit_newsletter.tpl');
        }
    }

    
    $smarty->display('footer.tpl');
?>
