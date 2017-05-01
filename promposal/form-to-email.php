<?php
if (isset($_POST['send']})
{
  $to = 'dnshelby712@gmail.com'
  $subject = 'Promposal'
  $message = 'Yes'
  $headers = "From: clashtroller99@gmail.com"

  echo $message

  mail($to, $subject, $message, $headers)
}
?>
