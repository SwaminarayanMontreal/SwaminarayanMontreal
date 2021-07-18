<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "swaminarayanmontreal@gmail.com";
$subject = "MSSMV info Required";

$body = "This an email from MSSMV website from $firstname \n 
Message $message \n  Sender contact info: $email";

mail($to,$subject,$message);

echo "Message Sent Successfully.";

?>