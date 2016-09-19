<?php

    require 'loader.php';
    $query = new general();
    
    if (isset($_POST['save']))
    {

        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $password = mysql_real_escape_string($_POST['password']);
        $confirm = mysql_real_escape_string($_POST['confirm']);
        $email = mysql_real_escape_string($_POST['email']);
        $phone = mysql_real_escape_string($_POST['phone']);
        $address = mysql_real_escape_string($_POST['address']);
        $profession = mysql_real_escape_string($_POST['profession']);
        
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $role = $_POST['role'];
        $unit = $_POST['unit_list'];
        
        $d_ob = $_POST['dob'];
        $phpdate_ob = strtotime( $d_ob );
        $dob = date( 'Y-m-d', $phpdate_ob );
        $d_joined = $_POST['date_joined'];
        $phpdate_j = strtotime( $d_joined );
        $date_joined = date( 'Y-m-d', $phpdate_j );
        
        $path = "../img/db_images/";
        $picture = ($_FILES['picture1']['name']);                
        $random_digit = rand(0000, 9999);
        $picture = $random_digit.$picture;
                
        $pictures = new picture();    
        $pictures->upload($path, $picture, 1);

        
        if ($password !== $confirm)
        {
            echo "<p align='center' class='alert alert-dismissible alert-danger'>The re-entered password does not match!</p>";
        }
        else
        {
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
            if($members->new_member($fname, $lname, $password, $dob, $gender, $picture, $phone, $email, $address, $profession, $country, $state, $date_joined, $newsletter, $role))
            {
                
                $sql_m = $query->get_by_value('members', 'Email', $email);
                $row_m = $query->get_result($sql_m);
                
                 for($mu = 0; $mu < count($unit); $mu++)
                 {
                    $sql_query = "INSERT INTO members_units VALUES ($row_m[0], $unit[$mu],'Member')"; 
                 }
                    
                 if (!mysql_query($sql_query))
                 {
                    $error = mysql_error();
                    echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
                 }
                 else
                 {
                    echo "<p align='center' class='alert alert-dismissible alert-success'>Unit Successfully Joined.</p>";
                 }
                  
            }
                
                else
                {
                     echo "<p align='center' class='alert alert-dismissible alert-danger'>Couldn't add member to a Unit!</p>";
                 
                }
        }
    }
    
    else if (isset($_POST['edit']))
    {
        $mid = $_POST['mid'];
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
                $query->update('members', 'picture', $picture, 'ID', $mid);
                
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
            if($members->update_member($mid, $fname, $lname, $dob, $gender, $phone, $email, $address, $profession, $country, $state, $date_joined, $newsletter, $role))
            {
                if(isset($_POST['unit_list']))
                {
                     $unit = $_POST['unit_list'];
                     for($mu = 0; $mu < count($unit); $mu++)
                     {
                        $members->update_members_unit($mid, $unit[$mu],'$position');
                     }
                }
                  
            }
                
        
    }
    
    else if (isset($_GET['m_id']))
    {
        $mid = $_GET['m_id'];
        $ref = $_GET['ref'];
        $members = new member();
        if ($ref == 'b')
        {
            $members->block_member($mid);
        }
        if ($ref == 'un')
        {
            $members->unblock_member($mid);
        }
    } 
    
    
    if(isset($_REQUEST['action']))
    {
        $action = $_REQUEST['action'];
        
        if($action=="showAll")
        {
            $sql1 = $query->get_by_join_all_desc('unit','members_units','members','ID','Unit_ID','members.Fname');
            $row1 = $query->get_all_result($sql1);
            $total_results = count($row1);
            
        }
        
        else
        {
           $uid = $action;
           $sql1 = $query->get_by_join_all_value('unit','members_units','members','ID','Unit_ID',$uid,'members.Fname');
           $row1 = $query->get_all_result($sql1);
           $total_results = count($row1); 
        }
            

        
            $per_page = 6;    
        
        
            
            if (!$row1)
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no members to display</p>";
                
            }
            
            else if ($total_results < 1)
            {
                echo "<p align='center' class='alert alert-dismissible alert-danger'>There are no members to display.</p>";
            }
            else
            {
                if ($per_page > $total_results)
                {
                    $total_pages = 0;
                }
                else
                {
                    $total_pages = ceil($total_results / $per_page); //total pages we going to have
                }
                
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
                        if ($per_page > count($row1))
                        {
                            $per_page = count($row1);
                        }
                        $end = $start + $per_page;
                    }
                    else
                    {
                        // error - show first set of results
                        $start = 0;
                        if ($per_page > count($row1))
                        {
                            $per_page = count($row1);
                        }
                        $end = $per_page;
                    }
        
                    $page = intval($_GET['page']);
                }
                else
                {
                    // if page isn't set, show first set of results
                    $start = 0;
                    if ($per_page > count($row1))
                    {
                        $per_page = count($row1);
                    }
                    $end = $per_page;
                }
        // display pagination
        
                $tpages = $total_pages;
                if (($page <= 0) || ($page == ""))
                {
                    $page = 1;
                }
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
            
                    $member = new member($row1[$i]);
                    $Arraymember[] = array('mid' => $member->member_id, 'fname' => $member->fname, 'lname' => $member->lname,'dob' => $member->dob,
                    'phone' => $member->phone, 'email' => $member->email, 'address' => $member->address,'profession' => $member->profession,
                    'country' => $member->country,'newsletter' => $member->newsletter, 'role' => $member->role, 'date' => $member->date_joined);
                }
            }
            if (isset($Arraymember))
            {
                $smarty->assign('member', $Arraymember);
            }  
            $smarty->display('members_table.tpl');
    }
    
    
    $sql2 = $query->get_all_by_order('unit', 'Unit_Name', 'ASC');
    $row2 = $query->get_all_result($sql2);
    $num = count($row2);
        
        
    for ($loop = 0; $loop < $num; $loop++)
    {
        $units = new unit($row2[$loop]);
        $Arrayunit[] = array('uid' => $units->unit_id, 'uname' => $units->unit);
    }
       
    if (isset($Arrayunit))
    {
        $smarty->assign('unit', $Arrayunit);
    } 
    
    $smarty->display('members.tpl');
    $smarty->display('footer.tpl');
    
    
?>
