<?php

    class member
    {

        var $member_id;
        var $unit_id;
        var $fname;
        var $lname;
        var $password;
        var $dob;
        var $phone;
        var $email;
        var $address;
        var $profession;
        var $unit;
        var $position;
        var $country;
        var $state;
        var $newsletter;
        var $role;
        var $date_joined;
        var $gender;
        var $picture;
        

        //constructor	
        public function member($row = Null)
        {

          
            $this->member_id = $row['ID'];
            $this->fname = $row['FName'];
            $this->lname = $row['LName'];
            $this->password = $row['Password'];
            $this->dob = $row['DOB'];
            $this->gender = $row['Gender'];
            $this->picture = $row['Picture'];
            $this->phone = $row['Phone'];
            $this->email = $row['Email'];
            $this->address = $row['Address'];
            $this->profession = $row['Profession'];            
            $this->unit = $row['Unit_Name'];
            $this->unit_id = $row['Unit_ID'];
            $this->position = $row['Position'];
 
            $this->country = $row['Country'];
            $this->state = $row['State'];
            $this->date_joined = $row['DateJoined'];
            $this->newsletter = $row['Newsletter'];
            $this->role = $row['Role'];
        }

        //creates member	
        public function new_member($new_fname, $new_lname, $new_password, $new_dob, $new_gender, $new_picture, $new_phone, $new_email,
        $new_address, $new_profession, $new_country, $new_state, $new_date_joined, $new_newsletter, $new_role)
        {
            $this->fname = $new_fname;
            $this->lname = $new_lname;
            $this->password = $new_password;
            $this->dob = $new_dob;
            $this->gender = $new_gender;
            $this->picture = $new_picture;
            $this->phone = $new_phone;
            $this->email = $new_email;
            $this->address =$new_address;
            $this->profession =$new_profession;
            $this->country =$new_country;
            $this->state = $new_state;
            $this->date_joined = $new_date_joined;
            $this->newsletter = $new_newsletter;
            $this->role = $new_role;
            
            $sql = "INSERT INTO members (`ID`, `FName`,`LName`, `Password`, `DOB`, `Gender`, `Picture`, `Phone`, `Email`, `Address`,
             `Profession`, `Country`, `State`, `Newsletter`, `Role`, `DateJoined`) VALUES (null, '$this->fname', '$this->lname', '$this->password','$this->dob',
             '$this->gender','$this->picture','$this->phone','$this->email','$this->address','$this->profession','$this->country','$this->state','$this->newsletter','$this->role', '$this->date_joined')";


            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Member Successfully Added.</p>";
                return true;
            }
        }
        
        
        //updates member's information
        public function update_member($new_id, $new_fname, $new_lname, $new_dob, $new_gender, $new_phone, $new_email,
        $new_address, $new_profession, $new_country, $new_state, $new_date_joined, $new_newsletter, $new_role)
        {
            $this->member_id = $new_id;
            $this->fname = $new_fname;
            $this->lname = $new_lname;
            $this->dob = $new_dob;
            $this->gender = $new_gender;
            $this->phone = $new_phone;
            $this->email =$new_email;
            $this->address =$new_address;
            $this->profession =$new_profession;
            $this->country =$new_country;
            $this->state = $new_state;
            $this->date_joined = $new_date_joined;
            $this->newsletter = $new_newsletter;
            $this->role = $new_role;

            $sql = "UPDATE `members` SET `FName` = '$this->fname', `LName` = '$this->lname', `DOB` ='$this->dob',
             `Gender` = '$this->gender',`Phone` = '$this->phone', `Email` = '$this->email', `Address` ='$this->address',`Profession` ='$this->profession',`Country` ='$this->country',
             `State` = '$this->state', `DateJoined` ='$this->date_joined',`Newsletter` = '$this->newsletter',`Role` ='$this->role' WHERE ID = $this->member_id";

            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Member's Information Updated Successfully!</p>";
            }
        }

        //adding member to a unit
        public function members_unit($new_member, $new_unit, $new_position)
        {
            $this->member_id = $new_member;
            $this->unit_id = $new_unit;
            $this->position = $new_position;
            
            
            $sql = "INSERT INTO members_units (`Members_ID`, `Unit_ID`,`Position`) VALUES ($this->member_id, $this->unit_id,
            '$this->position')";


            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Unit Successfully Joined.</p>";
                return true;
            }
        }
        
        //updating member's unit
        public function update_members_unit($new_member, $new_unit, $new_position)
        {
            $this->member_id = $new_member;
            $this->unit_id = $new_unit;
            $this->position = $new_position;
            
            $sql = "UPDATE members_units SET `Unit_ID` = $this->unit_id,`Position` = '$this->position' WHERE Members_ID = $this->member_id";


            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'> Update Successful!</p>";
            }
        }
       
        
       /**
 *  //get members
 *         public function get_members()
 *         {
 *             
 *             $new_query = "SELECT members.Fname, unit.Unit_Name FROM members, members_units, unit WHERE members_units.Members_ID = members.ID
 *             AND members_units.Unit_ID = unit.Unit_ID GROUP BY members.ID ORDER BY unit.Unit_Name DESC"; 
 *             
 *             $this->query = $new_query;
 *             
 *             return $this->query;
 *         }
 *         
 *         
 *         //get member's unit
 *         public function get_members_unit($new_member)
 *         {
 *             $this->member_id = $new_member;
 *             
 *             $new_query = "SELECT members.*, unit.Name, members_units.Position FROM members, members_units, unit WHERE members_units.Members_ID = members.ID
 *             AND members_units.Unit_ID = unit.Unit_ID and members.ID = $this->member_id ORDER BY unit.Name DESC"; 
 *             
 *             $this->query = $new_query;
 *             
 *             return $this->query;
 *         }
 *         
 *          //get units members
 *         public function get_unit_members($new_unit)
 *         {
 *             $this->unit_id = $new_unit;
 *             
 *             $new_query = "SELECT members.*, unit.Name, members_units.Position FROM members, members_units, unit WHERE members_units.Members_ID = members.ID
 *             AND members_units.Unit_ID = unit.ID and unit.ID = $this->unit_id ORDER BY members.FName DESC"; 
 *             
 *             $this->query = $new_query;
 *             
 *             return $this->query;
 *         }
 */
        
        //getting and validating login details
        function login($email, $pass)
        {
            $query = "SELECT * FROM `members` WHERE `Email`='$email' and `Password`='$pass'";
            $result = mysql_query($query) or die(mysql_error());
            $num = mysql_num_rows($result);

            if (!mysql_query($query))
            {
                echo(mysql_error());
            }
            else
            {

                if ($num > 0)
                {
                    $role = mysql_result($result, 0, "Role");

                    if ($role == 0)
                    {
                        session_start();
                        $_SESSION['id'] = mysql_result($result, 0, "ID");
                        header("location:../cms/home.php");
                    }
                    else if ($role == 1)
                    {
                        session_start();
                        $_SESSION['id'] = mysql_result($result, 0, "ID");
                        header("location:../member/home.php");
                        exit();
                    }
                    else if ($role == 2)
                    {
                        echo "<p align='center' class='alert alert-dismissible alert-danger'>You have been blocked from the system.</p>";
                    }
                }
                else
                {
                    echo "<p align='center' class='alert alert-dismissible alert-danger'>Incorrect Email or password.</p>";
                }
            }
        }

        
        //block  member
        public function block_member($new_id)
        {
            $this->id = $new_id;

            $sql = "UPDATE `members` SET `Role` = 2 WHERE `ID`= $this->id";

            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Member has been blocked!</p>";
            }
        }
        
        //Unblock member
        public function unblock_member($new_id)
        {
            $this->id = $new_id;

            $sql = "UPDATE `members` SET `Role` = 0 WHERE `ID`= $this->id";

            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>Member has been unblocked!</p>";
            }
        }
        
        //to change a password
        function change_password($new_pass, $id)
        {
            $sql = "UPDATE `members` SET `Password` ='$new_pass' WHERE `ID` = '$id'";
            mysql_query($sql);
            echo "<p align='center' class='alert alert-dismissible alert-success'>Your password has been changed.\nEnter the new password to log in next time.</p>";
        }
        
        //to recover a password and send the recovered password to members email address
        function password_recovery($new_email, $new_password)
        {
            $this->email = $new_email;
            $this->password = $new_password;
            
            $query = "SELECT * FROM `members` WHERE `Email`='$this->email'";
            $result = mysql_query($query) or die(mysql_error());
            $num = mysql_num_rows($result);

            if (!mysql_query($query))
            {
                echo(mysql_error());
            }
            
            else
            {
                //Retrieves first name from members table
                $this->name = mysql_result($result, 0, "FName");                
                $to = "$this->email";    
                $subject = 'Password Recovery';
                $message = "Dear $this->name,\n\nYour password has been recovered.\nPassword: $this->password\n\nWarm Regards,\nWebmaster\nE-Dealer.";
                $headers = "From: admin@nypfnorth.com" . "\n";
                
                //sends email
                $mail_sent = @mail($to, $subject, $message, $headers);
                echo $mail_sent ? "<p class='alert alert-dismissible alert-success' align='center'>Your password has been sent to your email address.
                <a href='index.php'>Click here</a> to login.</p>" :
                "<p class='alert alert-dismissible alert-danger' align='justify'>A problem occured while sending email 
                notification containing your password. Please contact the website admistrator at 
                <a href='mailto:admin@nypfnorth.com'>admin@nypfnorth.com</a> for assistance.</p>";
            }
        }
        
        //unsubscribe  member
        function unsubscribe_member($new_email)
        {
            $this->email = $new_email;

            $sql = "UPDATE `members` SET `Newsletter` = 'N' WHERE `Email`= '$this->email'";

            if (!mysql_query($sql))
            {
                $error = mysql_error();
                echo "<p align='center' class='alert alert-dismissible alert-danger'>$error!</p>";
            }
            else
            {
                echo "<p align='center' class='alert alert-dismissible alert-success'>You have been unsubscribed from receiving Newsletters.</p>";
            }
        }
        
         
    }