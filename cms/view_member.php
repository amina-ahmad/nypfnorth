<?php

    require 'loader.php';

    $query = new general();

    if (isset($_GET['mid']))
    {
        $mid = $_GET['mid'];
        $sql1 = $query->get_by_value('members', 'ID', $mid);
        $row1 = $query->get_result($sql1);
        $num1 = count($row1);
        
        $sql2 = $query->get_by_join_all_value('members','members_units','unit','Unit_ID','ID',$mid,'unit.Unit_Name');
        $row2 = $query->get_all_result($sql2);
        $num2 = count($row2);
        
        if ((!$row1) || (!$row2))
        {
            $error = mysql_error();
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no members to display.</p>";
        }
        else if (($num1 < 1) || ($num2 < 1))
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no members to display.</p>";
        }
        else
        {   
            
            
            $member = new user($row1);
            $mid = $member->member_id;
            $fname = $member->fname;
            $lname = $member->lname;
            $email = $member->email;
            $password = $member->password;
            $dob = $member->dob;
            $gender = $member->gender;
            $phone = $member->phone;
            $address = $member->address;
            $picture = $member->picture;
            $profession = $member->profession;
            $country = $member->country;
            $state = $member->state;
            $newsletter = $member->newsletter;
            $role = $member->role;
            $date_joined = $member->date_joined;         
            $dateTime = new DateTime($date_joined);
            $date_joined = date_format($dateTime,"j F Y");
            
            
            $smarty->assign('mid', $mid);
            $smarty->assign('fname', $fname);
            $smarty->assign('lname', $lname);
            $smarty->assign('email', $email);
            $smarty->assign('phone', $phone);
            $smarty->assign('dob', $dob);
            $smarty->assign('password', $password);
            $smarty->assign('gender', $gender);
            $smarty->assign('address', $address);
            $smarty->assign('picture', $picture);
            $smarty->assign('profession', $profession);
            $smarty->assign('country', $country);
            $smarty->assign('state', $state);            
            $smarty->assign('newsletter', $newsletter);
            $smarty->assign('role', $role);
            $smarty->assign('date_joined', $date_joined);
            
        
            for ($loop = 0; $loop < $num2; $loop++)
            {
                $units = new member($row2[$loop]);
                $Arrayunit[] = array('uid' => $units->unit_id, 'uname' => $units->unit, 'position' => $units->position);
            }
               
            if (isset($Arrayunit))
            {
                $smarty->assign('unit', $Arrayunit);
            }
            
            $smarty->display('view_member.tpl');
        }
        
        
    }

    $smarty->display('footer.tpl');
?>
