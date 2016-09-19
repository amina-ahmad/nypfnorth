<?php

    class newsletter
    {
        var $id;
        var $member;
        var $content;
        var $date;
        var $status;
        var $fname;
        var $lname;
        var $email;
        var $query;

        //constructor	
        public function newsletter($row = Null)
        {
            $this->id = $row['ID'];
            $this->fname = $row['FName'];
            $this->lname = $row['LName'];
            $this->email = $row['Email'];
            $this->title = $row['Title'];
            $this->content = $row['Content'];
            $this->date = $row['Date'];            
            $this->status = $row['Status'];
        }
        
        //send newsletter	
        public function send_newsletter($new_fname,$new_lname,$new_email, $new_title, $new_content)
        {
            $this->fname = $new_fname;
            $this->lname = $new_lname;
            $this->email = $new_email;
            $this->title = $new_title;
            $this->content = $new_content;
            
            $sql = "INSERT INTO newsletter (`ID`,`FName`,`LName`,`Email`, `Title`,`Content`, `Date`, `Status`) 
            VALUES (null,'$this->fname','$this->lname', '$this->email', '$this->title', '$this->content', now(), 'Not Sent')";

            
            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' id='error'>$error!</p>";
            }
            else
            {
                return true;
            }
        }

        
       /**
 *  //get newsletter subscribers and contents 
 *         public function get_newsletter()
 *         {
 *             $query = "SELECT `FName`, `LName`, `Email`, `Title`, `Full` FROM `newsletter`, `members`, `content`
 * WHERE `newsletter.Members_ID` = `members.ID` AND `newsletter.Content_ID` = `content.ID` AND `newsletter.Status` = 'Not Sent'";

 *             if (!mysql_query($query))
 *             {
 *                 $error = mysql_error();
 *                 echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
 *                 return false;
 *             }
 *             else
 *             {
 *                 $this->query = $query;
 *                 return $this->query;
 *             }
 *         }
 *         
 *         
 *          //get newsletter subscribers and contents 
 *         public function get_test_newsletter($new_email)
 *         { 
 *             $this->email = $new_email;
 *             
 *             $query = "SELECT `FName`, `LName`, `Email`, `Title`, `Full` FROM `newsletter`, `members`, `content`
 * WHERE newsletter.Members_ID = members.ID AND newsletter.Content_ID = content.ID AND members.Email = '$this->email' AND newsletter.Status = 'Test'";

 *             if (!mysql_query($query))
 *             {
 *                 $error = mysql_error();
 *                 echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
 *                 return false;
 *             }
 *             else
 *             {
 *                 $this->query = $query;
 * 	            return $this->query;
 *             }
 *         }
 */
        

        

       //send newsletter	
        public function send_test_newsletter($new_member,$new_content, $new_email)
        {
            $this->member = $new_member;
            $this->content = $new_content;
            $this->status = "Test";
            
              $sql = "UPDATE `members` SET `Email` = '$this->email' WHERE ID = $this->member";



                if (!mysql_query($sql))
                {
                    $error = mysql_error();
                    echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
                }
                else
                {
                    echo "<p align='center' id='success'>Member Successfully Added.</p>";
                }
            
           
            $sql2 = "INSERT INTO newsletter (`ID`,`Members_ID`,`Content_ID`,`Date`,`Status`) VALUES
            (null,'$this->member','$this->content', now(), '$this->status')";

            
            if (!mysql_query($sql2))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                return true;
            }
        }

       
        //delete newsletter from newsletter's table
        public function clear_newsletter($new_id)
        {
            $this->id = $new_id;
            $sql = "DELETE FROM `newsletter` WHERE ID = $this->id";

            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
                return false;
            }
            else
            {
                return true;
                echo "<p align='center' class='alert alert-dismissible alert-success'>Newsletter Deleted!</p>";
            }
        }

    }