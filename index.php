<?php
 
require_once __DIR__.'/vendor/autoload.php';


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465))
  ->setUsername('joas036')
  ->setPassword('17935123,3')
  ->setEncryption('ssl');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('titulo do email'))
  ->setFrom(['joas036@gmail.com' => 'foi mesmo???'])
  ->setTo(['joas036@gmail.com', 'other@domain.org' => 'que e esse nome?'])
  ->setBody('Corpo do email') ;

// Send the message
$result = $mailer->send($message);

