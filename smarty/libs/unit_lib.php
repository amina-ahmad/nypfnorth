<?php

    class unit
    {

        var $unit_id;
        var $unit;
        

        //constructor	
        public function unit($row = Null)
        {
 
            $this->unit_id = $row['Unit_ID'];
            $this->unit = $row['Unit_Name'];
           
        }

    }

?>