<?php

    class content
    {

        var $id;
        var $title;
        var $summary;
        var $full;
        var $picture;
        var $date;
        var $created;
        var $modified;
        var $type;
        

        //constructor	
        public function content($row = Null)
        {

            $this->id = $row['ID'];
            $this->title = $row['Title'];
            $this->summary = $row['Summary'];
            $this->full = $row['Full'];
            $this->picture = $row['Picture'];
            
            $this->date = $row['Date'];
            //format date
            $dateTime = new DateTime($this->date);
            $this->date = date_format($dateTime, "j M Y h:i A");
            
            $this->created = $row['Created'];
            //format date
            $dateTime = new DateTime($this->created);
            $this->created = date_format($dateTime, "j M Y h:i A");
            
            $this->modified = $row['Modified'];
            //format date
            $dateTime = new DateTime($this->modified);
            $this->modified = date_format($dateTime, "j M Y h:i A");
            
            $this->type = $row['Type'];
            
        }

        //creates content	
        public function new_content($new_title, $new_summary, $new_full, $new_picture, $new_date, $new_type)
        {
            $this->title = $new_title;
            $this->summary = $new_summary;
            $this->full = $new_full;
            $this->picture = $new_picture;
            $this->date = $new_date;
            $this->type = $new_type;
            
            $sql = "INSERT INTO content (`ID`, `Title`,`Summary`, `Full`,`Picture`,`Date`, `Created`, `Modified`,`Type`) VALUES (null, '$this->title', '$this->summary','$this->full','$this->picture','$this->date', now(), now(),'$this->type')";

            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Content Successfully Created.</p>";
            }
        }

        //updates content
        public function update_content($new_id, $new_title, $new_summary, $new_full, $new_date, $new_type)
        {
            $this->id = $new_id;
            $this->title = $new_title;
            $this->summary = $new_summary;
            $this->full = $new_full;
            $this->date = $new_date;
            $this->type = $new_type;
            
            $sql = "UPDATE `content` SET `Title` = '$this->title', `Summary` = '$this->summary', 
            `Full` = '$this->full', `Date` = '$this->date', `Modified` = now(), `Type` = '$this->type' WHERE ID = '$this->id'";
           
            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Content Updated Successfully.</p>";
            }
        }

    }