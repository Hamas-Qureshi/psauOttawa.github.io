<?php 
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];
        
        
        $email_from = "hammas0400@gmail.com";
        $email_body = "User Name: $name.\n".
                        "User Email : $visitor_email.\n".
                        "User message : $message.\n";



        $to = "psa.ottawau@gmail.com"

        $headers= "From: $email_from \r\n";

        $headers .="Reply-To: $visitor_email \r\n";
    
        mail($to,$email_body,$headers);
        header("Location: index.html");
               
?>





