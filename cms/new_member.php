<?php

    require 'loader.php';
    $query = new general();
    $sql = $query->get_all_by_order('unit', 'Unit_Name', 'ASC');
    $row = $query->get_all_result($sql);
    $num = count($row);
        
        
    for ($loop = 0; $loop < $num; $loop++)
    {
        $units = new unit($row[$loop]);
        $Arrayunit[] = array('uid' => $units->unit_id, 'uname' => $units->unit);
    }
       
    if (isset($Arrayunit))
    {
        $smarty->assign('unit', $Arrayunit);
    } 
    
    $smarty->display('new_member.tpl');
    $smarty->display('footer.tpl');
?>