<?php

$name = ( isset($_POST['name'] )) ? $_POST['name'] : 'no name';
$lname = ( isset($_POST['lname'] )) ? $_POST['lname'] : 'no lastname';
$email = ( isset($_POST['email'] )) ? $_POST['email'] : 'no email';
$address = ( isset($_POST['address'] )) ? $_POST['address'] : 'no address';
$message = ( isset($_POST['message'] )) ? $_POST['message'] : 'no message';

$array = ['name' => $name,
          'lname' => $lname,
          'email' => $email,
          'address' => $address,
          'message' => $message
        ];

echo json_encode($array);
