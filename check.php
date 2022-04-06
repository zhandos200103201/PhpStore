<?php
  // print_r($_POST);
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if(trim($email) == '')
    $error = 'Write your email';
  else if(trim($message) == '')
    $error = 'Write your message';
  else if(strlen($message) < 10)
    $error = 'Your message should be at least 10 characters';

  if($error != '')
    echo $error;
    exit;

  // $subject = "=?utf-8?B?".base64_encode("Test message")."?=";
  // $headers = "From: $email\r\n
  //             Reply-to: $email\r\n
  //             Content-type: text/html;
  //             charset=utf-8\r\n"
  //
  // mail('saparbayevzh03@gmail.com', $subject, $message, $headers);
  // header('Location: /about.php/');
?>
