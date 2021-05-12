<?php

   

    if(isset($_POST['submit_btn'])){ //check if form was submitted



        $name = $_POST['contact_name'];
        $visitor_email = $_POST['contact_email'];
        $phone_number = $_POST['phone_number'];
        $property = $_POST['property'];
        $message = $_POST['message'];
    
        $email_from = 'zach.g.lewton@gmail.com';
    
        $email_subject = "Info Request";
    
        $email_body = "You have received a new message from the user $name.\n Here is the message:\n {$message}";
                    
        $to = "zach.g.lewton@gmail.com";
    
        $headers = "From: $email_from \r\n";
                    
        $headers .= "Reply-To: $visitor_email \r\n";
                    
        mail($to,$email_subject,$email_body,$headers);

        echo "sup";
        
    }    

?> 