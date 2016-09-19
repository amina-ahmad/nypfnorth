<?php

    require 'loader.php';
    $query = new general();
    $sys_mail = $query->query('system_settings');
    $row_sys_mail = $query->get_result($sys_mail);
    $system = new system($row_sys_mail);
    $system_email = $system->site_email;
        
    $sql = $query->get_by_value('newsletter', 'Status', 'Not Sent');
    $row = $query->get_all_result($sql);

    if (!$row)
    {
        $error = mysql_error();
        echo "<p align='center' class='alert alert-dismissible alert-danger'>There are is newsletter to send.</p>";
    }
    else if (count($row) < 1)
    {
        echo "<p align='center' class='alert alert-dismissible alert-danger'>There are is newsletter to send.</p>";
    }
    else
    {
        
        $newsletters = new newsletter();
        
        for ($i = 0; $i < count($row); $i++)
        {
            $member = new newsletter($row[$i]);
            $eid = $member->id;
            $fname = $member->fname;
            $lname = $member->lname;
            $email = $member->email;
            $title = $member->title;
            $content = $member->content;
            
                        
            $message = "Dear $fname $lname,\n\n$content";
            $headers = "From: " . $system_email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $to = $email;
            $subject = $title;
            
            if (@mail($to, $subject, $message, $headers))
            {
                echo "<p class='alert alert-dismissible alert-success' align='center'>Email to " . $fname ." ". $lname." - ". $email ." Sent!</p>";
                $newsletters->clear_newsletter($eid);
            }
            else
            {
               echo "<p class='alert alert-dismissible alert-danger' align='center'>Email to " . $fname ." ". $lname." - ". $email ." Not Sent!</p>";
                
            }
        }
    }
?>
