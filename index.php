<?php 

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = "New Form Submission";
    $email_body ="User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User message: $message.\n";

    $email_from = "psa.ottawau@gmail.com";
                    
    $to = "psa.ottawau@gmail.com";

    $headers = "From : $email_from \r\n";

    $headers .= "Reply-To: $visitor \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>

