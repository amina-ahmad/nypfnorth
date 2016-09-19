<?php

    require 'loader.php';
    $new = new general();
    $new_order = $new->get_new_orders('product', 'order', 'customer', 'order_no', 'product_id', 'order_date');
    $new_order_row = $new->get_all_result($new_order);
    
    //new_orders
    if (!$new_order_row)
    {
        $error = mysql_error();
        echo "<p align='center' id='error'>$error</p>";
    }

    else if (count($new_order_row) < 1)
    {
        
    }
    
    else
    {
        $num_msg = count($new_order_row);
        for ($n = 0; $n < 5; $n++)
        {
            $new_orders = new order($new_order_row[$n]);
            $ArrayNewOrder[] = array('order_no' => $new_orders->order_no, 'product_name' => $new_orders->product_name, 'qty' => $new_orders->qty, 'fname' => $new_orders->fname, 'lname' => $new_orders->lname);
        }
        $smarty->assign('neworders', $ArrayNewOrder);
        $smarty->assign('nummsg', $num_msg);
     
    $smarty->display('header.tpl');
    }
    ?>
