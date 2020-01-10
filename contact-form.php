<?php
    
    if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $my_email = 'jackytam23468@hotmail.com';
    $headers = "From: " .$email;
    $email_subject = "You have new mail from your website"
    $body = "New Email from" .$first_name.".\n\n".$message;
    
    mail($my_email,$email_subject,$body,$headers);
    header("Location: contact.php?mailsend");

    }
