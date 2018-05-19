<?php
/*
For smtp server use: 
Email - resnicoman@mail.ru
Pass for email - dflbv3005
server - smtp.mail.ru
pass - dflbv3005
*/

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$to = 'resnicoman@mail.ru'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Форма обратной связи ресницомания.бел";
$email_body = "Вы получили новое сообщение.\n\n"."Детали:\nИмя: $name\n\nEmail: $email_address\n\nКонтактный номер: $phone\n\nСообщение:\n$message";
$headers = "От: $email_address\n";
$headers .= "Ответить: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>

