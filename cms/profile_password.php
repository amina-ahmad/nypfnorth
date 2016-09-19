<?php

    require 'loader.php';
    $query = new general();
    
    if (isset($_POST['save']))
    {
        
        $sql = $query->get_by_value('members', 'ID', $session_id);
        $row = $query->get_result($sql);

        if (!$row)
        {
            $error = mysql_error();
            echo "<p align='center' id='error'>$error</p>";
        }
        else
        {
            $user = new user($row);
            $oldPass = $user->password;

            $curPass = $_POST['currPass'];
            $newPass = $_POST['newPass'];
            $reNewPass = $_POST['reNewPass'];
            
            if ($oldPass !== $curPass)
            {
                echo "<p align='center' class='alert alert-dismissible alert-danger'>The current password does not match!</p>";
            }

            
            else if ($reNewPass !== $newPass)
            {
                echo "<p align='center' class='alert alert-dismissible alert-danger'>The re-entered password does not match!</p>";
            }

            else if ($oldPass === $curPass)
            {
                //updates the database with the new information
                $sql = "UPDATE `members` SET `password` ='$newPass' WHERE `ID` = $session_id";
                mysql_query($sql);

                echo "<p align='center' class='alert alert-dismissible alert-success'>Your password has been changed.<br>\nEnter the new password to log in next time.</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-danger'>Incorrect current password!</p>";
            }
        }
    }
    
      
    $smarty->display('profile_password.tpl');
    $smarty->display('footer.tpl');
?>
