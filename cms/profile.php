<?php

        require 'loader.php';
        $query = new general();
        
        if (isset($_POST['edit']))
        {
            $fname = mysql_real_escape_string($_POST['fname']);
            $lname = mysql_real_escape_string($_POST['lname']);
            $email = mysql_real_escape_string($_POST['email']);
            $phone = mysql_real_escape_string($_POST['phone']);
            $address = mysql_real_escape_string($_POST['address']);
            $profession = mysql_real_escape_string($_POST['profession']);
            $gender = $_POST['gender'];
            
            if(isset($_POST['country']))
            {
                $country = $_POST['country'];
            }
            else
            {
                $country = $_POST['country-2'];
            }
            
            
            if(isset($_POST['state']))
            {
                $state = $_POST['state'];
            }
            else
            {
                $state = $_POST['state-2'];
            }
            
            $role = $_POST['role'];
            
            $d_ob = $_POST['dob'];
            $phpdate_ob = strtotime( $d_ob );
            $dob = date( 'Y-m-d', $phpdate_ob );
            $d_joined = $_POST['date_joined'];
            $phpdate_j = strtotime( $d_joined );
            $date_joined = date( 'Y-m-d', $phpdate_j );
            
            if(!empty($_FILES['picture1']['name']))
            {
                $path = "../img/db_images/";
                $picture = ($_FILES['picture1']['name']);                
                $random_digit = rand(0000, 9999);
                $picture = $random_digit.$picture;
                    
                $pictures = new picture();    
                if($pictures->upload($path, $picture, 1))
                {
                    $query->update('members', 'picture', $picture, 'ID', $session_id);
                    
                }
                
            }
    
                if (!isset($_POST['newsletter']))
                {
                    $newsletter = 'N';
                }
                else
                {
                    $newsletter = 'Y';
                }
                
                if ($role == 'Admin')
                {
                    $role = 0;
                }
               
                else if ($role == 'Member')
                {
                    $role = 1;
                }
                
                else 
                {
                    $role = 2;
                }
                
                
                $members = new member();
                if($members->update_member($session_id, $fname, $lname, $dob, $gender, $phone, $email, $address, $profession, $country, $state, $date_joined, $newsletter, $role))
                {
                    if(isset($_POST['unit_list']))
                    {
                         $unit = $_POST['unit_list'];
                         for($mu = 0; $mu < count($unit); $mu++)
                         {
                            $members->update_members_unit($session_id, $unit[$mu],'$position');
                         }
                    }
                      
                }
                    
            
        }
        
        $sql1 = $query->get_by_value('members', 'ID', $session_id);
        $row1 = $query->get_result($sql1);
        $num1 = count($row1);
        
        $sql2 = $query->get_by_join_all_value('members','members_units','unit','Unit_ID','ID',$session_id,'unit.Unit_Name');
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
            
            $smarty->display('profile.tpl');
        
        
    }

    $smarty->display('footer.tpl');
?>
