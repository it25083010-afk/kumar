<?php

$to = "it25083010@tsb-yyg.ac.jp";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = "Portfolio Contact Message";

$body = "
Name: $name

Email: $email

Message:
$message
";

$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "Message Sent Successfully";
} else {
    echo "Failed to Send Message";
}

?>