<?php

    require 'loader.php';
    $per_page = 10;

    $query = new general();
    $sql = $query->query('content');
    $row = $query->get_all_result($sql);
    $total_results = count($row);

    if (isset($_GET['del']))
    {
        $c_id = $_GET['cid'];
        $sql = $query->delete('content', 'ID', $c_id);
        header("location:content.php");
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
        if ($_POST['date'] == "")
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>Date cannot be empty.</p>";
            header("location:new_content.php");
        }
        
        else if ($_POST['title'] == "")
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>Title cannot be empty.</p>";
            header("location:new_content.php");
        }
        
        else if ($_POST['summary'] == "")
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>Summary cannot be empty.</p>";
            header("location:new_content.php");
        }
        
        else if ($_POST['full'] == "")
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>Full content cannot be empty.</p>";
            header("location:new_content.php");
        }
        
        
        else
        {
            $title = mysql_real_escape_string($_POST['title']);
            $summary = $_POST['summary'];
            $entity_summary = htmlentities($summary);
            $entity_summary = mysql_real_escape_string($entity_summary);
        
            $full = $_POST['full'];
            $entity_full = htmlentities($full);
            $entity_full = mysql_real_escape_string($full);
            $c_date = $_POST['date'];
            $phpdate = strtotime( $c_date );
            $date = date( 'Y-m-d', $phpdate );

            $type = "article";
            
            if(!empty($_FILES['picture1']['name']))
            {
                $path = "../img/db_images/";
                $picture = ($_FILES['picture1']['name']);                
                $random_digit = rand(0000, 9999);
                $picture = $random_digit.$picture;
                
                $pictures = new picture();    
                $pictures->upload($path, $picture, 1);
                
            }
            
            else
            {
                $picture = 'none';
            }
            
            $contents = new content();
            $contents->new_content($title, $summary, $full, $picture, $date, $type);
        }
        
    }
    
    if (isset($_POST['edit']))
    {
      
            $cid = $_POST['cid'];
            $title = mysql_real_escape_string($_POST['title']);
            $summary = $_POST['summary'];
            $entity_summary = htmlentities($summary);
            $entity_summary = mysql_real_escape_string($entity_summary);
            $full = $_POST['full'];
            $entity_full = htmlentities($full);
            $entity_full = mysql_real_escape_string($full);
            
            $c_date = $_POST['date'];
            $phpdate = strtotime( $c_date );
            $date = date( 'Y-m-d', $phpdate );

            $type = "article";
            
            if(!empty($_FILES['picture1']['name']))
            {
                $path = "../img/db_images/";
                $picture = ($_FILES['picture1']['name']);                
                $random_digit = rand(0000, 9999);
                $picture = $random_digit.$picture;
                
                $pictures = new picture();    
                if($pictures->upload($path, $picture, 1))
                {
                  $query->update('content', 'picture', $picture, 'id', $cid);
                
                }
            
            }
           
            $contents = new content();
            $contents->update_content($cid, $title, $summary, $full, $date, $type);

    }
    
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
    }
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

        $contents = new content($row[$i]);            
        $ArrayContent[] = array('cid' => $contents->id, 'title' => $contents->title, 'summary' => $contents->summary,
        'full' => $contents->full,'picture' => $contents->picture, 'date' => $contents->date, 'created' => $contents->created,
        'modified' => $contents->modified, 'type' => $contents->type);
    }
    if (isset($ArrayContent))
    {
        $smarty->assign('contents', $ArrayContent);
    }
    $smarty->display('content.tpl');
    $smarty->display('footer.tpl');
?>
