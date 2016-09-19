<?php

    require 'loader.php';
    $per_page = 4;

    $query = new general();
    $sql = $query->get_by_value('content', 'type', 'newsletter');
    $row = $query->get_all_result($sql);
    $total_results = count($row);
    
    if (isset($_GET['del']))
    {
        $c_id = $_GET['cid'];
        $delete = $query->delete('content', 'ID', $c_id);
        header("location:newsletter.php");
    }

    if ($per_page > $total_results)
    {
        $total_pages = 0;
    }
    else
    {
        $total_pages = ceil($total_results / $per_page); //total pages we going to have
    }
    
    if (isset($_POST['new']))
    {
        if ($_POST['title'] == "")
        {
            header("location:new_newsletter.php?empty=Title");

        }
        
        else if ($_POST['full'] == "")
        {
             header("location:new_newsletter.php?empty=Content");
        }
        
        else
        {
            $title = mysql_real_escape_string($_POST['title']);
            $summary = "none";
        
            $full = $_POST['full'];
            $entity_full = htmlentities($full);
            $entity_full = mysql_real_escape_string($full);
            $picture = "none";
            
            
            $date = date("Y/m/d");
            $type = "newsletter";
            
            
            $contents = new content();
            $contents->new_content($title, $summary, $full, $picture, $date, $type);
        }
    }
   
    if (!$row)
    {
        $error = mysql_error();
        echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no newsletters to display.</p>";
    }
    else if (count($row) < 1)
    {
        echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no newsletters to display.</p>";
    }
    else
    {
        if (!isset($_GET['page']))
        {
            $page = 1;
            $show_page = $page;
        }

        if (isset($_GET['page']))
        {
            $show_page = $_GET['page'];             //it will telles the current page
            if ($show_page > 0 && $show_page <= $total_pages)
            {
                $start = ($show_page - 1) * $per_page;
                if ($per_page > count($row))
                {
                    $per_page = count($row);
                }
                $end = $start + $per_page;
            }
            else
            {
                // error - show first set of results
                $start = 0;
                if ($per_page > count($row))
                {
                    $per_page = count($row);
                }
                $end = $per_page;
            }

            $page = intval($_GET['page']);
        }
        else
        {
            // if page isn't set, show first set of results
            $start = 0;
            if ($per_page > count($row))
            {
                $per_page = count($row);
            }
            $end = $per_page;
        }
// display pagination

        $tpages = $total_pages;
        if (($page <= 0) || ($page == ""))
            $page = 1;

        $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
    
    if ($total_pages > 1)
    {
        $smarty->assign('pagination', paginate($reload, $show_page, $total_pages));
    }

    for ($i = $start; $i < $end; $i++)
    {
        // make sure that PHP doesn't try to show results that don't exist
        if ($i == $total_results)
        {
            break;
        }

        $newsletters = new content($row[$i]);            
        $ArrayNewsletter[] = array('cid' => $newsletters->id, 'title' => $newsletters->title, 'full' => $newsletters->full,'picture' => $newsletters->picture, 'date' => $newsletters->date, 'created' => $newsletters->created,
        'modified' => $newsletters->modified, 'type' => $newsletters->type);
    }
    if (isset($ArrayNewsletter))
    {
        $smarty->assign('newsletters', $ArrayNewsletter);
    }
    }
    $smarty->display('newsletter.tpl');
    $smarty->display('footer.tpl');
?>
