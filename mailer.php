<?php

//See if the mail is valid
function checkspam($filed){
  $filed = filter_var($filed, FILTER_SANITIZE_EMAIL);
  if(filter_var($filed, FILTER_VALIDATE_EMAIL)){
    return true;
  }else{
    return false;
  }
}


$to = 'joakim.pg.isaksson@gmail.com';
$name 	= strip_tags($_POST['name']);
$email 	= strip_tags($_POST['email']);
$phone  = strip_tags($_POST['phone']);
$message = strip_tags($_POST['message']);
$message = strip_tags(wordwrap($message, 70));
$subject = "Meddelande från Cafe Öbergska";



if (!checkspam($email)) {
  $email = 'no way man';
} else {
  mail($to,utf8_decode($subject),utf8_decode($message),utf8_decode("Från: $name\nEmail: $email\nTel: $phone\n"));
}

$array = ['from' => $name,
          'email' => $email,
          'phone' => $phone,
          'message' => $message
          ];

echo json_encode($array);
