<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['name'];
    $mailform= $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "psa.ottawau@gmail.com"
    $headers = "From: ".$mailform;
    $txt= "You have received an email from".$name.".\n\n".$message;
    
    
    
        
    mail($_mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
    
    
}

