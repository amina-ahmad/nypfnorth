<?php

    require 'loader.php';

  
    if (isset($_GET['cid']))
    {
        $cid = $_GET['cid'];
        
        $query = new general();
        $sql = $query->get_by_value('content', 'ID', $cid);
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
            $dateTime = new DateTime($date);
            $date = date_format($dateTime,"m/d/Y g:i");
            
            $smarty->assign('cid', $cid);
            $smarty->assign('title', $title);
            $smarty->assign('summary', $summary);
            $smarty->assign('full', $full);
            $smarty->assign('picture', $picture);
            $smarty->assign('date', $date);
            $smarty->display('edit_content.tpl');
        }
    }

    
    $smarty->display('footer.tpl');
?>
