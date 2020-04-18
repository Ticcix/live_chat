<?php

return array (
  'dbHost' => 'localhost', // ჰოსტი
  'dbPort' => '3306', // პორტი
  'dbUser' => 'root', //ბაზის მომხარებელი
  'dbPassword' => 'root', //ბაზის პაროლი
  'dbName' => 'mirrormx_customer_chat', // მონაცემთა ბაზა
  'superUser' => 'root', // ადმინისტრატორი ნიკი
  'superPass' => 'root', // პაროლი
  'services' =>
  array (
    'mailer' =>
    array (
      'smtp' => '',
      'smtpSecure' => 'ssl',
      'smtpHost' => '',
      'smtpPort' => '465',
      'smtpUser' => '',
      'smtpPass' => '',
    ),
  ),
  'appSettings' =>
  array (
    'contactMail' => 'site@domain.com',
  ),
);

?>