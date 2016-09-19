<?php

    require 'loader.php';

    $query = new general();

    if (isset($_GET['all']))
    {
        
        $all = $_GET['all'];
        
        if ($all == "true")
        {
            echo "thats all";
            if (isset($_GET['cid']))
            {
                $cid = $_GET['cid'];
                $sql_1 = $query->get_by_value('content', 'ID', $cid);
                $row_1 = $query->get_result($sql_1);
    
                if (!$row_1)
                {
                    $error = mysql_error();
                    echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no Newsletters to display.</p>";
                }
                
                else if (count($row_1) < 1)
                {
                    echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no Newsletters to display.</p>";
                }
                else
                {
                    $newsletter = new content($row_1);
                    $cid = $newsletter->id;
                    $title = $newsletter->title;
                    $content = $newsletter->full;
                    
                    $sql = $query->get_by_value('members', 'Newsletter', 'Y');
                    $row = $query->get_all_result($sql);
                    
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
    
                        $newsletters = new newsletter();
                        for ($i = 0; $i < count($row); $i++)
                        {
                            $member = new member($row[$i]);
                            $fname = $member->fname;
                            $lname = $member->lname;
                            $email = $member->email;
                            $newsletters->send_newsletter($fname,$lname, $email, $title, $content);
                            
                        }
                       
                       header("location:view_newsletter.php?success=true&cid=$cid");
                    }
                }
            }
        
        }    
    }
    
    else if (isset($_POST['test']))
    {
        if (isset($_POST['cid']))
        {
            $cid = $_POST['cid'];
            $sql_1 = $query->get_by_value('content', 'ID', $cid);
            $row_1 = $query->get_result($sql_1);

            if (!$row_1)
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no Newsletters to display.</p>";
            }
            
            else if (count($row_1) < 1)
            {
                echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no Newsletters to display.</p>";
            }
            
            else
            {
                $newsletter = new content($row_1);
                $cid = $newsletter->id;
                $title = $newsletter->title;
                $content = $newsletter->full;

                $email = mysql_real_escape_string($_POST['email']);
                $newsletters = new newsletter();
                if ($newsletters->send_newsletter('Test','User',$email, $title, $content))
                {
                    header("location:view_newsletter.php?success=true&cid=$cid");
                }
            }
        }
    }
?>
