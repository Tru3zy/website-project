<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['Message'];

$email_from = 'Hotbeans@Hotbeans.com';

$email_subject = 'new form submission'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $Message .\n";
         
$to =  'danieltruman88@outlook.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>