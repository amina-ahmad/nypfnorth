<?php

    class user
    {

        var $member_id;
        var $fname;
        var $lname;
        var $password;
        var $dob;
        var $phone;
        var $email;
        var $address;
        var $profession;
        var $country;
        var $state;
        var $newsletter;
        var $role;
        var $date_joined;
        var $gender;
        var $picture;
        

        //constructor	
        public function user($row = Null)
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
            $this->state = $row['State'];
            $this->country = $row['Country'];
            $this->state = $row['State'];
            $this->date_joined = $row['DateJoined'];
            $this->newsletter = $row['Newsletter'];
            $this->role = $row['Role'];
        }
        
        //to recover a password and send the recovered password to users email address
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
                $this->fname = mysql_result($result, 0, "FName");
                $this->lname = mysql_result($result, 0, "LName");
                
                $to = "$this->email";    
                $subject = 'Password Recovery';
                $message = "Dear $this->fname $this->lname,\n\nYour password has been recovered.\nPassword: $this->password\n\nWarm Regards,\nWebmaster\nE-Dealer.";
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

}

?>