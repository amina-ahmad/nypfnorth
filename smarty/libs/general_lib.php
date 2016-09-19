<?php

class general
{
	var $table;
	var $query;
	var $result;
	var $num_result;
	var $where;
	var $is;
	var $set;
	var $field;
	var $value;
    var $key;
	var $row;
	var $image;
	var $path;
	var $order;
    var $group;
	var $email;
	var $name;
	var $password;
	var $table1;
	var $table2;
    var $table3;
	var $join1;
	var $join2;
	var $limit;
	var $interval;
	var $the_date;
	var $ArrayRow = array();
    var $start;
        
	

	//querying a table
	function query($new_table)
	{
		$this->table = $new_table;
		$new_query = "SELECT * from $this->table";
		$this->query = $new_query;
		return $this->query;
	}
	
	function get_num_result($new_result)
	{
		$this->result = $new_result;
		$this->num_result = mysql_num_rows($this->result);

		if(!$this->num_result)
		{
			$error = mysql_error();
			echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>"; 
		}
		
		else
		{
			return $this->num_result;
		}
	}
	
	function get_result($new_query)
	{
		$this->query = $new_query;
		$this->result = mysql_query($this->query);
		$this->row = mysql_fetch_array($this->result);

		if(!$this->row)
		{
			$error = mysql_error();
			echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>"; 
		}
		
		else
		{
			return $this->row;
		}
	}
	
	function get_all_result($new_query)
	{
		
		$this->query = $new_query;
		$this->result = mysql_query($this->query);
		while($this->row = mysql_fetch_array($this->result))
		{
		
		    if(!$this->result)
		    {
			    $error = mysql_error();
			    echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>"; 
		    }

		    else
		    {
			    $this->ArrayRow[] = $this->row;

		    }
		}
		return $this->ArrayRow;
		
	}
	
	
		
	//get field
	function get_field($new_table, $new_field)
	{
		$this->table = $new_table;
		$this->field = $new_field;
		
		$new_query = "SELECT $this->field FROM $this->table"; 
		$this->query = $new_query;
		return $this->query;
	}
	
	//get all data sorted by a value in an order (desc or accending)
	function get_table_limit($new_table, $new_value, $new_order, $new_start, $new_limit)
	{
		$this->table = $new_table;
		$this->value = $new_value;
		$this->order = $new_order;
        $this->start = $new_limit;
        $this->limit = $new_limit;
                
		$new_query = "SELECT * FROM $this->table ORDER BY $this->value $this->order LIMIT $this->start, $this->limit"; 
		$this->query = $new_query;
		return $this->query;
	}
        
    //get all data sorted by a value in an order (desc or accending)
	function get_all_by_order($new_table, $new_value, $new_order)
	{
		$this->table = $new_table;
		$this->value = $new_value;
		$this->order = $new_order;
		$new_query = "SELECT * FROM $this->table ORDER BY $this->value $this->order"; 
		$this->query = $new_query;
		return $this->query;
	}
	
	//get a unique values
	function get_unique($new_table, $new_where, $new_value, $new_field)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->value = $new_value;
		$this->field = $new_field;
		
