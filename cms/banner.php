<?php

    require 'loader.php';
    $query = new general();
    $sql1 = $query->get_by_value('banner', 'ID', 1);
    $row1 = $query->get_result($sql1);
    $sql2 = $query->get_by_value('banner', 'ID', 2);
    $row2 = $query->get_result($sql2);
    $sql3 = $query->get_by_value('banner', 'ID', 3);
    $row3 = $query->get_result($sql3);
    $sql4 = $query->get_by_value('banner', 'ID', 4);
    $row4 = $query->get_result($sql4);
    

    if (isset($_POST['save']))
    {
        
        
        $caption1 = mysql_real_escape_string($_POST['caption1']);
        $caption2 = mysql_real_escape_string($_POST['caption2']);
        $caption3 = mysql_real_escape_string($_POST['caption3']);
        $caption4 = mysql_real_escape_string($_POST['caption4']);
        
        $link1 = $_POST['link1'];
        $link2 = $_POST['link2'];
        $link3 = $_POST['link3'];
        $link4 = $_POST['link4'];
        
        $path = "../img/db_images/";
        $pic1 = ($_FILES['picture1']['name']);
        $pic2 = ($_FILES['picture2']['name']);
        $pic3 = ($_FILES['picture3']['name']);
        $pic4 = ($_FILES['picture4']['name']);
        
        $image1 = $_POST['image1'];
        $image2 = $_POST['image2'];
        $image3 = $_POST['image3'];
        $image4 = $_POST['image4'];
        
        $random_digit = rand(0000, 9999);
        $banners = new banner();
        $pictures = new picture();

        if (!empty($pic1))
        {
            $pic1 = $random_digit . $pic1;
            if($pictures->upload($path, $pic1, 1))
            {
                 $query->update('banner', 'Pic', $pic1, 'ID', 1);
            
            }
        }

        else if (!empty($pic2))
        {
            $pic2 = $random_digit . $pic2;
            if($pictures->upload($path, $pic2, 2))
            {
                 $query->update('banner', 'Pic', $pic2, 'ID', 2);
            }
        }

        
        
         else if (!empty($pic3))
        {
            $pic3 = $random_digit . $pic3;
            
            if($pictures->upload($path, $pic3, 3))
            {
                 $query->update('banner', 'Pic', $pic3, 'ID', 3);
            }
        }
        
         else if (!empty($pic4))
        {
            if($pictures->upload($path, $pic4, 4))
            {
                 $query->update('banner', 'Pic', $pic4, 'ID', 4);
            }
        }
        
        $banners->update_banner(1,$caption1,$link1);
        $banners->update_banner(2,$caption2,$link2);
        $banners->update_banner(3,$caption3,$link3);
        $banners->update_banner(4,$caption4,$link4);
    }

    if ((!$row1) || (!$row2) || (!$row3) || (!$row4))
    {
        $error = mysql_error();
        echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>";
    }
    else if ((count($row1) < 1) || (count($row2) < 1) || (count($row3) < 1) || (count($row4) < 1))
    {
        echo "<p align='center' class='alert alert-dismissible alert-warning'>No Banners to show!";
    }
    else
    {

        $banner1 = new banner($row1);
        $banner2 = new banner($row2);
        $banner3 = new banner($row3);
        $banner4 = new banner($row4);

        $pic1 = $banner1->pic;
        $caption1 = $banner1->caption;
        $link1 = $banner1->link;
        $pic2 = $banner2->pic;
        $caption2 = $banner2->caption;
        $link2 = $banner2->link;
        $pic3 = $banner3->pic;
        $caption3 = $banner3->caption;
        $link3 = $banner3->link;
        $pic4 = $banner4->pic;
        $caption4 = $banner4->caption;
        $link4 = $banner4->link;

        $smarty->assign('pic1', $pic1);
        $smarty->assign('caption1', $caption1);
        $smarty->assign('link1', $link1);
        $smarty->assign('pic2', $pic2);
        $smarty->assign('caption2', $caption2);
        $smarty->assign('link2', $link2);
        $smarty->assign('pic3', $pic3);
        $smarty->assign('caption3', $caption3);
        $smarty->assign('link3', $link3);
        $smarty->assign('pic4', $pic4);
        $smarty->assign('caption4', $caption4);
        $smarty->assign('link4', $link4);
    }
    $smarty->display('banner.tpl');
?>