		$new_query = "SELECT DISTINCT $this->field FROM $this->table WHERE $this->where = '$this->value' ORDER BY $this->field DESC"; 
		$this->query = $new_query;
		return $this->query;
	}
	
	//get a table where value is same as variable
	function get_by_value($new_table, $new_where, $new_value)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->value = $new_value;
		
		$new_query = "SELECT * FROM `$this->table` WHERE `$this->where` = '$this->value'"; 
		$this->query = $new_query;
        if(!$this->query)
		{
			$error = mysql_error();
			echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>"; 
		}
		
		else
		{
			return $this->query;
		}
	}
	
	//get all contents of two tables
	function get_by_join_all($new_table1, $new_table2,$new_join1)
	{
		$this->table1 = $new_table1;
		$this->table2 = $new_table2;
		$this->join1 = $new_join1;
		
		$new_query = "SELECT `$this->table2`.*,`$this->table1`.* FROM `$this->table2`,`$this->table1` 
        WHERE `$this->table1`.`$this->join1` = `$this->table2`.`$this->join1` 
        order by `$this->table2`.`$this->join1` DESC"; 		
		
		$this->query = $new_query;
		return $this->query;
	}
	//get all contents of three tables
	function get_by_join_all_desc($new_table1, $new_table2,$new_table3, $new_join1,$new_join2,$new_order)
	{
		$this->table1 = $new_table1;
		$this->table2 = $new_table2;
		$this->table3 = $new_table3;
		$this->join1 = $new_join1;
		$this->join2 = $new_join2;
		$this->order = $new_order;
		
		$new_query = "SELECT `$this->table3`.*,`$this->table2`.*,`$this->table1`.* FROM `$this->table3`,`$this->table2`,`$this->table1` 
        WHERE `$this->table2`.`$this->join1` = `$this->table3`.`$this->join1` AND `$this->table2`.`$this->join2` = `$this->table1`.`$this->join2` 
        GROUP By`$this->table2`.`$this->join1` ORDER BY $this->order ASC"; 		
		
		$this->query = $new_query;
		return $this->query;
	}
	
	//get all contents of three tables by value
	function get_by_join_all_value($new_table1, $new_table2,$new_table3, $new_join1,$new_join2, $new_value, $new_order)
	{
		$this->table1 = $new_table1;
		$this->table2 = $new_table2;
		$this->table3 = $new_table3;
		$this->join1 = $new_join1;
		$this->join2 = $new_join2;
        $this->value = $new_value;
		$this->order = $new_order;
		
		$new_query = "SELECT `$this->table3`.*,`$this->table2`.*,`$this->table1`.* FROM `$this->table3`,`$this->table2`,`$this->table1` 
        WHERE `$this->table2`.`$this->join1` = `$this->table3`.`$this->join1` AND `$this->table2`.`$this->join2` = `$this->table1`.`$this->join2` 
        AND `$this->table2`.`$this->join2` = $this->value ORDER BY $this->order ASC"; 		
		
		$this->query = $new_query;
		return $this->query;
	}
    
	//get all contents of two tables
	function get_by_join_value($new_table1, $new_table2, $new_join1,$new_join2, $new_value, $new_order)
	{
		$this->table1 = $new_table1;
		$this->table2 = $new_table2;
		$this->join1 = $new_join1;
		$this->join2 = $new_join2;
        $this->value = $new_value;
		$this->order = $new_order;
		
		$new_query = "SELECT `$this->table2`.*,`$this->table1`.* FROM `$this->table2`,`$this->table1` 
        WHERE `$this->table2`.`$this->join1` = `$this->table1`.`$this->join1` 
        AND `$this->table2`.`$this->join2` = $this->value ORDER BY $this->order ASC"; 		
		
		$this->query = $new_query;
		return $this->query;
	}
	
        //get all contents of two tables
	function search_order($new_table1, $new_table2,$new_table3, $new_join1,$new_join2,$new_value, $new_id)
	{
		$this->table1 = $new_table1;
		$this->table2 = $new_table2;
		$this->table3 = $new_table3;
		$this->join1 = $new_join1;
		$this->join2 = $new_join2;
                $this->value = $new_value;
		$this->id = $new_id;
		
		$new_query = "SELECT `$this->table3`.*,`$this->table2`.*,`$this->table1`.* FROM `$this->table3`,`$this->table2`,`$this->table1` WHERE `$this->table2`.`$this->join1` = `$this->table3`.`$this->join1` AND `$this->table2`.`$this->join2` = `$this->table1`.`$this->join2` AND `$this->table2`.`$this->value`='$this->id'"; 		
		
		$this->query = $new_query;
		return $this->query;
	}
	//get a content of two tables
	function get_by_join($new_table1, $new_table2, $new_join, $new_id)
	{
		$this->table1 = $new_table1;
		$this->table2 = $new_table2;
		$this->id = $new_id;
		$this->join = $new_join;
		
		$new_query = "SELECT * FROM $this->table1,$this->table2 WHERE $this->table1.$this->join = $this->table2.$this->join AND $this->join = $this->id "; 
		$this->query = $new_query;
		return $this->query;
	}
	
	
	//get a table where value is the given variable and  second value like the second given variable
	function get_like_value($new_table, $new_where, $new_is, $new_field, $new_value)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->is = $new_is;
		$this->field = $new_field;
		$this->value = $new_value;
		
		$new_query = "SELECT * FROM $this->table WHERE $this->where = '$this->is' AND $this->field LIKE '$this->value'"; 
		$this->query = $new_query;
		return $this->query;
	}
	
	//get a table where value is like given variable
	function get_search($new_table, $new_where, $new_is)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->is = $new_is;
		
		$new_query = "SELECT * FROM `$this->table` WHERE `$this->where` LIKE '$this->is'"; 
		$this->query = $new_query;
		return $this->query;
	}
	
	//get a table by value according to two conditions
	function get_by_two_value($new_table, $new_where, $new_value, $new_is, $new_field)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->value = $new_value;
		$this->is = $new_is;
		$this->field = $new_field;
		
		$new_query = "SELECT * FROM `$this->table` WHERE `$this->where` = '$this->value' AND `$this->is` = '$this->field'";  
		$this->query = $new_query;
		return $this->query;
	}
	
    //get a table by value according to two conditions
	function search_by_two_value($new_table, $new_where, $new_value, $new_is, $new_field, $new_name, $new_key)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->value = $new_value;
        $this->key = $new_key;
        $this->name = $new_name;
		$this->is = $new_is;
		$this->field = $new_field;
		
		$new_query = "SELECT * FROM `$this->table` WHERE `$this->where` = '$this->value' AND `$this->is` = '$this->field' AND `$this->name` LIKE '$this->key' ";  
		$this->query = $new_query;
		return $this->query;
	}
	
	//get a table by value according to two conditions
	function get_by_two_value_interval($new_table, $new_where, $new_value, $new_is, $new_field, $new_interval, $new_date)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->value = $new_value;
		$this->is = $new_is;
		$this->field = $new_field;
		$this->interval = $new_interval;
		$this->the_date = $new_date;
		
		$new_query = "SELECT * FROM `$this->table` WHERE `$this->where` = '$this->value' AND `$this->is` = '$this->field' GROUP BY $this->interval( `$this->the_date` )";  
		$this->query = $new_query;
		return $this->query;
	}
	
	//get a table not by value
	function get_by_not_value($new_table, $new_value, $new_field)
	{
		$this->table = $new_table;
		$this->value = $new_value;		
		$this->field = $new_field;
		
		$new_query = "SELECT * FROM $this->table WHERE '$this->value' != $this->field";
		$this->query = $new_query;
		return $this->query;
	}
	
        
	function get_latest_views($new_table, $new_where, $new_field, $new_value)
	{
		$this->table = $new_table;
		$this->value = $new_value;		
		$this->field = $new_field;
                $this->where = $new_where;
		
		$new_query = "SELECT * FROM `$this->table` WHERE `$this->where` = $this->field order by `$this->value` DESC Limit 4";
		$this->query = $new_query;
		return $this->query;
	}
	//update a table by referencing its id no.
	function update($new_table, $new_set, $new_value, $new_where, $new_is)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->is = $new_is;
		$this->set = $new_set;
		$this->value = $new_value;
		
		$new_query = "UPDATE `$this->table` SET `$this->set` ='$this->value' WHERE $this->where = '$this->is'";
		$this->query = $new_query;
		
		
		if(!mysql_query($this->query))
		{
			$error = mysql_error();
			echo "<p align='center' class='alert alert-dismissible alert-danger'>$error</p>"; 
		}
		
		else
		{
			return true;
		}
	}
    
	//update a table by value.
	function update_by_value($new_table, $new_field, $new_value, $new_is)
	{
		$this->table = $new_table;
		$this->field = $new_field;
		$this->value= $new_value;
		$this->is = $new_is;
		
		$new_query = "UPDATE $this->table SET $this->field = '$this->value' WHERE $this->value = $this->is"; 
		$this->query = $new_query;
		if (!mysql_query($this->query)) 
			{
				 $error = mysql_error(); 
				 echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>"; 
			}
						 
			else
			{
				 echo "<p align='center'>Picture Updated Successfully.</p>"; 
						 
			}	
	}
	
	//delete a table by referencing its id no.
	function delete($new_table, $new_where, $new_is)
	{
		$this->table = $new_table;
		$this->where = $new_where;
		$this->is = $new_is;
		
		$new_query = "DELETE FROM `$this->table` WHERE `$this->where` = $this->is";
		$this->query = $new_query;
		       
		if (!mysql_query($this->query)) 
			{
				 $error = mysql_error(); 
				 echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>"; 
			}
						 
			else
			{
				  echo "<p align='center'>Information Deleted Successfully</p>";
						 
			}	
	}
	
	
		
	function getCurrentDate()
	{
		//get the current date from mysql server
		$sql = "SELECT curdate()";
		$result =  mysql_query($sql);
		$date = mysql_result($result, 0, "curdate()");
		$dateTime = new DateTime($date);
		return $dateTime;
	}
        
        function errorcheck()
        {
            // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
        }
	
}

?>